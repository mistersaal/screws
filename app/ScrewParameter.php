<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScrewParameter extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'is_standard_field',
        'is_select_form',
        'visible'
    ];

    public function values()
    {
        return $this->hasMany(ScrewParameterValue::class);
    }
}
