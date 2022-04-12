<?php

namespace App\Http\Controllers\Admin\Putevka;

use App\Http\Controllers\Controller;
use App\Models\Putevka;
use function dd;

class ShowController extends Controller
{
    public function __invoke(Putevka $putevka)
    {
        return view('admin.putevka.show', compact('putevka'));
    }
}
