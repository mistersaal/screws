<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScrewParameter extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'string_id',
        'is_select_form',
        'visible'
    ];

    public function values()
    {
        return $this->hasMany(ScrewParameterValue::class);
    }

    public function configsWithThisIndividualParameter()
    {
        return $this->belongsToMany(
            ScrewConfig::class,
            'screw_config_screw_parameter',
            'screw_parameter_id',
            'screw_config_id'
        );
    }
}
