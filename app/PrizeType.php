<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrizeType extends Model
{
    protected $fillable = [
        'title'
    ];

    public function nominates()
    {
        return $this->hasMany(PrizeNominate::class);
    }
}
