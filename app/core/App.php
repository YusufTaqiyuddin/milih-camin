<?php

class App 
{
    protected $controller = DEFAULT_CONTROLLER;
    protected $method = 'index';
    protected $params = array(null);

    public function __construct() 
    {
        $url = $this->parseURL();
        // die(var_dump($url));
        session_start();
        
        if (file_exists('../app/controllers/' . ucfirst($url[0]) . '.php'))
        {
            $this->controller = $url[0];
            unset($url[0]);
            
            require_once '../app/controllers/' .ucfirst($this->controller) .'.php';
            $this->controller = new $this->controller;

            if (isset($url[1])) 
            {
                if (method_exists($this->controller, $url[1]))
                {
                    $this->method = $url[1];
                    unset($url[1]);
                }
            }
        } 
        else if(isset($url[0])) {
            require_once '../app/controllers/' .ucfirst($this->controller) .'.php';
            $this->controller = new $this->controller;

            if (method_exists($this->controller, $url[0]))
            {
                $this->method = $url[0];
                unset($url[0]);
            }
            else 
            {
                require_once '../app/core/ErrorPage.php';
                $this->controller = new ErrorPage;

                $this->method = 'error404';
                unset($url[0]);
                unset($url[1]);
            }
        } 
        else 
        {
            require_once '../app/controllers/' .ucfirst($this->controller) .'.php';
            $this->controller = new $this->controller;
        }

        if (!empty($url))
        {
            $this->params = array_values($url);
        }

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {       
        if (isset($_GET['url'])) 
        {
            $url = $_GET['url'];
            $url = rtrim($url, '/');
            $url = explode('/', $url);
            return $url;
        }
    }
}