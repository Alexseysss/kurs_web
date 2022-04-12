<?php

namespace App\Http\Controllers\Admin\Putevka;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Putevka\StoreRequest;
use App\Models\Putevka;
use function dd;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Putevka::create($data);
        return redirect()->route('admin.putevka.index');
    }
}
