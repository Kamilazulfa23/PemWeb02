<?php
require_once '../dbkoneksi.php';

$query = "DELETE FROM pelanggan WHERE id='$_GET[iddel]'";
$data = $dbh->prepare($query);
$data->execute();

header('location:list_pelanggan.php');
?>