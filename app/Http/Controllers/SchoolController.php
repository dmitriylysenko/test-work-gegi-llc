<?php

namespace App\Http\Controllers;

use App\SchoolFileApplications;

class SchoolController extends Controller
{
    public function table()
    {
        $applications = new SchoolFileApplications();
        return view('applications.table', ['applications' => $applications]);
    }

    public function chart()
    {
        $applications = new SchoolFileApplications();
        return view('applications.chart', ['chart' => $applications->renderChart()]);
    }
}
