<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Entry.
 */
class Entry extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['tournament_id', 'team_name', 'player_1', 'player_2', 'player_3', 'player_4', 'type_id', 'charater_id','mobile_number'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
