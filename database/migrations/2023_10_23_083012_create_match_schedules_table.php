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
        Schema::create('match_schedules', function (Blueprint $table) {
            $table->id();
            $table->date('match_date');
            $table->unsignedBigInteger('venue_id');
            $table->unsignedBigInteger('team1_id');
            $table->unsignedBigInteger('team2_id');
            $table->enum('match_type', ['playoff', 'group', 'semi', 'quarter', 'final']);
            $table->unsignedBigInteger('won_team_id')->nullable();
            $table->unsignedBigInteger('lost_team_id')->nullable();
            $table->integer('team1_runs')->nullable();
            $table->integer('team1_overs_needed')->nullable();
            $table->integer('team2_runs')->nullable();
            $table->integer('team2_overs_needed')->nullable();
            $table->timestamps();

            $table->foreign('venue_id')->references('id')->on('stadiums');
            $table->foreign('team1_id')->references('id')->on('teams');
            $table->foreign('team2_id')->references('id')->on('teams');
            $table->foreign('won_team_id')->references('id')->on('teams');
            $table->foreign('lost_team_id')->references('id')->on('teams');
        });
    }

    public function down()
    {
        Schema::dropIfExists('match_schedules');
    }

};
