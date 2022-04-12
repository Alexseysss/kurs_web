<?php

namespace App\Http\Controllers\Client\Putevka;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\User;
use function dd;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('client.putevka.create');
    }
}
