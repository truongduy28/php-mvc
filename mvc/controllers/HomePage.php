<?php
class HomePage extends Controller
{


    function indexPage()
    {
        $layout = $this->model("HomePageModel");
        $this->view('main', ['page' => 'highlight-products',  'data-nav' => $layout->getCategory(), 'data-highlight-products' => $layout->getHighlightProducts()]);
    }

    function category($IDcategory)
    {
        $layout = $this->model("HomePageModel");
        $this->view('main', ['page' => 'products-of-category', 'data-nav' => $layout->getCategory(), 'data-products-of-category' => $layout->getProductsOfCategory($IDcategory), 'data' => $layout->getCategory()]);
    }
}