<?php

namespace App\Http\Controllers\Client\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\Comment\UpdateRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Comment $comment)
    {
        $data = $request->validated();
        $comment->update($data);
        return redirect()->route('client.comment.index');
    }
}
