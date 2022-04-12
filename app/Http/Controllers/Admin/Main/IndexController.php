<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Putevka;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $data['usersCount'] = User::all()->count();
        $data['putevkasCount'] = Putevka::all()->count();
        $data['roomsCount'] = Room::all()->count();
        $data['postsCount'] = Post::all()->count();
        return view('admin.main.index', compact('data'));
    }
}
