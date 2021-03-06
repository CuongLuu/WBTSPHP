<div class="container-fluid ">
    <h3>Danh sách sản phẩm [ <?php echo $sp->count(); ?> Sản phẩm ]</h3>
</div>
<div class="widget-box">
    <div class="widget-title"> 
        <a href="index.php?quanly=sanpham&ac=them" class="btn btn-default">
            <i class="icon-plus"></i> Thêm sản phẩm mới 
        </a> 
    </div>
</div>
<div class="widget-content nopadding">
    <ul class="pagination ">
        <?php
        if (@$_GET['trang']) {
            $sp->perpage($_GET['trang']);
        } else {
            $sp->perpage(1);
        }
        ?>
    </ul>
    <?php
    if (@$_GET['tt']) {
        echo $_GET['tt'];
    }
    ?>
    <hr>
    <table class="table table-bordered table-striped">
        <tr>
            <td><strong>Mã Sản Phẩm</strong></td>
            <td><strong>Tên sản phẩm</strong></td>
            <td><strong>Hình ảnh</strong></td>
            <td><strong>Giá bán</strong></td>
        </tr>
        <?php
        $tbSP = $sp->table_SanPham($SP_BD);
        foreach ($tbSP as $row):
            ?>
            <tr>
                <td><?php echo $row['maSanPham']; ?></td>
                <td><?php echo $row['tenSanPham']; ?></td>
                <td>
                    <?php
                    $arr = explode("p", $row['hinhAnh']);
                    foreach ($arr as $r):
                        if (!empty($r)):
                            ?>
                            <img src="../public/images/<?php echo $load->row($r)['url_image']; ?>" class="img-responsive"  width="60" height="60"><br>
                            <?php
                        endif;
                    endforeach;
                    ?>
                </td>
                <td><?php echo $row['giaBan']; ?></td>
                <td><?php echo $sp->row_loai($row['maSanPham'])['tenSanPham']; ?></td>
                <td>
                    <a href="index.php?quanly=sanpham&ac=sua&id=<?php echo $row['maSanPham'] ?>&H=<?php echo $row['hinhAnh'] ?>" class="btn btn-default">
                        <center>
                            <span class="icon icon-pencil"></span> Sửa
                        </center>
                    </a>
                </td>
                <td>
                    <a href="modules/quanlysanpham/xuly.php?id=<?php echo $row['maSanPham'] ?>" class="btn btn-default">
                        <center>
                            <span class="icon icon-cut"></span>Xóa
                        </center>
                    </a>
                </td>
            </tr>
            <?php
        endforeach;
        ?>
    </table>
</div>
</div>

