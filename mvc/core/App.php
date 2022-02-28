<?php
class App
{
    protected $controller = "HomePage";
    protected $action = "indexPage";
    protected $params = [];

    function __construct()
    {
        $arr = $this->UrlProcess();
        // print_r($arr);

        // handle controller
        if (file_exists("./mvc/controllers/" . $arr[0] . ".php")) {
            $this->controller = $arr[0];
            unset($arr[0]);
            // echo "có";
        } else {
            // echo "l có";
        }

        require_once "./mvc/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;

        // handle Action
        if (isset($arr[1])) {
            if (method_exists($this->controller, $arr[1])) {
                $this->action = $arr[1];
                // echo 'exit func';
            } else {
                // echo 'not func';
            }
            unset($arr[1]);
        }

        // handle params

        $this->params = $arr ? array_values($arr) : [];
        // print_r($this->params);

        // echo ($this->action);
        call_user_func_array([$this->controller, $this->action], $this->params);
    }
    function UrlProcess()
    {
        if (isset($_GET["url"])) {
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }
}