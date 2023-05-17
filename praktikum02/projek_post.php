<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "deaamnesty"  && $password == "deaamnesty"){
    echo "Login berhasil";
} else {
    echo "Login gagal";
}