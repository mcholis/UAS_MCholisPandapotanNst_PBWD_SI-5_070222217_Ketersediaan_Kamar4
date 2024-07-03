<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomAllocationsTable extends Migration {
    public function up() {
        Schema::create('room_allocations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id')->constrained('rooms');
            $table->foreignId('patient_id')->constrained('patients');
            $table->date('check_in_date');
            $table->date('check_out_date')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('room_allocations');
    }
}
