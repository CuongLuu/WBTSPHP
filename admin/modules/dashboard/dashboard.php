<div class="container">
    <h3>
        <strong>
            <center>
                <span class="icon icon-dashboard"></span> DASHBOARD
            </center>
        </strong>
    </h3>
</div>
<div class="widget-box container">
    <div class="widget-content nopadding">
        <table class="table table-bordered table-striped">
            <tr>
                <td>
                    <strong>
                        <a href="../index.php" class="btn btn-default">
                            <i class="icon-road"></i> Tham quang trang web
                        </a>
                    </strong>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>
                        Tài khoản Admin
                    </strong>
                </td>
                <td>
                    <strong> Xin chào 
                        <?php
                        if (isset($_COOKIE['admin'])) {
                            echo $_COOKIE['admin'];
                        }
                        ?>
                    </strong>
                </td>
                <td>
                    <strong>
                        <a href="index.php?quanly=admin&ac=xuly" class="btn btn-default">
                            <center>
                                <span class="icon icon-user"></span> Tài khoản
                            </center>
                        </a>
                    </strong>
                </td>
                <td>
                    <strong>
                        <a href="logout.php" class="btn btn-default">
                            <center>
                                <span class="icon icon-lock"></span> Đăng xuất
                            </center>
                        </a>
                    </strong>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>
                        Loại sản phẩm
                    </strong>
                </td>
                <td>
                    <strong>
                        <?php echo $sp->countLoaiSP(); ?> Loại sản phẩm
                    </strong>
                </td>
                <td>
                    <strong>
                        <a href="index.php?quanly=loaisp&ac=lietke" class="btn btn-default">
                            <center>
                                <span class="icon icon-table"></span> DS loại SP
                            </center>
                        </a>
                    </strong>
                </td>
                <td>
                    <strong>
                        <a href="index.php?quanly=loaisp&ac=them" class="btn btn-default">
                            <center>
                                <span class="icon icon-plus"></span> Thêm loại SP
                            </center>
                        </a>
                    </strong>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>
                        Sản phẩm
                    </strong>
                </td>
                <td>
                    <strong>
                        <?php echo $sp->countSanPham(); ?> sản phẩm
                    </strong>
                </td>
                <td>
                    <strong>
                        <a href="index.php?quanly=sanpham&ac=lietke" class="btn btn-default">
                            <center>
                                <span class="icon icon-table"></span> DS SP
                            </center>
                        </a>
                    </strong>
                </td>
                <td>
                    <strong>
                        <a href="index.php?quanly=sanpham&ac=them" class="btn btn-default">
                            <center>
                                <span class="icon icon-plus"></span> Thêm SP
                            </center>
                        </a>
                    </strong>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>
                        Tài khoản
                    </strong>
                </td>
                <td>
                    <strong>
                        <?php echo $sp->countTaiKhoan(); ?> tài khoản
                    </strong>
                </td>
                <td>
                    <strong>
                        <a href="index.php?quanly=taikhoan&ac=lietke" class="btn btn-default">
                            <center>
                                <span class="icon icon-table"></span> DS TK
                            </center>
                        </a>
                    </strong>
                </td>
                <td>
                    <strong>
                        <a href="index.php?quanly=taikhoan&ac=them" class="btn btn-default">
                            <center>
                                <span class="icon icon-plus"></span> Thêm TK
                            </center>
                        </a>
                    </strong>
                </td>
            </tr>
        </table>
        <br><hr>
        <hr>
    </div>
</div>


