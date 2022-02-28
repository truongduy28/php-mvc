<?php

class News extends Controller
{
    function getNews()
    {
        // echo "Hello - Đã xong câu 2.3.3.a.1";
        $teo = $this->model("HomePageModel");
        echo $teo->defaultScreen();
    }
    function showNumberNews($n)
    {
        echo "showNumberNews " . $n;
    }
}