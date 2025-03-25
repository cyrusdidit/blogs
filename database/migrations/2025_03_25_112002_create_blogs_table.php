<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::dropIfExists('blogs'); // Ensure the table is deleted first
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('Untitled'); // Add a small change
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};
