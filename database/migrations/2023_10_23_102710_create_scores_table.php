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
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id')->constrained('players');
            $table->foreignId('match_id')->constrained('match_schedules');
            $table->foreignId('team_id')->constrained('teams');
            $table->unsignedInteger('runs');
            $table->unsignedInteger('balls_played');
            $table->unsignedInteger('wickets_got');
            $table->float('overs_bowled', 5, 2);
            $table->unsignedInteger('fours');
            $table->unsignedInteger('sixes');
            $table->float('strike_rate', 5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scores');
    }
};
