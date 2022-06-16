<?php

class ErrorPage extends Controller
{
    public function error404()
    {
        $this->view('error404');
    }
}