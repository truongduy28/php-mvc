<div class="admin-category-container row">
    <div class="admin-category-table col-sm-7">
        <table class="table">
            <caption>List of users</caption>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($data['data-table']) {
                    $index = 1;
                    foreach ($data['data-table'] as $item) {
                        echo '
                     <tr>
                        <th scope="row">' . $index++ . '</th>
                        <td>' . $item['Tenloai'] . '</td>
                        <td><a class="btn btn-warning " href="admin/update/' . $item['Maloai'] . '">Sửa</a></td>
                        <td><a class="btn btn-danger " href="admin/delete/' . $item['Maloai'] . '">Xóa</a></td>
                    </tr>
                     ';
                    }
                }

                ?>

            </tbody>
        </table>
    </div>
    <div class="admin-category-form col-sm-5">
        <form action="admin/update" method="post">
            <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" name="tendanhmuc" class="form-control"
                    value="<?php if ($data['data-category-one']) echo $data['data-category-one']['Tenloai'] ?>">
            </div>
            <div>
                <button class="btn btn-primary btn-block">Cập nhật</button>
            </div>
        </form>
    </div>
</div>