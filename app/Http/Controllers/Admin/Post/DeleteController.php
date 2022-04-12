<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use function dd;

class DeleteController extends BaseController
{
    public function __invoke(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.post.index');
    }
}
