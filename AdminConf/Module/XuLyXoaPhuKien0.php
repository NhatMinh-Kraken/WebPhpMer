<?php

    include('config.php');

    $id=$_GET['idaccesory'];
    $sqlXoa = "SELECT * FROM chitietphukiennoithatngoaithat WHERE idchitietsanphamnoithatngoaithat ='$id' LIMIT 1";
    $query = mysqli_query($mysqli,$sqlXoa);

    while($row = mysqli_fetch_array($query)){
        unlink('Uploads/'.$row['AnhPhuKienNoiThatNgoaiThat1']);
        unlink('Uploads/'.$row['AnhPhuKienNoiThatNgoaiThat2']);
        unlink('Uploads/'.$row['AnhPhuKienNoiThatNgoaiThat3']);
        unlink('Uploads/'.$row['AnhPhuKienNoiThatNgoaiThat4']);
        unlink('Uploads/'.$row['AnhPhuKienNoiThatNgoaiThat5']);
    }

    $sql_xoachitietphukien = "DELETE From chitietphukiennoithatngoaithat WHERE idchitietsanphamnoithatngoaithat ='".$id."'";

    mysqli_query($mysqli,$sql_xoachitietphukien);
    echo '<script> alert("Bạn đã xóa thành công");window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>';
?>