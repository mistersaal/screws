<?php


namespace App;


use Illuminate\Support\Collection;

class Configurator
{
    private $screwParameter;
    private $screwConfig;

    /**
     * Configurator constructor.
     * @param ScrewParameter $screwParameter
     * @param ScrewConfig $screwConfig
     */
    public function __construct(ScrewParameter $screwParameter, ScrewConfig $screwConfig)
    {
        $this->screwParameter = $screwParameter;
        $this->screwConfig = $screwConfig;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|ScrewParameter[]
     */
    private function getVisibleParametersWithValues()
    {
        return $this->screwParameter->where('visible', true)
            ->with(
                [
                    'values' => function ($query) {
                        $query->where('visible', true);
                    },
                ]
            )->get();
    }

    /**
     * @param Collection|ScrewParameter[] $parameters
     * @param bool $isStandard
     * @return Collection
     */
    private function getParameters(Collection $parameters, bool $isStandard)
    {
        $individualParameters = new Collection();
        foreach ($parameters as $parameter) {
            if ($isStandard == $parameter->is_standard_field) {
                $individualParameters[$parameter->name] = $parameter->values->pluck('value', 'id');
            }
        }
        return $individualParameters;
    }

    /**
     * @param Collection|ScrewParameter[] $parameters
     * @return Collection
     */
    private function getParametersForSelectForm(Collection $parameters)
    {
        return $parameters->where('is_select_form')->pluck('name');
    }

    /**
     * @return Collection
     */
    private function getConfigs()
    {
        return $this->screwConfig->where('visible', true)->pluck('name');
    }

    /**
     * @return array
     */
    public function getDataForConfigurator()
    {
        $parameters = $this->getVisibleParametersWithValues();
        $individualParameters = $this->getParameters($parameters, false);
        $standardParameters = $this->getParameters($parameters, true);
        $inSelect = $this->getParametersForSelectForm($parameters);
        $configs = $this->getConfigs();


        return [
            'config' => $configs,
            'individual' => $individualParameters,
            'standard' => $standardParameters,
            'inSelect' => $inSelect
        ];
    }
}
