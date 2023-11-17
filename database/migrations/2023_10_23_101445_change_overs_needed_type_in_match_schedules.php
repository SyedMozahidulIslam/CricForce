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
        Schema::table('match_schedules', function (Blueprint $table) {
            $table->float('team1_overs_needed')->change();
            $table->float('team2_overs_needed')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('match_schedules', function (Blueprint $table) {
            //
        });
    }
};
