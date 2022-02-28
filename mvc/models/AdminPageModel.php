<?php

class AdminPageModel extends DB
{

    function getCategory()
    {
        $sql = "SELECT * FROM danhmucsanpham";
        $result =  mysqli_query($this->con, $sql);
        if ($result) {
            $data = [];
            while ($row = mysqli_fetch_array($result, 1)) {
                $data[] = $row;
            }
            // mysqli_close($con);
        }
        return $data;
    }
    function insertCategory($name)
    {
        $sql = "INSERT INTO `danhmucsanpham` ( `Tenloai`, `dmnoibat`) VALUES ( '$name', '0')
       ";
        mysqli_query($this->con, $sql);
        // return;
    }
    function deleteCategory($id)
    {
        $sql = "DELETE FROM danhmucsanpham WHERE Maloai = $id ";
        mysqli_query($this->con, $sql);
    }
    function updateCategory($name, $id)
    {
        $sql = "UPDATE danhmucsanpham SET Tenloai = '$name' WHERE Maloai = '$id' ";
        mysqli_query($this->con, $sql);
        echo  $sql;
    }
    function getOneCategory($id)
    {
        $sql = "SELECT * FROM danhmucsanpham WHERE Maloai = '$id' ";
        $result =  mysqli_query($this->con, $sql);
        if ($result) {
            $data = [];
            while ($row = mysqli_fetch_array($result, 1)) {
                $data[] = $row;
            }
            // mysqli_close($con);
        }
        return $data[0];
    }
}