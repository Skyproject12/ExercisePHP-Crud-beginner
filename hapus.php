<?php
include("connect.php");
$nim=$_GET['nim'];
$query=$c->query(" delete from mahasiswa_tb where nim=$nim");
header("location:index.php");

?>