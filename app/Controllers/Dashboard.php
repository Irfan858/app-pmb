<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    //Construct
    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    //Halaman Dashboard
    public function index()
    {
        $data['title'] = "APP-PMB | Dashboard";
        $data['page']  = "dashboard";
        $data['nama']  = $this->session->get('nama');
        $data['email'] = $this->session->get('email');
        return view('v_dashboard/index', $data);
    }

    //Logout
    public function Logout ()
    {
        $this->session->destroy();
        return redirect()->to('/');
    }
}
