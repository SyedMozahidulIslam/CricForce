<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('bowling_stats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id')->constrained('players'); // Assuming the "players" table name
            $table->enum('format', ['Test', 'ODI', 'T20I', 'IPL']);
            $table->integer('matches');
            $table->integer('wickets');
            $table->string('best');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bowling_stats');
    }
};
