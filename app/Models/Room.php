<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'floor_number',
        'room_number',
        'description',
        'room_status_id',
        'room_type_id'
    ];
}
