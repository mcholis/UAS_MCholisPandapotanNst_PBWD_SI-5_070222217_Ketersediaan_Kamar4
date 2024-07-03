<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomAllocation extends Model
{
    protected $fillable = ['room_id', 'patient_id', 'check_in_date', 'check_out_date'];

    public function room() {
        return $this->belongsTo(Room::class, 'room_id');
    }

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    use HasFactory;
}
