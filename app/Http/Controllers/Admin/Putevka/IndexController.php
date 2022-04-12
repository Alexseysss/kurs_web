<?php

namespace App\Http\Controllers\Admin\Putevka;

use App\Http\Controllers\Controller;
use App\Models\Putevka;
use App\Models\Room;
use function dd;

class IndexController extends Controller
{
    public function __invoke()
    {
        $putevkas = Putevka::all();
        return view('admin.putevka.index', compact('putevkas'));
    }
}
