<?php
    include('config.php');
// --------------------------------------------- khởi tạo dữ liệu ------------------------------------ //

if(isset($_POST['ThemPhuKien']))
{

$TenPhuKien = $_POST['TenPhuKien'];
$loaiphukien = $_POST['loaiphukien'];
//Ảnh
$AnhPhuKien1 = $_FILES['AnhPhuKien1']['name'];
$AnhPhuKien1_tmp = $_FILES['AnhPhuKien1']['tmp_name'];
$AnhPhuKien1 = time().'_'.$AnhPhuKien1;
//Ảnh
$AnhPhuKien2 = $_FILES['AnhPhuKien2']['name'];
$AnhPhuKien2_tmp = $_FILES['AnhPhuKien2']['tmp_name'];
$AnhPhuKien2 = time().'_'.$AnhPhuKien2;
//Ảnh
$AnhPhuKien3 = $_FILES['AnhPhuKien3']['name'];
$AnhPhuKien3_tmp = $_FILES['AnhPhuKien3']['tmp_name'];
$AnhPhuKien3 = time().'_'.$AnhPhuKien3;
//Ảnh
$AnhPhuKien4 = $_FILES['AnhPhuKien4']['name'];
$AnhPhuKien4_tmp = $_FILES['AnhPhuKien4']['tmp_name'];
$AnhPhuKien4 = time().'_'.$AnhPhuKien4;
//Ảnh
$AnhPhuKien5 = $_FILES['AnhPhuKien5']['name'];
$AnhPhuKien5_tmp = $_FILES['AnhPhuKien5']['tmp_name'];
$AnhPhuKien5 = time().'_'.$AnhPhuKien5;

$XuatXu = $_POST['XuatXu'];
$ChatLuong = $_POST['ChatLuong'];
$BoPhuKien = $_POST['BoPhuKien'];
$Gioi_THieu_PhuKien_1 = $_POST['Gioi-THieu-PhuKien-1'];
$Gioi_THieu_PhuKien_2 = $_POST['Gioi-THieu-PhuKien-2'];
$Gioi_THieu_PhuKien_3 = $_POST['Gioi-THieu-PhuKien-3'];
$GiaBan = $_POST['GiaBan'];
$SoLuong = $_POST['SoLuong'];
$TinhTrang = $_POST['TinhTrang'];


// --------------------------------------------------- XỬ lý dữ liệu -------------------------------- //
if(!$TenPhuKien || !$loaiphukien || !$AnhPhuKien1 || !$AnhPhuKien2 || !$AnhPhuKien3 || !$AnhPhuKien4 || !$AnhPhuKien5 || !$XuatXu 
    || !$ChatLuong || !$BoPhuKien || !$Gioi_THieu_PhuKien_1 || !$Gioi_THieu_PhuKien_2 || !$Gioi_THieu_PhuKien_3 
    || !$GiaBan || !$SoLuong || !$TinhTrang)
{
    echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>' ;
    exit;
}

    //Them
    $sql_themphukien1 = "INSERT INTO chitietphukienbody(TenPhuKienBody,IdLoaiPhuKienBody,AnhPhuKien1,AnhPhuKien2,AnhPhuKien3,AnhPhuKien4,AhhPhuKien5,XuatXuPhuKien,ChatLieu,BoDayDu,DongGioiThieuPhuKien1,DongGioiThieuPhuKien2,DongGioiThieuPhuKien3,GiaCa,SoLuong,TinhTrangPhuKien) 
                                            VALUE('".$TenPhuKien."', '".$loaiphukien."', '".$AnhPhuKien1."', '".$AnhPhuKien2."', '".$AnhPhuKien3."', '".$AnhPhuKien4."', '".$AnhPhuKien5."', '".$XuatXu."', 
                                                    '".$ChatLuong."', '".$BoPhuKien."', '".$Gioi_THieu_PhuKien_1."', '".$Gioi_THieu_PhuKien_2."', '".$Gioi_THieu_PhuKien_3."', '".$GiaBan."', '".$SoLuong."', '".$TinhTrang."')";
    mysqli_query($mysqli,$sql_themphukien1);

                move_uploaded_file($AnhPhuKien1_tmp,'Uploads/'.$AnhPhuKien1);
                move_uploaded_file($AnhPhuKien2_tmp,'Uploads/'.$AnhPhuKien2);
                move_uploaded_file($AnhPhuKien3_tmp,'Uploads/'.$AnhPhuKien3);
                move_uploaded_file($AnhPhuKien4_tmp,'Uploads/'.$AnhPhuKien4);
                move_uploaded_file($AnhPhuKien5_tmp,'Uploads/'.$AnhPhuKien5);
                

    
    echo '<script> alert("Bạn đã thêm thành công");window.location="indexAdmin.php?action=Default-Type-Accesory";</script>';

}


