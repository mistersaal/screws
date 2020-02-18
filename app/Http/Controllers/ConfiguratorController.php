<?php

namespace App\Http\Controllers;

use App\ScrewColor;
use App\ScrewConfig;
use App\ScrewDiameter;
use App\ScrewLength;
use App\ScrewManufacturer;
use App\ScrewSlot;
use App\ScrewTip;
use App\ScrewTypeOfHead;

class ConfiguratorController extends Controller
{
    public function getConfiguratorData(
        ScrewConfig $screwConfig,
        ScrewLength $screwLength,
        ScrewManufacturer $screwManufacturer,
        ScrewTypeOfHead $screwTypeOfHead,
        ScrewColor $screwColor,
        ScrewTip $screwTip,
        ScrewDiameter $screwDiameter,
        ScrewSlot $screwSlot
    )
    {
        $configs = $screwConfig->getVisibleItems(['id', 'type'])->pluck('type', 'id');
        $lengths = $screwLength->getVisibleItems(['id', 'name'])->pluck('name', 'id');
        $manufacturers = $screwManufacturer->getVisibleItems(['id', 'name'])->pluck('name', 'id');
        $typesOfHead = $screwTypeOfHead->getVisibleItems(['id', 'name'])->pluck('name', 'id');
        $colors = $screwColor->getVisibleItems(['id', 'name'])->pluck('name', 'id');
        $tips = $screwTip->getVisibleItems(['id', 'name'])->pluck('name', 'id');
        $diameters = $screwDiameter->getVisibleItems(['id', 'name'])->pluck('name', 'id');
        $slots = $screwSlot->getVisibleItems(['id', 'name'])->pluck('name', 'id');

        return [
            'configs' => $configs,
            'parameters' => compact('lengths', 'manufacturers'),
            'individual' => compact('typesOfHead', 'colors', 'tips', 'diameters', 'slots')
        ];
    }

}
