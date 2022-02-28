<div class=" category-container">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="#">Trang chủ</a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Danh mục sản phẩm
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php
                foreach ($data['data-nav'] as $item) {
                    echo '
                    <a class="dropdown-item" href="HomePage/category/' . $item['Maloai'] . '">' . $item['Tenloai'] . '</a>';
                }
                ?>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="authen">Đăng nhập</a>
        </li>


    </ul>
</div>