<?php

namespace App\Http\Controllers\Admin\Putevka;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Putevka\UpdateRequest;
use App\Models\Putevka;
use function dd;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Putevka $putevka)
    {
        $data = $request->validated();
        $putevka->update($data);
        return view('admin.putevka.show', compact('putevka'));
    }
}
