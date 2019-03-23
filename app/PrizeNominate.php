<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrizeNominate extends Model
{
    protected $fillable = [
        'name', 'prize_type_id'
    ];

    public function type()
    {
        return $this->belongsTo(PrizeType::class, 'prize_type_id');
    }
}
