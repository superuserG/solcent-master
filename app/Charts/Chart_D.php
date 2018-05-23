<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class Chart_D extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->labels(['KBB','Rekening','Kartu ATM','Produk Jasa','E-Channel'])
        ->options(['legend'=>['display'=>false]]);
    }
}
