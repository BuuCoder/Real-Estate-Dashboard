<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Listing;
use App\Models\PostType;
use Illuminate\Support\Facades\Log;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->get('q');
        $category = $request->get('category');
        $type = $request->get('type', 'all'); // 'posts', 'listings', or 'all'
        
        $posts = collect();
        $listings = collect();
        $postTypes = PostType::all();
        
        // Log search request for debugging
        Log::info('Search request', [
            'query' => $query,
            'category' => $category,
            'type' => $type
        ]);
        
        if ($query) {
            // Search in posts
            if ($type === 'all' || $type === 'posts') {
                try {
                    $postsQuery = Post::published();
                    
                    if ($category) {
                        $postsQuery->whereHas('postTypes', function($q) use ($category) {
                            $q->where('post_types.id', $category);
                        });
                    }
                    
                    $posts = $postsQuery->where(function($q) use ($query) {
                        $q->where('title', 'LIKE', "%{$query}%")
                          ->orWhere('content', 'LIKE', "%{$query}%")
                          ->orWhere('summary', 'LIKE', "%{$query}%");
                    })->with(['author', 'postTypes'])->get();
                    
                    Log::info('Posts search result', ['count' => $posts->count()]);
                } catch (\Exception $e) {
                    Log::error('Posts search error', ['error' => $e->getMessage()]);
                    $posts = collect();
                }
            }
            
            // Search in listings
            if ($type === 'all' || $type === 'listings') {
                try {
                    $listings = Listing::where('status', 'published')
                        ->where(function($q) use ($query) {
                            $q->where('title', 'LIKE', "%{$query}%")
                              ->orWhere('description', 'LIKE', "%{$query}%");
                        })
                        ->with(['user', 'province', 'images'])
                        ->get();
                    
                    Log::info('Listings search result', ['count' => $listings->count()]);
                } catch (\Exception $e) {
                    Log::error('Listings search error', ['error' => $e->getMessage()]);
                    $listings = collect();
                }
            }
        }
        
        return view('search.index', compact('posts', 'listings', 'query', 'category', 'type', 'postTypes'));
    }
}