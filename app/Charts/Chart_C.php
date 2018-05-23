<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class Chart_C extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->labels(['Kantor Pusat', 'Kanwil 1', 'Kanwil 2', 'Kanwil 3', 'Kanwil 4', 'Kanwil 5',
        'Kanwil 6','Kanwil 7','Kanwil 8','Kanwil 9','Kanwil 10','Kanwil 11','Kanwil 12'])
        ->options([
          'legend'=>[
            'display'=> false
            
          ]
        ]);
    }
}
