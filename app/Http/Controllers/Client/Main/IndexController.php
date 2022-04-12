<?php

namespace App\Http\Controllers\Client\Main;

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
        $data['putevkasCount'] = Putevka::all()->count();
        $data['likedPostsCount'] = auth()->user()->LikedPosts->count();
        return view('client.main.index', compact('data'), );
    }
}
