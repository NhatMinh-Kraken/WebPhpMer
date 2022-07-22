<?php
include('config.php');

    $id=$_GET['IdDonHang'];
    $sql_xoa = "DELETE From orderaccesory WHERE Code_Cart='".$id."'";

    mysqli_query($mysqli,$sql_xoa);
    echo '<script> alert("Bạn đã xóa thành công");window.location="IndexAdmin.php?action=ThongTinKhachHang";</script>';
  
?>