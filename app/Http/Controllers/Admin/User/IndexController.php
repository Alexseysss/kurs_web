<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use function dd;

class IndexController extends Controller
{
    public function __invoke()
    {
        $users = User::all();
        $roles = User::getRoles();
        return view('admin.user.index', compact('users','roles'));
    }
}
