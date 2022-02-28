<?php
class layout extends Controller
{
    function getCategoryNav()
    {
        $layout = $this->model("HomePageModel");
        return   $this->view('main', ['category-nav' => 'category', 'data-cate' => $layout->getCategory()]);
    }
}