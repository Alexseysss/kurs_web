<?php

namespace App\Http\Controllers\Client\Putevka;

use App\Http\Controllers\Controller;
use function dd;

class IndexController extends Controller
{
    public function __invoke()
    {
        $putevkas = auth()->user()->userPutevkas;
        return view('client.putevka.index', compact('putevkas'));
    }
}
