<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BattingStat extends Model
{
    use HasFactory;

    protected $fillable = [
        'player_id',
        'format',
        'matches',
        'runs',
        'highest_runs',
        'hundreds',
        'fifties',
    ];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
