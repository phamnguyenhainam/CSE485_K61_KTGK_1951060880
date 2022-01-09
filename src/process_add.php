<?php

$hovaten = $_POST['hovaten'];
$chucvu = $_POST['chucvu'];
$phongban = $_POST['phongban'];


$conn = mysqli_connect('localhost','root','','1951060880_employees');
mysqli_set_charset($conn, 'utf-8');  
$sql = "INSERT into nhanvien(hovaten, chucvu, phongban)
values('$hovaten', '$chucvu', '$phongban')";

$ketqua = mysqli_query($conn, $sql);

if($ketqua > 0){
    header("location: admin.php");
}else{
    header("location: error.php"); 
}
mysqli_close($conn);
?>