<?php

class Home extends Controller
{
    function hello()
    {
        // echo "Hello - Đã xong câu 2.3.3.a.1";
        $teo = $this->model("HomePageModel");
        echo $teo->defaultScreen();
        $this->view("main", ["data" => $teo,]);
    }
    function show($name, $content)
    {
        echo "Show - Đã xong câu 2.3.3.a.2" . $name . " - " . $content;
        $this->view("main", ["name" => $name, "content" => $content]);
    }
}
