<?php
    include('config.php');

    $HoVaTen = $_POST['HoVaTen'];
    $Email = $_POST['Email'];
    $SDT = $_POST['SDT'];
    $NgaySinh = $_POST['NgaySinh'];
    $GioiTinh = $_POST['GioiTinh'];

    if(!$HoVaTen || !$Email || !$SDT || !$NgaySinh || !$GioiTinh){
        echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="Default-Profile.php";</script>' ;
        exit;
    }

    if(isset($_POST['SuaTTCaNhan']))
{
    $sql_suatt = "UPDATE taikhoanuser SET HoVaTen='".$HoVaTen."',Email='".$Email."',SDT='".$SDT."',NgaySinh='".$NgaySinh."',GioiTinh='".$GioiTinh."' Where IdUser='$_GET[IdUser]'";

    mysqli_query($mysqli,$sql_suatt);

    echo '<script> alert("Bạn đã sửa thành công");window.location="Index.php";</script>';
}

?>