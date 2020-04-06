<?php

namespace App;

use App\Traits\HasVisibilityAttribute;
use Illuminate\Database\Eloquent\Model;

class ScrewConfig extends Model
{
    use HasVisibilityAttribute;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'individual',
        'visible',
    ];

    public function parameterValues()
    {
        return $this->belongsToMany(
            ScrewParameterValue::class,
            'screw_config_screw_parameter_value',
            'screw_config_id',
            'screw_parameter_value_id'
        );
    }

    public function screws()
    {
        return $this->hasMany(Screw::class);
    }
}
