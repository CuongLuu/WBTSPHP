<?php

require 'DBconnext.php';

class spXulyTaiKhoan extends DB {

    public function themTaiKhoan() {
        if (@$_POST) {
            $tenkhachhang = "'" . $_POST['tenNguoiDung'] . "'";
            $email = "'" . $_POST['email'] . "'";
            $matkhau = "'" . $_POST['matKhau'] . "'";
            $dienthoai = "'" . $_POST['sdt'] . "'";
            $diachinhan = "'" . $_POST['diaChi'] . "'";
            $sql = 'insert into taikhoan (tenNguoiDung,email,matKhau,sdt,diaChi) value(' . $tenkhachhang . ',' . $email . ',' . $matkhau . ',' . $dienthoai . ',' . $diachinhan . ')';
            if (@$this->querry($sql)) {
                header('location:login.php');
            } else {
                header('location:register.php');
            }
        }
    }
}

$xulyTaiKhoan = new spXulyTaiKhoan();

if (isset($_POST['them'])) {
    $xulyTaiKhoan->themTaiKhoan();
}
