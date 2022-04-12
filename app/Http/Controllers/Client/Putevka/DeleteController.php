<?php

namespace App\Http\Controllers\Admin\Putevka;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Putevka\UpdateRequest;
use App\Models\Putevka;
use function dd;

class DeleteController extends Controller
{
    public function __invoke(Putevka $putevka)
    {
        $putevka->delete();
        return redirect()->route('admin.putevka.index');
    }
}
