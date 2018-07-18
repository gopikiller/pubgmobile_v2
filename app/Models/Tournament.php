<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tournament.
 */
class Tournament extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'date', 'time', 'fee', 'prize', 'type_id', 'is_active', 'max_teams', 'min_teams'
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

}
