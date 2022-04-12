<?php

namespace App\Http\Controllers\Client\Liked;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = auth()->user()->LikedPosts;
        return view('client.liked.index', compact('posts'));
    }
}