if(isset($_POST['ThemPhuKienBaoVe']))
{

$TenPhuKienBaoVe = $_POST['TenPhuKienBaoVe'];
$loaiphukienBaoVe = $_POST['loaiphukienBaoVe'];
//Ảnh
$AnhPhuKienBaoVe1 = $_FILES['AnhPhuKienBaoVe1']['name'];
$AnhPhuKienBaoVe1_tmp = $_FILES['AnhPhuKienBaoVe1']['tmp_name'];
$AnhPhuKienBaoVe1 = time().'_'.$AnhPhuKienBaoVe1;
//Ảnh
$AnhPhuKienBaoVe2 = $_FILES['AnhPhuKienBaoVe2']['name'];
$AnhPhuKienBaoVe2_tmp = $_FILES['AnhPhuKienBaoVe2']['tmp_name'];
$AnhPhuKienBaoVe2 = time().'_'.$AnhPhuKienBaoVe2;
//Ảnh
$AnhPhuKienBaoVe3 = $_FILES['AnhPhuKienBaoVe3']['name'];
$AnhPhuKienBaoVe3_tmp = $_FILES['AnhPhuKienBaoVe3']['tmp_name'];
$AnhPhuKienBaoVe3 = time().'_'.$AnhPhuKienBaoVe3;
//Ảnh
$AnhPhuKienBaoVe4 = $_FILES['AnhPhuKienBaoVe4']['name'];
$AnhPhuKienBaoVe4_tmp = $_FILES['AnhPhuKienBaoVe4']['tmp_name'];
$AnhPhuKienBaoVe4 = time().'_'.$AnhPhuKienBaoVe4;
//Ảnh
$AnhPhuKienBaoVe5 = $_FILES['AnhPhuKienBaoVe5']['name'];
$AnhPhuKienBaoVe5_tmp = $_FILES['AnhPhuKienBaoVe5']['tmp_name'];
$AnhPhuKienBaoVe5 = time().'_'.$AnhPhuKienBaoVe5;

$XuatXuBaoVe = $_POST['XuatXuBaoVe'];
$ChatLuongBaoVe = $_POST['ChatLuongBaoVe'];
$BoPhuKienBaoVe = $_POST['BoPhuKienBaoVe'];
$Gioi_THieu_PhuKien_BaoVe_1 = $_POST['Gioi-THieu-PhuKien-BaoVe-1'];
$Gioi_THieu_PhuKien_BaoVe_2 = $_POST['Gioi-THieu-PhuKien-BaoVe-2'];
$Gioi_THieu_PhuKien_BaoVe_3 = $_POST['Gioi-THieu-PhuKien-BaoVe-3'];
$GiaBanBaoVe = $_POST['GiaBanBaoVe'];
$SoLuongBaoVe = $_POST['SoLuongBaoVe'];
$TinhTrangBaoVe = $_POST['TinhTrangBaoVe'];


// --------------------------------------------------- XỬ lý dữ liệu -------------------------------- //
if(!$TenPhuKienBaoVe
|| !$loaiphukienBaoVe
|| !$AnhPhuKienBaoVe1
|| !$AnhPhuKienBaoVe2
|| !$AnhPhuKienBaoVe3
|| !$AnhPhuKienBaoVe4
|| !$AnhPhuKienBaoVe5
|| !$XuatXuBaoVe
|| !$ChatLuongBaoVe
|| !$BoPhuKienBaoVe
|| !$Gioi_THieu_PhuKien_BaoVe_1
|| !$Gioi_THieu_PhuKien_BaoVe_2
|| !$Gioi_THieu_PhuKien_BaoVe_3
|| !$GiaBanBaoVe
|| !$SoLuongBaoVe
|| !$TinhTrangBaoVe)
{
    echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>' ;
    exit;
}

    //Them
    $sql_themphukienbaove = "INSERT INTO chitietphukienbaove(TenChiTietPhuKienBaoVe,IdLoaiPhuKienBaoVe,AnhPhuKienBV1,AnhPhuKienBV2,AnhPhuKienBV3,AnhPhuKienBV4,AnhPhuKienBV5,XuatXuPhuKienBaoVe,ChatLieuBaoVe,BoDayDuBaoVe,DongGioiThieuPhuKienBaoVe1,DongGioiThieuPhuKienBaoVe2,DongGioiThieuPhuKienBaoVe3,GiaCaBaoVe,SoLuongBaoVe,TinhTrangBaoVe) 
                                            VALUE('".$TenPhuKienBaoVe."', '".$loaiphukienBaoVe."', '".$AnhPhuKienBaoVe1."', '".$AnhPhuKienBaoVe2."', '".$AnhPhuKienBaoVe3."', '".$AnhPhuKienBaoVe4."', '".$AnhPhuKienBaoVe5."', '".$XuatXuBaoVe."', 
                                                    '".$ChatLuongBaoVe."', '".$BoPhuKienBaoVe."', '".$Gioi_THieu_PhuKien_BaoVe_1."', '".$Gioi_THieu_PhuKien_BaoVe_2."', '".$Gioi_THieu_PhuKien_BaoVe_3."', '".$GiaBanBaoVe."', '".$SoLuongBaoVe."', '".$TinhTrangBaoVe."')";
    mysqli_query($mysqli,$sql_themphukienbaove);

                move_uploaded_file($AnhPhuKienBaoVe1_tmp,'Uploads/'.$AnhPhuKienBaoVe1);
                move_uploaded_file($AnhPhuKienBaoVe2_tmp,'Uploads/'.$AnhPhuKienBaoVe2);
                move_uploaded_file($AnhPhuKienBaoVe3_tmp,'Uploads/'.$AnhPhuKienBaoVe3);
                move_uploaded_file($AnhPhuKienBaoVe4_tmp,'Uploads/'.$AnhPhuKienBaoVe4);
                move_uploaded_file($AnhPhuKienBaoVe5_tmp,'Uploads/'.$AnhPhuKienBaoVe5);
                

    
    echo '<script> alert("Bạn đã thêm thành công");window.location="indexAdmin.php?action=Default-Type-Accesory";</script>';

}



