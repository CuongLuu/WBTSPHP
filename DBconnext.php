<?php
$conn = mysqli_connect("localhost:3306", "root", "", "wbts-1");

if (mysqli_connect_errno()) {
    echo "Kết nối không thành công!: " . mysqli_connect_error();
}
