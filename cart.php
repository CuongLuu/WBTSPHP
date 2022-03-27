<?php
require "layout/header.php"
?>
<?php
$conn = mysqli_connect('localhost:8080', 'root', '', 'wbts');
require 'DBconnext.php';
session_start();
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
//Xoá toàn bộ giỏ hàng
if (isset($_GET['delcart']) && ($_GET['delcart'] == 1)) unset($_SESSION['giohang']);
//xóa sp trong giỏ hàng
if (isset($_GET['delid']) && ($_GET['delid'] >= 0)) {
    array_splice($_SESSION['giohang'], $_GET['delid'], 1);
}
//lấy dữ liệu từ form
if (isset($_POST['addcart']) && ($_POST['addcart'])) {
    $hinh = $_POST['hinhAnh'];
    $tensp = $_POST['tenSanPham'];
    $gia = $_POST['giaBan'];
    $soluong = $_POST['soLuong'];

    $fl = 0;
    for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
        if ($_SESSION['giohang'][$i][1] == $tensp) {
            $fl = 1;
            $soluongnew = $soLuong + $_SESSION['giohang'][$i][3];
            $_SESSION['giohang'][$i][3] = $soluongnew;
            break;
        }
    }
    if ($fl == 0) {
        //Thêm sản phẩm vào giỏ hàng
        $sp = [$hinh, $tensp, $gia, $soluong];
        $_SESSION['giohang'][] = $sp;
        // var_dump($ SESSION['giohang']);
    }
}


function showgiohang()
{
    if (isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))) {
        for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
            $tong = 0;
            $tt = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
            $tong += $tt;
            echo '
                 <tbody>
                 <tr>
                 <td data-th="Product">
                     <div class="row">
                         <div class="col-sm-4 hidden-xs">
                             <img
                                 src="templateUser/images/' .$_SESSION['giohang'][$i][0]. '"
                                 class="img-fluid" alt="Image">
                         </div>

                     </div>
                 </td>
                 <td data-th="tenSanPham" ><span>' .$_SESSION['giohang'][$i][1]. '</span></td>
                 <td data-th="giaBan"><span>' . $_SESSION['giohang'][$i][2] . ' đ</span></td>
                 <td data-th="soLuong" ><span>' .$_SESSION['giohang'][$i][3]. '</span></td>
                 <td class="actions"data-th=""><a
                     href="cart.php?delid='.$i. '">
                         <button class="btn btn-danger btn-sm">
                             <i class="fa fa-trash-o">Xoá</i>
                         </button>
                 </a></td>

                 <td><span>' .$tt. ' đ</span></td>
             </tr>
			</tbody>
                 
                 ';
        }
        echo '
             <tfoot>
				<tr>
					
					<td class="hidden-xs text-center"
						style="margin-right: 5px; font-size: 18px";><strong>Tổng:
							<span>' .$tong. 'đ</span>
					</strong></td>
					
				</tr>
			</tfoot>
             ';
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Insert title here</title>
</head>

<body>
    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Chi tiết giỏ hàng</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12" style="margin-top: 20px; color: orange">
                    <h2>Chi tiết giỏ hàng</h2>
                </div>
                <div class="col-12">
                    <a href="index.php">Trang chủ</a> <a href="">sản phẩm</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width: 30%">Sản phẩm</th>
                    <th style="width: 30%">Tên Sản phẩm</th>
                    <th style="width: 8%">Giá</th>
                    <th style="width: 12%">Số lượng</th>
                    <th style="width: 2%" class="text-center">xoá</th>
                    <th style="width: 10%">Thành tiền</th>

                </tr>
            </thead>
            <?php showgiohang(); ?>
            <td>
                <a href="cart.php?delcart=1" class="btn btn-warning"><i class="fa fa-angle-left"></i> Xoá giỏ hàng</a>
            </td>
            <td colspan="2" class="hidden-xs"></td>

            <td><a href="menu.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td><a href="checkout" class="btn btn-success btn-block">Thanh
                    toán <i class="fa fa-angle-right"></i>
                </a></td>

        </table>
    </div>

</body>

</html>
<?php
require "layout/footer.php"
?>