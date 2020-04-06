<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScrewParameterValue extends Model
{
    public $timestamps = false;

    protected $fillable = ['value', 'visible'];

    public function parameter()
    {
        return $this->belongsTo(ScrewParameter::class, 'screw_parameter_id');
    }

    public function configs()
    {
        return $this->belongsToMany(
            ScrewConfig::class,
            'screw_config_screw_parameter_value',
            'screw_parameter_value_id',
            'screw_config_id'
        );
    }

    public function screws()
    {
        return $this->belongsToMany(
            Screw::class,
            'screw_screw_parameter_value',
            'screw_parameter_value_id',
            'screw_id'
        );
    }
}
