<?php

namespace App\Http\Controllers\Client\Comment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $comments = auth()->user()->comments;
        return view('client.comment.index', compact('comments'));
    }
}
