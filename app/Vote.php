<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = [
        'user_id', 'prize_type_id', 'prize_nominate_id', 'vote',
    ];
}
