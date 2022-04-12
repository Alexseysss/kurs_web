<?php

namespace App\Http\Controllers\Client\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use function dd;

class ShowController extends Controller
{
    public function __invoke(User $user)
    {
        $roles = User::getRoles();
        return view('client.user.show', compact('user', 'roles'));
    }
}
