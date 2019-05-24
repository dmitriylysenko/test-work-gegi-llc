<?php

namespace App;

class SchoolFileApplications extends School
{

    protected $months;
    protected $schoolData;

    protected function getContent()
    {
        return json_decode(file_get_contents(storage_path('app/data.json')), true);
    }

    public function prepareDataForHighcharts()
    {
        $series = [];
        foreach ($this->getSchoolData() as $key => $schoolData) {
            $series[] = [
                'name' => $key,
                'data' => $schoolData
            ];
        }
        return $series;
    }

    public function renderChart()
    {
        $chart = \Chart::title([
            'text' => 'Applications for training in 5 school programs',
        ])
            ->chart([
                'type'     => 'line', // pie , columnt ect
                'renderTo' => 'chart', // render the chart into your div with id
            ])
            ->subtitle([
                'text' => 'Per year',
            ])
//            ->colors([
//                '#0c2959'
//            ])
            ->xaxis([
                'categories' => $this->getMonths(),
                'labels'     => [
                    'rotation' => 15,
                    'align'    => 'top',
//                    'formatter' => 'startJs:function(){return this.value + " (Footbal Player)"}:endJs',
                    // use 'startJs:yourjavasscripthere:endJs'
                ],
            ])
            ->yaxis([
                'text' => 'This Y Axis',
            ])
            ->legend([
                'layout'        => 'vertikal',
                'align'         => 'right',
                'verticalAlign' => 'middle',
            ])
            ->series(
                $this->prepareDataForHighcharts()
            )
            ->display();
        return $chart;
    }

}
