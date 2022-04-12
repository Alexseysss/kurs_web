<?php

namespace App\Http\Controllers\Admin\Putevka;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\User;
use function dd;

class CreateController extends Controller
{
    public function __invoke()
    {
        $rooms = Room::all();
        $users = User::all();
        return view('admin.putevka.create', compact('rooms', 'users'));
    }
}
