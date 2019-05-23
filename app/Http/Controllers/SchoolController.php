<?php

namespace App\Http\Controllers;

use App\SchoolApplications;

class SchoolController extends Controller
{
    public function table()
    {
        $applications = new SchoolApplications();
        return view('applications.table', ['applications' => $applications]);
    }

    public function chart()
    {
        $applications = new SchoolApplications();
        $series       = [];
        foreach ($applications->getSchoolData() as $key => $schoolData) {
            $series[] = [
                'name' => $key,
                'data' => $schoolData
            ];
        }
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
                'categories' => $applications->getMonths(),
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
                $series
            )
            ->display();
        return view('applications.chart', ['chart' => $chart]);
    }
}
