<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration {
    public function up() {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_number');
            $table->foreignId('room_level_id')->constrained('room_levels');
            $table->boolean('is_available')->default(true);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('rooms');
    }
}