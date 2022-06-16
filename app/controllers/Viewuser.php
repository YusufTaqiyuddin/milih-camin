<?php

class Viewuser extends Controller
{
    public function __construct() {
        if(!isset($_SESSION['user'])) header("location: ".BASEURL);
        if($_SESSION['user'] != 'panitia') header("location: ".BASEURL);
    }

    public function index()
    {
        $data['user'] = $this->model('m_user')->getAll();
        $this->view('viewuser', $data);
    }
    
    public function adduser()
    {
        if (isset($_POST['submit'])){
            $this->model('m_user')->adduser($_POST);
            header("location: ".BASEURL.'viewuser');
        } else {
            header("location: ".BASEURL);
        }
    }

    public function export()
    {
        $data['user'] = $this->model('m_user')->getAll();
        $this->view('exportuser', $data);
    }
}