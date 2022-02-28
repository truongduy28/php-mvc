<?php

class AuthenPageModel extends DB
{
    function login($username, $password)
    {

        $sql = "SELECT * FROM taikhoan WHERE tentk = '$username' && matkhau = '$password'";
        $result =  mysqli_query($this->con, $sql);
        if ($result) {
            $data = [];
            while ($row = mysqli_fetch_array($result, 1)) {
                $data[] = $row;
            }
        }
        return $data[0];
    }
}