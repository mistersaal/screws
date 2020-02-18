<?php

namespace App;

use App\Traits\HasVisibilityAttribute;
use Illuminate\Database\Eloquent\Model;

class Screw extends Model
{
    use HasVisibilityAttribute;

    public function length()
    {
        return $this->belongsTo(ScrewLength::class, 'screw_length_id');
    }

    public function manufacturer()
    {
        return $this->belongsTo(ScrewManufacturer::class, 'screw_manufacturer_id');
    }

    public function config()
    {
        return $this->belongsTo(ScrewConfig::class, 'screw_config_id');
    }

}
