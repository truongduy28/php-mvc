<div class=" category-container">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="#">Active</a>
        </li>
        <?php
        foreach ($data['data-cate'] as $item) {
            echo '<li class="nav-item">
            <a class="nav-link"  href="homePage/category/' . $item['Maloai'] . '">' . $item['Tenloai'] . '</a>
          </li>';
        }
        ?>
    </ul>
</div>