<?php


namespace App;


use Illuminate\Support\Collection;

class Configurator
{
    /** @var ScrewParameter */
    private $screwParameter;
    /** @var ScrewConfig */
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
     * @return Collection
     */
    private function getMappedParameters(Collection $parameters)
    {
        $mappedParameters = new Collection();
        foreach ($parameters as $parameter) {
            $mappedParameters[$parameter->string_id] = collect([
                'name' => $parameter->name,
                'values' => $parameter->values->pluck('value', 'id')
            ]);
        }
        return $mappedParameters;
    }

    /**
     * @param Collection|ScrewParameter[] $parameters
     * @return Collection
     */
    private function getParametersForSelectForm(Collection $parameters)
    {
        return $parameters->where('is_select_form')->pluck('string_id');
    }

    /**
     * @return Collection
     */
    private function getConfigs()
    {
        $configs = $this->screwConfig
            ->with('individualParameters')
            ->where('visible', true)
            ->get();
        $mappedConfigs = new Collection();
        foreach ($configs as $config) {
            $mappedConfigs->put($config->id, collect([
                'name' => $config->name,
                'individual' => $config->individualParameters->pluck('string_id'),
            ]));
        }

        return $mappedConfigs;
    }

    /**
     * @return array
     */
    public function getDataForConfigurator()
    {
        $parameters = $this->getVisibleParametersWithValues();
        $mappedParameters = $this->getMappedParameters($parameters);
        $inSelect = $this->getParametersForSelectForm($parameters);
        $configs = $this->getConfigs();


        return [
            'config' => $configs,
            'parameters' => $mappedParameters,
            'inSelect' => $inSelect
        ];
    }
}
