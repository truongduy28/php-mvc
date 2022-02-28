<?php
class Authen extends Controller
{
    function indexPage()
    {
        $layout = $this->model("HomePageModel");
        $this->view('main', ['page' => 'login',  'data-nav' => $layout->getCategory()]);
    }

    function login()
    {
        if (isset($_POST['taikhoan'])) {
            $us = $_POST['taikhoan'];
        }
        if (isset($_POST['matkhau'])) {
            $pa = md5($_POST['matkhau']);
        }
        $layout = $this->model("AuthenPageModel");
        $check = $layout->login($us, $pa);
        if ($check) {
            if ($check['loaitaikhoan'] == 1) {
                header("Location: ../admin/category");
            } else {
                // $this->view('admin', []);
            }
            // var_dump($check);
        } else {
            echo "<script>
            alert('Tài khoản mật khẩu kh chính xác');
            history.go(-1);

        </script>";
        }
    }
}