if(isset($_POST['ThemPhuKienTrangTri']))
{

$TenPhuKienTrangTri = $_POST['TenPhuKienTrangTri'];
$loaiphukienTrangTri = $_POST['loaiphukienTrangTri'];
//Ảnh
$AnhPhuKienTrangTri1 = $_FILES['AnhPhuKienTrangTri1']['name'];
$AnhPhuKienTrangTri1_tmp = $_FILES['AnhPhuKienTrangTri1']['tmp_name'];
$AnhPhuKienTrangTri1 = time().'_'.$AnhPhuKienTrangTri1;
//Ảnh
$AnhPhuKienTrangTri2 = $_FILES['AnhPhuKienTrangTri2']['name'];
$AnhPhuKienTrangTri2_tmp = $_FILES['AnhPhuKienTrangTri2']['tmp_name'];
$AnhPhuKienTrangTri2 = time().'_'.$AnhPhuKienTrangTri2;
//Ảnh
$AnhPhuKienTrangTri3 = $_FILES['AnhPhuKienTrangTri3']['name'];
$AnhPhuKienTrangTri3_tmp = $_FILES['AnhPhuKienTrangTri3']['tmp_name'];
$AnhPhuKienTrangTri3 = time().'_'.$AnhPhuKienTrangTri3;
//Ảnh
$AnhPhuKienTrangTri4 = $_FILES['AnhPhuKienTrangTri4']['name'];
$AnhPhuKienTrangTri4_tmp = $_FILES['AnhPhuKienTrangTri4']['tmp_name'];
$AnhPhuKienTrangTri4 = time().'_'.$AnhPhuKienTrangTri4;
//Ảnh
$AnhPhuKienTrangTri5 = $_FILES['AnhPhuKienTrangTri5']['name'];
$AnhPhuKienTrangTri5_tmp = $_FILES['AnhPhuKienTrangTri5']['tmp_name'];
$AnhPhuKienTrangTri5 = time().'_'.$AnhPhuKienTrangTri5;

$XuatXuTrangTri = $_POST['XuatXuTrangTri'];
$ChatLuongTrangTri = $_POST['ChatLuongTrangTri'];
$BoPhuKienTrangTri = $_POST['BoPhuKienTrangTri'];
$Gioi_THieu_PhuKien_TrangTri_1 = $_POST['Gioi-THieu-PhuKien-TrangTri-1'];
$Gioi_THieu_PhuKien_TrangTri_2 = $_POST['Gioi-THieu-PhuKien-TrangTri-2'];
$Gioi_THieu_PhuKien_TrangTri_3 = $_POST['Gioi-THieu-PhuKien-TrangTri-3'];
$GiaBanTrangTri = $_POST['GiaBanTrangTri'];
$SoLuongTrangTri = $_POST['SoLuongTrangTri'];
$TinhTrangTrangTri = $_POST['TinhTrangTrangTri'];


// --------------------------------------------------- XỬ lý dữ liệu -------------------------------- //
if(!$TenPhuKienTrangTri
|| !$loaiphukienTrangTri
|| !$AnhPhuKienTrangTri1
|| !$AnhPhuKienTrangTri2
|| !$AnhPhuKienTrangTri3
|| !$AnhPhuKienTrangTri4
|| !$AnhPhuKienTrangTri5
|| !$XuatXuTrangTri
|| !$ChatLuongTrangTri
|| !$BoPhuKienTrangTri
|| !$Gioi_THieu_PhuKien_TrangTri_1
|| !$Gioi_THieu_PhuKien_TrangTri_2
|| !$Gioi_THieu_PhuKien_TrangTri_3
|| !$GiaBanTrangTri
|| !$SoLuongTrangTri
|| !$TinhTrangTrangTri)
{
    echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>' ;
    exit;
}

    //Them
    $sql_themphukienTrangTri = "INSERT INTO chitietphukientrangtri(TenChiTietPhuKienTrangTri,IdLoaiPhuKienTrangTri,AnhPhuKienTrangTri1,AnhPhuKienTrangTri2,AnhPhuKienTrangTri3,AnhPhuKienTrangTri4,AnhPhuKienTrangTri5,XuatXuPhuKienTrangTri,ChatLieuTrangTri,BoDayDuTrangTri,DongGioiThieuPhuKienTrangTri1,DongGioiThieuPhuKienTrangTri2,DongGioiThieuPhuKienTrangTri3,GiaCaTrangTri,SoLuongTrangTri,TinhTrangTrangTri) 
                                            VALUE('".$TenPhuKienTrangTri."', '".$loaiphukienTrangTri."', '".$AnhPhuKienTrangTri1."', '".$AnhPhuKienTrangTri2."', '".$AnhPhuKienTrangTri3."', '".$AnhPhuKienTrangTri4."', '".$AnhPhuKienTrangTri5."', '".$XuatXuTrangTri."', 
                                                    '".$ChatLuongTrangTri."', '".$BoPhuKienTrangTri."', '".$Gioi_THieu_PhuKien_TrangTri_1."', '".$Gioi_THieu_PhuKien_TrangTri_2."', '".$Gioi_THieu_PhuKien_TrangTri_3."', '".$GiaBanTrangTri."', '".$SoLuongTrangTri."', '".$TinhTrangTrangTri."')";
    mysqli_query($mysqli,$sql_themphukienTrangTri);

                move_uploaded_file($AnhPhuKienTrangTri1_tmp,'Uploads/'.$AnhPhuKienTrangTri1);
                move_uploaded_file($AnhPhuKienTrangTri2_tmp,'Uploads/'.$AnhPhuKienTrangTri2);
                move_uploaded_file($AnhPhuKienTrangTri3_tmp,'Uploads/'.$AnhPhuKienTrangTri3);
                move_uploaded_file($AnhPhuKienTrangTri4_tmp,'Uploads/'.$AnhPhuKienTrangTri4);
                move_uploaded_file($AnhPhuKienTrangTri5_tmp,'Uploads/'.$AnhPhuKienTrangTri5);
                

    
    echo '<script> alert("Bạn đã thêm thành công");window.location="indexAdmin.php?action=Default-Type-Accesory";</script>';

}



