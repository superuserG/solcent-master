<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class Chart_B extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->labels(['Presented Calls','Handled Calls','Abandoned Calls']);
        $this->minimalist(true)->displayLegend(true);
    }
}
