<?php

namespace App;

use App\Traits\HasVisibilityAttribute;
use Illuminate\Database\Eloquent\Model;

class ScrewParameter extends Model
{
    use HasVisibilityAttribute;
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
