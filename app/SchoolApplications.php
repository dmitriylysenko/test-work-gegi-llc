<?php

namespace App;

class SchoolApplications
{

    protected $months;
    protected $schoolData;

    /**
     * SchoolApplications constructor.
     */
    public function __construct()
    {
        $response = json_decode(file_get_contents(storage_path('app/data.json')), true);

        $this->months     = $response['Columns'];
        $this->schoolData = $response['Rows'];
    }

    /**
     * @return mixed
     */
    public function getMonths()
    {
        return $this->months;
    }

    /**
     * @return mixed
     */
    public function getSchoolData()
    {
        return $this->schoolData;
    }
}
