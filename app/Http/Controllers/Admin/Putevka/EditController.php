<?php

namespace App\Http\Controllers\Admin\Putevka;

use App\Http\Controllers\Controller;
use App\Models\Putevka;
use App\Models\Room;
use App\Models\User;
use function dd;

class EditController extends Controller
{
    public function __invoke(Putevka $putevka)
    {
        $rooms = Room::all();
        $users = User::all();
        return view('admin.putevka.edit', compact('putevka','rooms', 'users'));
    }
}
