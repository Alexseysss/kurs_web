<?php

namespace App\Http\Controllers\Client\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Comment $comment)
    {
        return view('client.comment.edit', compact('comment'));
    }
}
