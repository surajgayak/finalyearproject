<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class ExampleChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
{
    $this->options([
        'legend' => [
            'display' => false,
        ],
    ]);

    $this->labels(['January', 'February', 'March', 'April', 'May', 'June', 'July'])
         ->dataset('My dataset', 'line', [1, 2, 3, 4, 5, 6, 7]);
}

}