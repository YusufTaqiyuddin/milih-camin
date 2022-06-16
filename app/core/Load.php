<?php 

class Load 
{
    public function libraries($librarie)
    {
        require_once '../app/libraries/'. ucfirst($librarie) . '.php';
    }

    public function assets($asset)
    {
        return BASEURL.'assets/'.$asset;
    }
}