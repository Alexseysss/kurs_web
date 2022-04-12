<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use function dd;

class CreateController extends BaseController
{
    public function __invoke()
    {

        return view('admin.post.create');
    }
}
