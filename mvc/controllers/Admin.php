<?php
class Admin extends Controller
{
    function category()
    {
        $layout = $this->model("AdminPageModel");
        $this->view('admin', ['page' => 'admin-category',  'data-table' => $layout->getCategory()]);
    }
    function update($id = NULL)
    {
        $layout = $this->model("AdminPageModel");

        if (isset($_POST['tendanhmuc'])) {
            $name = $_POST['tendanhmuc'];
            if ($name != '') {
                if ($id) {
                    $layout->updateCategory($name, $id);
                } else {
                    $layout->insertCategory($name);
                }
                $this->view('admin', ['page' => 'admin-category',  'data-table' => $layout->getCategory()]);
            }
        } else {
            $this->view('admin', ['page' => 'admin-category',  'data-table' => $layout->getCategory(), 'data-category-one' => $layout->getOneCategory($id)]);
        }
    }
    function delete($id)
    {
        $layout = $this->model("AdminPageModel");
        $layout->deleteCategory($id);
        $this->view('admin', ['page' => 'admin-category',  'data-table' => $layout->getCategory()]);
    }
}