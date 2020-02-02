<?php

namespace App;

use App\Traits\HasVisibilityAttribute;
use Illuminate\Database\Eloquent\Model;

class ScrewManufacturer extends Model
{
    use HasVisibilityAttribute;

    public $timestamps = false;
}
