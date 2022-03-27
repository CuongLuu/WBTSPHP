<!DOCTYPE html>
<html>

<head>
    <?php
    require('layout/header.php');
    ?>
    <title>register</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/style_slide.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" type="image/x-icon" href="../templateUser/css/logo/Prepaidgamecards-Gaming-Gadgets-Nintendo-3DS.ico" />
    <link rel="stylesheet" href="template/templateUser/css/bootstrap.min.css" />
    <link rel="stylesheet" href="template/templateUser/css/style.css" />
    <link rel="stylesheet" href="template/templateUser/css/styles.css" />
    <link rel="stylesheet" href="templateUser/css/responsive.css" />
    <link rel="stylesheet" href="templateUser/css/custom.css" />
    <link href="templateUser/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="templateUser/css/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container-fluid form" style="padding: 100px">
        <div class="widget-content nopadding">
            <form class="form-horizontal" action="xuly.php" method="post" enctype="multipart/form-data" style="margin-left: 400px;">
                <h5>&nbsp;</h5>
                <div class="control-group">
                    <label class="control-label">Tên tài khoản : </label>
                    <div class="controls">
                        <input type="text" name="tenNguoiDung">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Email : </label>
                    <div class="controls">
                        <input type="email" name="email">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Mật khẩu : </label>
                    <div class="controls">
                        <input type="password" name="matKhau">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Số điện thoại : </label>
                    <div class="controls">
                        <input type="text" name="sdt">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Địa chỉ nhận : </label>
                    <div class="controls">
                        <input type="text" name="diaChi">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input type="submit" name="them" value="Thêm mới" class="btn btn-default">
                    </div>
                </div>
                <h5>&nbsp;</h5>
            </form>
        </div>
    </div>
</body>
<?php
require('layout/footer.php');
?>

</html>