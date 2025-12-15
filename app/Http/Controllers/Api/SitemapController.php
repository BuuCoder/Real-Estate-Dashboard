<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Listing;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    private const DOMAIN = 'https://phatdatbatdongsan.com';

    public function index(): Response
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

        // Homepage
        $xml .= $this->buildUrl('/', '1.0', 'daily');

        // Static pages
        $staticPages = [
            '/tin-tuc' => ['priority' => '0.8', 'changefreq' => 'daily'],
            '/nha-dat-ban' => ['priority' => '0.8', 'changefreq' => 'daily'],
            '/lien-he' => ['priority' => '0.6', 'changefreq' => 'monthly'],
            '/cau-hoi-thuong-gap' => ['priority' => '0.5', 'changefreq' => 'monthly'],
            '/chinh-sach-bao-mat' => ['priority' => '0.4', 'changefreq' => 'yearly'],
            '/dieu-khoan-su-dung' => ['priority' => '0.4', 'changefreq' => 'yearly'],
        ];

        foreach ($staticPages as $path => $config) {
            $xml .= $this->buildUrl($path, $config['priority'], $config['changefreq']);
        }

        // Posts (Tin tức chi tiết)
        $posts = Post::where('status', 'published')
            ->whereNotNull('slug')
            ->select('slug', 'updated_at')
            ->orderBy('updated_at', 'desc')
            ->get();

        foreach ($posts as $post) {
            $xml .= $this->buildUrl(
                '/tin-tuc/' . $post->slug,
                '0.7',
                'weekly',
                $post->updated_at?->toW3cString()
            );
        }

        // Listings (Nhà đất bán chi tiết)
        $listings = Listing::where('status', 'published')
            ->whereNotNull('slug')
            ->select('slug', 'updated_at')
            ->orderBy('updated_at', 'desc')
            ->get();

        foreach ($listings as $listing) {
            $xml .= $this->buildUrl(
                '/nha-dat-ban/' . $listing->slug,
                '0.7',
                'weekly',
                $listing->updated_at?->toW3cString()
            );
        }

        $xml .= '</urlset>';

        return response($xml, 200, [
            'Content-Type' => 'application/xml; charset=UTF-8',
        ]);
    }

    private function buildUrl(string $path, string $priority, string $changefreq, ?string $lastmod = null): string
    {
        $url = '  <url>' . PHP_EOL;
        $url .= '    <loc>' . self::DOMAIN . $path . '</loc>' . PHP_EOL;
        
        if ($lastmod) {
            $url .= '    <lastmod>' . $lastmod . '</lastmod>' . PHP_EOL;
        }
        
        $url .= '    <changefreq>' . $changefreq . '</changefreq>' . PHP_EOL;
        $url .= '    <priority>' . $priority . '</priority>' . PHP_EOL;
        $url .= '  </url>' . PHP_EOL;

        return $url;
    }
}
