<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{

    public function benefits()
    {
        return $this->hasMany(PlanBenefit::class);
    }

    public function getFormattedPrice()
    {
        return $this->price / 100;
    }

}
