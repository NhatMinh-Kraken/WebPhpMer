<?php

    include('config.php');

    $id=$_GET['idaccesory'];
    $sqlXoa = "SELECT * FROM chitietphukientrangtri WHERE Idchitietphukientrangtri = '$_GET[idaccesory]' LIMIT 1";
    $query = mysqli_query($mysqli,$sqlXoa);
    while($row = mysqli_fetch_array($query)){
        unlink('Uploads/'.$row['AnhPhuKienTrangTri1']);
        unlink('Uploads/'.$row['AnhPhuKienTrangTri2']);
        unlink('Uploads/'.$row['AnhPhuKienTrangTri3']);
        unlink('Uploads/'.$row['AnhPhuKienTrangTri4']);
        unlink('Uploads/'.$row['AnhPhuKienTrangTri5']);
    }

    $sql_xoachitietphukien = "DELETE From chitietphukientrangtri WHERE Idchitietphukientrangtri ='".$id."'";

    mysqli_query($mysqli,$sql_xoachitietphukien);
    echo '<script> alert("Bạn đã xóa thành công");window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>';
?>