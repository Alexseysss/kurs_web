<?php

namespace App\Http\Controllers\Client\Putevka;

use App\Http\Controllers\Controller;
use App\Models\Putevka;
use function dd;

class ShowController extends Controller
{
    public function __invoke(Putevka $putevka)
    {
        return view('client.putevka.show', compact('putevka'));
    }
}
