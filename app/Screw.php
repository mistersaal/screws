<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Screw extends Model
{

    public function color()
    {
        return $this->hasOne(ScrewColor::class);
    }

    public function length()
    {
        return $this->hasOne(ScrewLength::class);
    }

    public function manufacturer()
    {
        return $this->hasOne(ScrewManufacturer::class);
    }

    public function type()
    {
        return $this->hasOne(ScrewType::class);
    }

}
