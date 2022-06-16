<?php 

class Controller extends Load
{
    public function view($view, $data =[])
    {
        require_once '../app/views/'. $view . '.php';
    }

    public function model($model)
    {
        require_once '../app/models/'. ucfirst($model) . '.php';
        return new $model;
    }
}