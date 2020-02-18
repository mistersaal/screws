<?php

namespace App;

use App\Traits\HasVisibilityAttribute;
use Illuminate\Database\Eloquent\Model;

class ScrewConfig extends Model
{
    use HasVisibilityAttribute;

    public $timestamps = false;

    public function color()
    {
        return $this->belongsTo(ScrewColor::class, 'screw_color_id');
    }

    public function diameter()
    {
        return $this->belongsTo(ScrewDiameter::class, 'screw_diameter_id');
    }

    public function typeOfHead()
    {
        return $this->belongsTo(ScrewTypeOfHead::class, 'screw_type_of_head_id');
    }

    public function slot()
    {
        return $this->belongsTo(ScrewSlot::class, 'screw_slot_id');
    }

    public function tip()
    {
        return $this->belongsTo(ScrewTip::class, 'screw_tip_id');
    }

    public function getTypes(bool $all = false)
    {
        if ($all) {
            return $this->where('individual', false)->get();
        } else {
            return $this->visibleItems()->where('individual', false)->get();
        }
    }
}
