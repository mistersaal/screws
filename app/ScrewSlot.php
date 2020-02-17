<?php

namespace App;

use App\Traits\HasVisibilityAttribute;
use Illuminate\Database\Eloquent\Model;

class ScrewSlot extends Model
{
    use HasVisibilityAttribute;

    public $timestamps = false;
}
