<?php

class Vote extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION['user'])) header("location: " . BASEURL);
    }

    public function index()
    {
        $data['camin'] = $this->model('m_camin')->getAll();
        if($_SESSION['status'] == "Sudah") $this->view('closedvote', $data);
        else $this->view('vote', $data);
    }

    public function select()
    {
        if (isset($_POST['submit'])) {
            $this->model('m_user')->voting($_POST);
            $this->view('makasih');
            session_unset();
        } else {
            header("location: " . BASEURL);
        }
    }
}
