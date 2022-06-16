<?php

class Panel extends Controller
{
    public function __construct() {
        if(!isset($_SESSION['user'])) header("location: ".BASEURL);
        if($_SESSION['user'] != 'panitia') header("location: ".BASEURL);
    }

    public function index()
    {
        $data['camin'] = $this->model('m_camin')->getAll();
        $data['user'] = $this->model('m_user')->getAll();
        $this->view('panel', $data);
    }
}