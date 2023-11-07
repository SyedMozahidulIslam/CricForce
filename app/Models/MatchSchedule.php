<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'match_date',
        'venue_id',
        'team1_id',
        'team2_id',
        'match_type',
        'won_team_id',
        'lost_team_id',
        'team1_runs',
        'team1_overs_needed',
        'team2_runs',
        'team2_overs_needed',
    ];

    public function venue()
    {
        return $this->belongsTo(Stadium::class, 'venue_id');
    }

    public function team1()
    {
        return $this->belongsTo(Team::class, 'team1_id');
    }

    public function team2()
    {
        return $this->belongsTo(Team::class, 'team2_id');
    }

    public function wonTeam()
    {
        return $this->belongsTo(Team::class, 'won_team_id');
    }

    public function lostTeam()
    {
        return $this->belongsTo(Team::class, 'lost_team_id');
    }

    public function won_team()
    {
        return $this->belongsTo(Team::class, 'won_team_id');
    }

}
