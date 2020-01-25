<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Screw extends Model
{

    public function color()
    {
        return $this->belongsTo(ScrewColor::class, 'screw_color_id');
    }

    public function length()
    {
        return $this->belongsTo(ScrewLength::class, 'screw_length_id');
    }

    public function manufacturer()
    {
        return $this->belongsTo(ScrewManufacturer::class, 'screw_manufacturer_id');
    }

    public function type()
    {
        return $this->belongsTo(ScrewType::class, 'screw_type_id');
    }

    public function getParametersTree()
    {
        $screws = $this->all();
        $tree = [];

        foreach ($screws as $screw) {
            $tree[$screw->screw_type_id][$screw->screw_color_id][$screw->screw_manufacturer_id][] = $screw->screw_length_id;
        }

        return $tree;
    }

}
