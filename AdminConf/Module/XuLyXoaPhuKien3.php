<?php

    include('config.php');

    $id=$_GET['idaccesory'];
    $sqlXoa = "SELECT * FROM chitietphukientiennghi WHERE Idchitietphukientiennghi = '$_GET[idaccesory]' LIMIT 1";
    $query = mysqli_query($mysqli,$sqlXoa);
    while($row = mysqli_fetch_array($query)){
        unlink('Uploads/'.$row['AnhPhuKienTienNghi1']);
        unlink('Uploads/'.$row['AnhPhuKienTienNghi2']);
        unlink('Uploads/'.$row['AnhPhuKienTienNghi3']);
        unlink('Uploads/'.$row['AnhPhuKienTienNghi4']);
        unlink('Uploads/'.$row['AnhPhuKienTienNghi5']);
    }

    $sql_xoachitietphukien = "DELETE From chitietphukientiennghi WHERE Idchitietphukientiennghi ='".$id."'";

    mysqli_query($mysqli,$sql_xoachitietphukien);
    echo '<script> alert("Bạn đã xóa thành công");window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>';
?>