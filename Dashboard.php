<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function displayDashboard()
    {
        return view('Dashboard_view');
    }

    public function displayResidents()
    {
        return view('Residents');
    }

    public function displayActreports()
    {
        return view('Actreports');
    }

    public function displayEvents()
    {
        return view('Events');
    }

    public function getDashboard (){

        $Orders = 50;
        $array = [
            'Orders' => $Orders,
        ];
        return $this->response->setJSON($array);
    }
}
