<?php

namespace solar\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use ConsoleTVs\Charts\Features\Chartjs\Dataset as DatasetFeatures;


class ProductionChart extends Chart
{
    use DatasetFeatures;
    /**
     * Initializes the chart.
     *
     * @return void
     */

    public function __construct(string $name, string $type, array $values)
    {
        parent::__construct($name, $type, $values);
        $this->options([
            'borderWidth' => 2,
        ]);
    }

    public function format()
    {
        return array_merge($this->options, [
            'data'  => $this->values,
            'label' => $this->name,
            'type'  => $this->type,
        ]);
    }
}
