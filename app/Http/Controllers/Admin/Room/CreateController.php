<?php

namespace App\Http\Controllers\Admin\Room;

use App\Http\Controllers\Controller;
use function dd;

class CreateController extends Controller
{
    public function __invoke()
    {

        return view('admin.room.create');
    }
}
