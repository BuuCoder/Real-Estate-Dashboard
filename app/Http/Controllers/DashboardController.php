<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Listing;
use App\Models\PostType;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        // Thống kê tổng quan
        $stats = [
            'total_posts' => Post::count(),
            'published_posts' => Post::where('status', 'published')->count(),
            'draft_posts' => Post::where('status', 'draft')->count(),
            'total_listings' => Listing::count(),
            'published_listings' => Listing::where('status', 'published')->count(),
            'total_users' => User::count(),
        ];

        // Bài viết mới nhất
        $recentPosts = Post::with(['author', 'postTypes'])
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        // Bài đăng mới nhất
        $recentListings = Listing::with(['user', 'images'])
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        // Bài viết được xuất bản gần đây
        $recentPublishedPosts = Post::with(['author', 'postTypes'])
            ->where('status', 'published')
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        // Bài đăng có giá trị cao
        $highValueListings = Listing::with(['user', 'images'])
            ->where('status', 'published')
            ->orderBy('price_total', 'desc')
            ->take(3)
            ->get();

        return view('dashboard.index', compact(
            'stats',
            'recentPosts',
            'recentListings',
            'recentPublishedPosts',
            'highValueListings'
        ));
    }
}