<?php

namespace App\Http\Controllers\Client\Liked;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Post $post)
    {
        auth()->user()->LikedPosts()->detach($post->id);
        return redirect()->route('client.liked.index');
    }
}
