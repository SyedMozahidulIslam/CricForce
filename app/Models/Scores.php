<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scores extends Model
{
    use HasFactory;

    protected $fillable = [
        'player_id',
        'match_id',
        'team_id',
        'runs',
        'balls_played',
        'wickets_got',
        'overs_bowled',
        'fours',
        'sixes',
        'strike_rate',
    ];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    public function match()
    {
        return $this->belongsTo(MatchSchedule::class, 'match_id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }


}
