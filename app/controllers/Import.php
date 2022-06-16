<?php

class Import extends Controller
{
    public function __construct() {
        if(!isset($_SESSION['user'])) header("location: ".BASEURL);
        if($_SESSION['user'] != 'panitia') header("location: ".BASEURL);
    }

    public function index()
    {
        // $data['camin'] = $this->model('m_camin')->getAll();
        $this->view('import');
    }

    public function importexcel()
    {
        $this->model('m_user')->importuser($_FILES);
        header("location: ".BASEURL.'viewuser');
    }
}