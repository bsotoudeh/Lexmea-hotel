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
        'capacity',
        'status',
    ];
    public function guests()
    {
        return $this->hasMany(Guest::class);
    }
}
