<?php

    include('config.php');

    $id=$_GET['idaccesory'];
    $sqlXoa = "SELECT * FROM chitietphukienbaove WHERE IdChiTietPhuKienBaoVe = '$_GET[idaccesory]' LIMIT 1";
    $query = mysqli_query($mysqli,$sqlXoa);
    while($row = mysqli_fetch_array($query)){
        unlink('Uploads/'.$row['AnhPhuKienBV1']);
        unlink('Uploads/'.$row['AnhPhuKienBV2']);
        unlink('Uploads/'.$row['AnhPhuKienBV3']);
        unlink('Uploads/'.$row['AnhPhuKienBV4']);
        unlink('Uploads/'.$row['AnhPhuKienBV5']);
    }

    $sql_xoachitietphukien = "DELETE From chitietphukienbaove WHERE IdChiTietPhuKienBaoVe ='".$id."'";

    mysqli_query($mysqli,$sql_xoachitietphukien);
    echo '<script> alert("Bạn đã xóa thành công");window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>';
?>