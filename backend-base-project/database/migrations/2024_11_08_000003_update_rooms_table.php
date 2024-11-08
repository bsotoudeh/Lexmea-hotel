<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateRoomsTable extends Migration
{
    public function up()
    {
        // Renaming columns (if necessary)
        Schema::table('rooms', function (Blueprint $table) {
            $table->renameColumn('floor_number', 'floor_id'); // Renaming floor_number to floor_id

            // Add any new columns if needed
            $table->integer('new_column')->nullable(); // Example of adding a new column
        });
    }

    public function down()
    {
        // Rollback the renaming and added columns if necessary
        Schema::table('rooms', function (Blueprint $table) {
            $table->renameColumn('floor_id', 'floor_number'); // Rolling back the rename
            $table->dropColumn('new_column'); // Dropping the new column if rolled back
        });
    }
}
