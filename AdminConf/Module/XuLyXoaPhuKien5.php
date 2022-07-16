<?php

    include('config.php');

    $id=$_GET['idaccesory'];
    $sqlXoa = "SELECT * FROM chitietphukienmamxe WHERE IdChiTietPhuKienMamXe = '$_GET[idaccesory]' LIMIT 1";
    $query = mysqli_query($mysqli,$sqlXoa);
    while($row = mysqli_fetch_array($query)){
        unlink('Uploads/'.$row['AnhPhuKienMamXe1']);
        unlink('Uploads/'.$row['AnhPhuKienMamXe2']);
        unlink('Uploads/'.$row['AnhPhuKienMamXe3']);
        unlink('Uploads/'.$row['AnhPhuKienMamXe4']);
        unlink('Uploads/'.$row['AnhPhuKienMamXe5']);
    }

    $sql_xoachitietphukien = "DELETE From chitietphukienmamxe WHERE IdChiTietPhuKienMamXe ='".$id."'";

    mysqli_query($mysqli,$sql_xoachitietphukien);
    echo '<script> alert("Bạn đã xóa thành công");window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>';
?>