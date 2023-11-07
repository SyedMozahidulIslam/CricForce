<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    use HasFactory;

    protected $table = 'stadiums';

    protected $fillable = [
        'name',
        'location_link',
        'location_city',
        'picture1',
        'picture2',
        'description',
    ];
}
