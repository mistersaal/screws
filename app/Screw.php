<?php

namespace App;

use App\Traits\HasVisibilityAttribute;
use Illuminate\Database\Eloquent\Model;

class Screw extends Model
{
    use HasVisibilityAttribute;

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

    public function getParametersTree(bool $all = false)
    {
        if ($all) {
            $screws = $this->all();
        } else {
            $screws = $this->getVisibleItems();
        }
        $tree = [];

        foreach ($screws as $screw) {
            $tree[$screw->screw_type_id][$screw->screw_color_id][$screw->screw_length_id][] = $screw->screw_manufacturer_id;
        }

        return $tree;
    }

}
