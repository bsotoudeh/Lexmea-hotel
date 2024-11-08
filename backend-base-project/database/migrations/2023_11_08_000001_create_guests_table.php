<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestsTable extends Migration
{
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('full_name'); // Guest full name
            $table->integer('age'); // Guest age
            $table->foreignId('room_id')->nullable()->constrained('rooms')->onDelete('set null'); // Room assigned to the guest (nullable)
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('guests'); // Drop guests table if rollback
    }
}
