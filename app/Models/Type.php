<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Type.
 */
class Type extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'num_of_players'
    ];
}
