<?php

namespace App\Http\Controllers\Admin\Room;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Room\StoreRequest;
use App\Models\Room;
use Illuminate\Support\Facades\Storage;
use function dd;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['room_image'] = Storage::disk('public')->put('/images', $data['room_image']);
        Room::create($data);
        return redirect()->route('admin.room.index');
    }
}
