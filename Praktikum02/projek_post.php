<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "kamila" && $password == "kamila"){
    echo "Login berhasil";
} else {
    echo "Login gagal";
}