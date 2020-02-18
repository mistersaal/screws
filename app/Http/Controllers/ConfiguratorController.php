<?php

namespace App\Http\Controllers;

use App\Screw;
use App\ScrewColor;
use App\ScrewLength;
use App\ScrewManufacturer;
use App\ScrewConfig;

class ConfiguratorController extends Controller
{
    public function getConfiguratorData(
        Screw $screw,
        ScrewColor $screwColor,
        ScrewLength $screwLength,
        ScrewManufacturer $screwManufacturer,
        ScrewConfig $screwType
    )
    {
        $screws = $screw->getParametersTree();
        $colors = $screwColor->getVisibleItems(['id', 'name'])->keyBy('id');
        $lengths = $screwLength->getVisibleItems(['id', 'name'])->keyBy('id');
        $manufacturers = $screwManufacturer->getVisibleItems(['id', 'name'])->keyBy('id');
        $types = $screwType->getVisibleItems(['id', 'name'])->keyBy('id');

        return compact('screws', 'colors', 'lengths', 'manufacturers', 'types');
    }

    private function idToIndex($array)
    {

    }
}
