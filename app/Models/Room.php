<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    protected $fillable = ['room_number', 'room_level_id', 'is_available'];

    public function level() {
        return $this->belongsTo(RoomLevel::class, 'room_level_id');
    }

    public function allocations() {
        return $this->hasMany(RoomAllocation::class);
    }
    
    use HasFactory;
}
