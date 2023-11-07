<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BowlingStats extends Model
{
    use HasFactory;

    protected $fillable = [
        'player_id',
        'format',
        'matches',
        'wickets',
        'best',
    ];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
