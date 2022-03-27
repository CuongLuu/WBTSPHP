<?php

require 'DBconnext.php';

class spLogin extends DB
{

    public function login()
    {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $sql = "select * from taikhoan where email like '" . $user . "' and matKhau like '" . $pass . "';";
        if (@$this->select($sql)) {
            return $this->select($sql)[0];
        }
    }
}

$sp = new spLogin();
if (isset($_POST['login'])) {
    if (@$sp->login()) {
        $account = $sp->login()['email'];
        var_dump($admin);
        setcookie('account', $account);
        header('location: index.php');
    } else {
        header('location: index.php');
    }
} else {
    header('location: index.php');
}
