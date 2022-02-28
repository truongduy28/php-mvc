<?php
class HomePage extends Controller
{
    function getCategoryNav()
    {
        $layout = $this->model("HomePageModel");
        return   $this->view('main', ['category-nav' => 'category', 'data-cate' => $layout->getCategory()]);
    }

    function getProductsHighlight()
    {
        $layout = $this->model("HomePageModel");
        return  $this->view('main', ['products-of-category' => 'products-of-category', 'data-highlight' => $layout->getHighlightProducts()]);
    }

    function indexPage()
    {
        // echo "Hello - Đã xong câu 2.3.3.a.1";
        $this->getCategoryNav();
        $this->getProductsHighlight();
    }

    function category($IDcategory)
    {
        $layout = $this->model("HomePageModel");
        $this->view('main', ['page' => 'products-of-category', 'data-products-of-category' => $layout->getProductsOfCategory($IDcategory), 'data' => $layout->getCategory()]);
    }
}