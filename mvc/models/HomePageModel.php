<?php
class HomePageModel extends DB
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

    function getProductsOfCategory($IDcategory)
    {
        $sql = "SELECT * FROM sanpham where maloai = " . $IDcategory;
        $result =  mysqli_query($this->con, $sql);
        if ($result) {
            $data = [];
            while ($row = mysqli_fetch_array($result, 1)) {
                $data[] = $row;
            }
            // mysqli_close($this->$con);
        }
        return $data;
    }

    function getHighlightProducts()
    {
        $sql = "SELECT * FROM sanpham where noibat = 1 ";
        $result =  mysqli_query($this->con, $sql);
        if ($result) {
            $data = [];
            while ($row = mysqli_fetch_array($result, 1)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    function getProductByID($ID)
    {
        $sql = "SELECT * FROM sanpham where masp = " . $ID;
        $result =  mysqli_query($this->con, $sql);
        if ($result) {
            $data = [];
            while ($row = mysqli_fetch_array($result, 1)) {
                $data[] = $row;
            }
            // mysqli_close($this->$con);
        }
        return $data[0];
    }
}