<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('homestays', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('CASCADE');
            $table->string('name');
            $table->string('slug')->unique();
            $table->longText('description');
            $table->longText('features');
            $table->string('room_size');
            $table->string('occupancy');
            $table->string('view');
            $table->string('smoking');
            $table->string('bed_size');
            $table->string('location');
            $table->string('room_service');
            $table->string('swimming_pool');
            $table->integer('price');
            $table->enum('available', ['true', 'false'])->default('true');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homestays');
    }
};