if(isset($_POST['ThemPhuKienMamXe']))
{

$TenPhuKienMamXe = $_POST['TenPhuKienMamXe'];
$loaiphukienMamXe = $_POST['loaiphukienmamxe'];
//Ảnh
$AnhPhuKienMamXe1 = $_FILES['AnhPhuKienMamXe1']['name'];
$AnhPhuKienMamXe1_tmp = $_FILES['AnhPhuKienMamXe1']['tmp_name'];
$AnhPhuKienMamXe1 = time().'_'.$AnhPhuKienMamXe1;
//Ảnh
$AnhPhuKienMamXe2 = $_FILES['AnhPhuKienMamXe2']['name'];
$AnhPhuKienMamXe2_tmp = $_FILES['AnhPhuKienMamXe2']['tmp_name'];
$AnhPhuKienMamXe2 = time().'_'.$AnhPhuKienMamXe2;
//Ảnh
$AnhPhuKienMamXe3 = $_FILES['AnhPhuKienMamXe3']['name'];
$AnhPhuKienMamXe3_tmp = $_FILES['AnhPhuKienMamXe3']['tmp_name'];
$AnhPhuKienMamXe3 = time().'_'.$AnhPhuKienMamXe3;
//Ảnh
$AnhPhuKienMamXe4 = $_FILES['AnhPhuKienMamXe4']['name'];
$AnhPhuKienMamXe4_tmp = $_FILES['AnhPhuKienMamXe4']['tmp_name'];
$AnhPhuKienMamXe4 = time().'_'.$AnhPhuKienMamXe4;
//Ảnh
$AnhPhuKienMamXe5 = $_FILES['AnhPhuKienMamXe5']['name'];
$AnhPhuKienMamXe5_tmp = $_FILES['AnhPhuKienMamXe5']['tmp_name'];
$AnhPhuKienMamXe5 = time().'_'.$AnhPhuKienMamXe5;

$XuatXuMamXe = $_POST['XuatXuMamXe'];
$ChatLuongMamXe = $_POST['ChatLuongMamXe'];
$BoPhuKienMamXe = $_POST['BoPhuKienMamXe'];
$Gioi_THieu_PhuKien_MamXe_1 = $_POST['Gioi-THieu-PhuKien-MamXe-1'];
$Gioi_THieu_PhuKien_MamXe_2 = $_POST['Gioi-THieu-PhuKien-MamXe-2'];
$Gioi_THieu_PhuKien_MamXe_3 = $_POST['Gioi-THieu-PhuKien-MamXe-3'];
$GiaBanMamXe = $_POST['GiaBanMamXe'];
$SoLuongMamXe = $_POST['SoLuongMamXe'];
$TinhTrangMamXe = $_POST['TinhTrangMamXe'];


// --------------------------------------------------- XỬ lý dữ liệu -------------------------------- //
if(!$TenPhuKienMamXe
|| !$loaiphukienMamXe
|| !$AnhPhuKienMamXe1
|| !$AnhPhuKienMamXe2
|| !$AnhPhuKienMamXe3
|| !$AnhPhuKienMamXe4
|| !$AnhPhuKienMamXe5
|| !$XuatXuMamXe
|| !$ChatLuongMamXe
|| !$BoPhuKienMamXe
|| !$Gioi_THieu_PhuKien_MamXe_1
|| !$Gioi_THieu_PhuKien_MamXe_2
|| !$Gioi_THieu_PhuKien_MamXe_3
|| !$GiaBanMamXe
|| !$SoLuongMamXe
|| !$TinhTrangMamXe)
{
    echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>' ;
    exit;
}

    //Them
    $sql_themphukienMamXe = "INSERT INTO chitietphukienmamxe(TenChiTietPhuKienMamXe,IdLoaiPhuKienMamXe,AnhPhuKienMamXe1,AnhPhuKienMamXe2,AnhPhuKienMamXe3,AnhPhuKienMamXe4,AnhPhuKienMamXe5,XuatXuPhuKienMamXe,ChatLieuMamXe,BoDayDuMamXe,DongGioiThieuPhuKienMamXe1,DongGioiThieuPhuKienMamXe2,DongGioiThieuPhuKienMamXe3,GiaCaMamXe,SoLuongMamXe,TinhTrangMamXe) 
                                            VALUE('".$TenPhuKienMamXe."', '".$loaiphukienMamXe."', '".$AnhPhuKienMamXe1."', '".$AnhPhuKienMamXe2."', '".$AnhPhuKienMamXe3."', '".$AnhPhuKienMamXe4."', '".$AnhPhuKienMamXe5."', '".$XuatXuMamXe."', 
                                                    '".$ChatLuongMamXe."', '".$BoPhuKienMamXe."', '".$Gioi_THieu_PhuKien_MamXe_1."', '".$Gioi_THieu_PhuKien_MamXe_2."', '".$Gioi_THieu_PhuKien_MamXe_3."', '".$GiaBanMamXe."', '".$SoLuongMamXe."', '".$TinhTrangMamXe."')";
    mysqli_query($mysqli,$sql_themphukienMamXe);

                move_uploaded_file($AnhPhuKienMamXe1_tmp,'Uploads/'.$AnhPhuKienMamXe1);
                move_uploaded_file($AnhPhuKienMamXe2_tmp,'Uploads/'.$AnhPhuKienMamXe2);
                move_uploaded_file($AnhPhuKienMamXe3_tmp,'Uploads/'.$AnhPhuKienMamXe3);
                move_uploaded_file($AnhPhuKienMamXe4_tmp,'Uploads/'.$AnhPhuKienMamXe4);
                move_uploaded_file($AnhPhuKienMamXe5_tmp,'Uploads/'.$AnhPhuKienMamXe5);
                

    
    echo '<script> alert("Bạn đã thêm thành công");window.location="indexAdmin.php?action=Default-Type-Accesory";</script>';

}
?>