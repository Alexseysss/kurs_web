<?php

namespace App\Http\Controllers\Client\Putevka;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\Putevka\UpdateRequest;
use App\Models\Putevka;
use function dd;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Putevka $putevka)
    {
        $data = $request->validated();
        $putevka->update($data);
        $putevkas = auth()->user()->userPutevkas;
        return view('client.putevka.index', compact('putevkas'));
    }
}
