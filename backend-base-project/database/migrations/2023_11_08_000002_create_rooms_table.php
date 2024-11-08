<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->integer('floor_number'); // Floor number for the room
            $table->integer('room_number'); // Room number (like 101, 102)
            $table->integer('capacity'); // Capacity of the room
            $table->enum('status', ['READY', 'TAKEN', 'MAINTENANCE'])->default('READY'); // Room status (default: READY)
            $table->timestamps(); // Timestamps for creation and update
        });
    }

    public function down()
    {
        Schema::dropIfExists('rooms'); // Drop the rooms table on rollback
    }
}
