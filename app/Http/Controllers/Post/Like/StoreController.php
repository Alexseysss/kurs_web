<?php

namespace App\Http\Controllers\Post\Like;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Post $post)
    {
        auth()->user()->likedPosts()->toggle($post->id);
        return redirect()->route('post.index', $post->id);
    }
}
