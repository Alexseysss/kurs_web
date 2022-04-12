<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Putevka extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'putevkas';
    protected $guarded = false;


    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
