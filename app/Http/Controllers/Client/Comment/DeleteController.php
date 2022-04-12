<?php

namespace App\Http\Controllers\Client\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('client.comment.index');
    }
}
