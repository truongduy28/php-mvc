<?php
class Product extends Controller
{
    function show($id)
    {
        // echo "Hello - Đã xong câu 2.3.3.a.1";
        $layout = $this->model("HomePageModel");
        $this->view('main', ['page' => 'product', 'data-one-product' => $layout->getProductByID($id), 'data' => $layout->getCategory()]);
    }
}