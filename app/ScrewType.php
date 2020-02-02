<?php

namespace App;

use App\Traits\HasVisibilityAttribute;
use Illuminate\Database\Eloquent\Model;

class ScrewType extends Model
{
    use HasVisibilityAttribute;

    public $timestamps = false;
}
