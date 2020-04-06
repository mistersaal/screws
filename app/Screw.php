<?php

namespace App;

use App\Traits\HasVisibilityAttribute;
use Illuminate\Database\Eloquent\Model;

class Screw extends Model
{
    use HasVisibilityAttribute;

    public function parameterValues()
    {
        return $this->belongsToMany(
            ScrewParameterValue::class,
            'screw_screw_parameter_value',
            'screw_id',
            'screw_parameter_value_id'
        );
    }

    public function config()
    {
        return $this->belongsTo(ScrewConfig::class, 'screw_config_id');
    }

}
