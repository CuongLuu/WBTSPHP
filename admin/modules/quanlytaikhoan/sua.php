<div class="container-fluid ">
    <h3>Sửa Tài khoản</h3>
</div>
<div class="widget-box">
    <div class="widget-title"> 
        <a href="index.php?quanly=taikhoan&ac=lietke" class="btn btn-default">
            <i class="icon-table"></i> Hiển thị danh sách tài khoản
        </a>
    </div>
    <div class="widget-content nopadding">
        <form class="form-horizontal" action="modules/quanlytaikhoan/xuly.php?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" >
            <h5>&nbsp;</h5>
            <?php
            $rowTk = $tk->row_Taikhoan("'" . $_GET['id'] . "'");
            ?>
            <div class="control-group">
                <label class="control-label">Tên tài khoản : </label>
                <div class="controls">
                    <?php echo $rowTk['tenNguoiDung'] ?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Email : </label>
                <div class="controls">
                    <input type="email" name="email"  value="<?php echo $rowTk['email'] ?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Mật khẩu : </label>
                <div class="controls">
                    <input type="text" name="matKhau" value="<?php echo $rowTk['matKhau'] ?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Số điện thoại : </label>
                <div class="controls">
                    <input type="tel" name="sdt" value="<?php echo $rowTk['sdt'] ?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Địa chỉ nhận : </label>
                <div class="controls">
                    <input type="text" name="diaChi" value="<?php echo $rowTk['diaChi'] ?>">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input type="submit" name="sua" value="Lưu lại" class="btn btn-default">
                    <a href="index.php?quanly=taikhoan&ac=lietke" class="btn btn-default">Hủy bỏ</a>
                </div>
            </div>
            <h5>&nbsp;</h5>
        </form>
    </div>
</div>