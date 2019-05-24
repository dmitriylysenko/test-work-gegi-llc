<?php
/**
 * Created by PhpStorm.
 * User: dmitriy
 * Date: 24.05.19
 * Time: 2:33
 */

namespace App;


abstract class School
{
    protected $months;
    protected $schoolData;

    public function __construct()
    {
        $response = $this->getContent();

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

    /**
     * @return mixed
     */
    abstract protected function getContent();
}