<?php

namespace App;

class SchoolApiApplications extends School
{

    protected $months;
    protected $schoolData;


    protected function getContent()
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL,'https://api.example.com/' );
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'APIKEY: 123456',
            'Content-Type: application/json',
        ]);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

        // EXECUTE:
        $result = curl_exec($curl);
        if (!$result) {
            die("Connection Failure");
        }
        curl_close($curl);
        return $result;
    }


}
