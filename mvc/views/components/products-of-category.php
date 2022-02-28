<?php
$targetImage = '../../source/images/';

?>

<p><a href="javascript:history.back()">Go Back</a>
</p>
<div class="products-of-category-container row">
    <div class="col-sm-1"></div>
    <div class="products-box col-sm-10 row justify-content-center">

        <?php
        foreach ($data['data-products-of-category'] as $item) {
            echo '<div class="products-item   col-sm-3 mx-4 mt-2">
                    <div class="product-item__img_box">
                        <img class="img-fluid" src="' . $targetImage . $item['hinhanh'] . '" alt="">
                    </div>
                    <div class="product-item__parameter">
                        <h4><a href="../../product/show/' . $item['masp'] . '">' . $item['tensp'] . '</a></h4>
                        <p>' . number_format($item['giaban']) . 'vnđ</p>
                    </div>
                </div>';
        }
        ?>
        <div class="products-item col-sm-3">
            <div class="product-item__img_box">
                <img src="" alt="">
            </div>
            <div class="product-item__parameter">
                <h4><a href=""></a></h4>
                <p></p>
            </div>
        </div>
    </div>
    <div class="col-sm-1"></div>

</div>