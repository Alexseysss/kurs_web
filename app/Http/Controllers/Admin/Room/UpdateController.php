<?php

namespace App\Http\Controllers\Admin\Room;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Room\UpdateRequest;
use App\Models\Room;
use Illuminate\Support\Facades\Storage;
use function dd;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Room $room)
    {
        $data = $request->validated();

        if(isset($data['post_image'])){
            $data['room_image'] = Storage::disk('public')->put('/images', $data['room_image']);
        }
        $room->update($data);
        return view('admin.room.show', compact('room'));
    }
}
