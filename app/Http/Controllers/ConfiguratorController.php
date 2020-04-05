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
        $config = $screwConfig
            ->getTypes()
            ->pluck('type', 'id');
        $length = $screwLength
            ->getVisibleItems(['id', 'name'])
            ->pluck('name', 'id');
        $manufacturer = $screwManufacturer
            ->getVisibleItems(['id', 'name'])
            ->pluck('name', 'id');
        $typeOfHead = $screwTypeOfHead
            ->getVisibleItems(['id', 'name'])
            ->pluck('name', 'id');
        $color = $screwColor
            ->getVisibleItems(['id', 'name'])
            ->pluck('name', 'id');
        $tip = $screwTip
            ->getVisibleItems(['id', 'name'])
            ->pluck('name', 'id');
        $diameter = $screwDiameter
            ->getVisibleItems(['id', 'name'])
            ->pluck('name', 'id');
        $slot = $screwSlot
            ->getVisibleItems(['id', 'name'])
            ->pluck('name', 'id');

        return [
            'config' => $config,
            'parameters' => compact('length', 'manufacturer'),
            'individual' => compact('typeOfHead', 'color', 'tip', 'diameter', 'slot'),
            'rus' => [
                'config' => 'Тип',
                'length' => 'Длина, мм',
                'manufacturer' => 'Производитель',
                'typeOfHead' => 'Тип головки',
                'color' => 'Покрытие',
                'tip' => 'Наконечник',
                'diameter' => 'Диаметр, мм',
                'slot' => 'Шлиц'
            ],
            'inSelect' => [
                'length',
                'diameter'
            ]
        ];
    }

}
