<?php

namespace App\Http\Controllers\Admin\Room;

use App\Http\Controllers\Controller;
use App\Models\Room;
use function dd;

class DeleteController extends Controller
{
    public function __invoke(Room $room)
    {
        $room->delete();
        return redirect()->route('admin.room.index');
    }
}
