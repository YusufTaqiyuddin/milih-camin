<?php

class Editcamin extends Controller
{
    public function __construct() {
        if(!isset($_SESSION['user'])) header("location: ".BASEURL);
        if($_SESSION['user'] != 'panitia') header("location: ".BASEURL);
    }

    public function index()
    {
        $data['camin'] = $this->model('m_camin')->getAll();
        $this->view('crud', $data);
    }

    public function edit()
    {
        if (isset($_POST['submit'])){
            $this->model('m_camin')->edit($_POST, $_FILES);
            header("location: ".BASEURL.'editcamin');
        } else {
            header("location: ".BASEURL);
        }
    }
}