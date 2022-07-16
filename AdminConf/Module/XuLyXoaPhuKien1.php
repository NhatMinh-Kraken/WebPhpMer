<?php

    include('config.php');

    $id=$_GET['idaccesory'];
    $sqlXoa = "SELECT * FROM chitietphukienbody WHERE IdPhuKienBody ='$id' LIMIT 1";
    $query = mysqli_query($mysqli,$sqlXoa);

    while($row = mysqli_fetch_array($query)){
        unlink('Uploads/'.$row['AnhPhuKien1']);
        unlink('Uploads/'.$row['AnhPhuKien2']);
        unlink('Uploads/'.$row['AnhPhuKien3']);
        unlink('Uploads/'.$row['AnhPhuKien4']);
        unlink('Uploads/'.$row['AnhPhuKien5']);
    }

    $sql_xoachitietphukien = "DELETE From chitietphukienbody WHERE IdPhuKienBody ='".$id."'";

    mysqli_query($mysqli,$sql_xoachitietphukien);
    echo '<script> alert("Bạn đã xóa thành công");window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>';
?>