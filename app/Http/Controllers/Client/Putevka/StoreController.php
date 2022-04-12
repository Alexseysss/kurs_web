<?php

namespace App\Http\Controllers\Client\Putevka;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\Putevka\StoreRequest;
use App\Models\Putevka;
use function dd;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Putevka::create($data);
        return redirect()->route('client.putevka.index');
    }
}
