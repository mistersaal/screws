<?php

namespace App\Http\Controllers;


use App\Configurator;

class ConfiguratorController extends Controller
{
    public function getConfiguratorData(Configurator $configurator)
    {
        return $configurator->getDataForConfigurator();
    }

}
