<?php

require '../../DB.php';

class xulySanPham extends DB {

    public function themSanPham() {
        if (@$_POST) {
            $tensp = "'" . $_POST['tensp'] . "'";
            $hinhanh = "'" . $_POST['file'] . "'";
            
            $sql = 'insert into products (name_product,image_product,price_product,sale_product,sl_product,info_product,id_type,id_brand) value(' . $tensp . ',' . $hinhanh . ')';
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=sanpham&ac=lietke&tt=<div class="alert alert-success"><strong>Thêm!</strong> Đã lưu thêm sản phẩm mới thành công.</div>');
            } else {
                header('location:../../index.php?quanly=sanpham&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=sanpham&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

    public function suaSanPham() {
        if (isset($_GET['id'])) {
            $id = "'" . $_GET['id'] . "'";
            if (@$_POST) {
                $tensp = "'" . $_POST['tensp'] . "'";
                $sql = 'update sanpham set tenSanPham=' . $tensp . ' where maSanPham=' . $id . ';';
                if (@$this->querry($sql)) {
                    header('location:../../index.php?quanly=sanpham&ac=lietke&tt=<div class="alert alert-success"><strong>Sửa!</strong> Đã lưu chỉnh sửa sản phẩm ' . $tensp . ' thành công.</div>');
                } else {
                    header('location:../../index.php?quanly=sanpham&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
                }
            } else {
                header('location:../../index.php?quanly=sanpham&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=sanpham&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

    public function xoaSanPham() {
        if (isset($_GET['id'])) {
            $id = "'" . $_GET['id'] . "'";
            $sql = 'delete from SanPham where maSanPham like ' . $id . ';';
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=sanpham&ac=lietke&tt=<div class="alert alert-success"><strong>Xóa!</strong> Đã xóa sản phẩm ' . $id . ' thành công.</div>');
            } else {
                header('location:../../index.php?quanly=sanpham&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=sanpham&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

}

$xulySanPham = new xulySanPham();

if (isset($_POST['them'])) {
    $xulySanPham->themSanPham();
} elseif (isset($_POST['sua'])) {
    $xulySanPham->suaSanPham();
} else {
    $xulySanPham->xoaSanPham();
}

