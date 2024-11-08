<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'age',
        'room_id',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
