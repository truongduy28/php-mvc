<?php
$item = $data['data-one-product'];

?>
<p><a href="javascript:history.back()">Go Back</a>
</p>
<div class="product-container row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10 row">
        <div class="col-sm-5">
            <div class="product-image">
                <img class="img-thumbnail" src="<?= $targetImage . $item['hinhanh'] ?>" alt="">
            </div>
        </div>
        <div class="col-sm-7">
            <h1><?= $item['tensp'] ?></h1>
            <p><span>Giá bán: <?= number_format($item['giaban']) ?>.vnđ</span></p>
            <p>Số lượng còn lại: <?= $item['soluong'] ?></p>
            <p>Chi tiết: <br> <span><?= $item['chitiet'] ?></span></p>
        </div>
    </div>
    <div class="col-sm-1"></div>
</div>