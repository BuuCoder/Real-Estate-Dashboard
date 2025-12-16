<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Listing;
use App\Models\PostType;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->get('q');
        $category = $request->get('category');
        $type = $request->get('type'); // 'posts', 'listings', or 'all'
        
        $posts = collect();
        $listings = collect();
        $postTypes = PostType::all();
        
        if ($query) {
            // Search in posts
            if (!$type || $type === 'all' || $type === 'posts') {
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
            }
            
            // Search in listings
            if (!$type || $type === 'all' || $type === 'listings') {
                $listings = Listing::where('status', 'published')
                    ->where(function($q) use ($query) {
                        $q->where('title', 'LIKE', "%{$query}%")
                          ->orWhere('description', 'LIKE', "%{$query}%");
                    })
                    ->with(['user', 'province', 'images'])
                    ->get();
            }
        }
        
        return view('search.index', compact('posts', 'listings', 'query', 'category', 'type', 'postTypes'));
    }
}