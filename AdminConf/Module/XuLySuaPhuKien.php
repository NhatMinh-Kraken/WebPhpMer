<?php
    include('config.php');
// --------------------------------------------- khởi tạo dữ liệu ------------------------------------ //






if(isset($_POST['SuaPhuKienBody']))
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

$sqlXoa = "SELECT * FROM chitietphukien WHERE IdChiTietPhuKien = '$_GET[idaccesory]' LIMIT 1";
$query = mysqli_query($mysqli,$sqlXoa);

    while($row = mysqli_fetch_array($query)){
        unlink('Uploads/'.$row['AnhPhuKien1']);
        unlink('Uploads/'.$row['AnhPhuKien2']);
        unlink('Uploads/'.$row['AnhPhuKien3']);
        unlink('Uploads/'.$row['AnhPhuKien4']);
        unlink('Uploads/'.$row['AnhPhuKien5']);
    }
        $sql_suaphukien1 = "UPDATE chitietphukien SET TenChiTietPhuKien = '$TenPhuKien', IdLoaiPhuKienBody = '$loaiphukien', AnhPhuKien1 = '$AnhPhuKien1', AnhPhuKien2 = '$AnhPhuKien2', AnhPhuKien3 = '$AnhPhuKien3', AnhPhuKien4 = '$AnhPhuKien4', AnhPhuKien5 = '$AnhPhuKien5', XuatXuPhuKien = '$XuatXu', ChatLieu = '$ChatLuong', BoDayDu = '$BoPhuKien', DongGioiThieuPhuKien1 = '$Gioi_THieu_PhuKien_1', DongGioiThieuPhuKien2 = '$Gioi_THieu_PhuKien_2', DongGioiThieuPhuKien3 = '$Gioi_THieu_PhuKien_3', GiaCaPhuKien = '$GiaBan', SoLuongPhuKien = '$SoLuong', TinhTrangPhuKien = '$TinhTrang' Where IdChiTietPhuKien = '$_GET[idaccesory]'"; 
        mysqli_query($mysqli,$sql_suaphukien1);

                    move_uploaded_file($AnhPhuKien1_tmp,'Uploads/'.$AnhPhuKien1);
                    move_uploaded_file($AnhPhuKien2_tmp,'Uploads/'.$AnhPhuKien2);
                    move_uploaded_file($AnhPhuKien3_tmp,'Uploads/'.$AnhPhuKien3);
                    move_uploaded_file($AnhPhuKien4_tmp,'Uploads/'.$AnhPhuKien4);
                    move_uploaded_file($AnhPhuKien5_tmp,'Uploads/'.$AnhPhuKien5);
                    

        
        echo '<script> alert("Bạn đã Sửa thành công");window.location="indexAdmin.php?action=Default-Type-Accesory";</script>';

    
}


if(isset($_POST['SuaPhuKienBaoVe']))
{

$TenPhuKienBaoVe = $_POST['TenPhuKienBaoVe'];
$loaiphukienBaoVe = $_POST['loaiphukienBaoVe'];
//Ảnh
$AnhPhuKienBV1 = $_FILES['AnhPhuKienBaoVe1']['name'];
$AnhPhuKienBV1_tmp = $_FILES['AnhPhuKienBaoVe1']['tmp_name'];
$AnhPhuKienBV1 = time().'_'.$AnhPhuKienBV1;
//Ảnh
$AnhPhuKienBV2 = $_FILES['AnhPhuKienBaoVe2']['name'];
$AnhPhuKienBV2_tmp = $_FILES['AnhPhuKienBaoVe2']['tmp_name'];
$AnhPhuKienBV2 = time().'_'.$AnhPhuKienBV2;
//Ảnh
$AnhPhuKienBV3 = $_FILES['AnhPhuKienBaoVe3']['name'];
$AnhPhuKienBV3_tmp = $_FILES['AnhPhuKienBaoVe3']['tmp_name'];
$AnhPhuKienBV3 = time().'_'.$AnhPhuKienBV3;
//Ảnh
$AnhPhuKienBV4 = $_FILES['AnhPhuKienBaoVe4']['name'];
$AnhPhuKienBV4_tmp = $_FILES['AnhPhuKienBaoVe4']['tmp_name'];
$AnhPhuKienBV4 = time().'_'.$AnhPhuKienBV4;
//Ảnh
$AnhPhuKienBV5 = $_FILES['AnhPhuKienBaoVe5']['name'];
$AnhPhuKienBV5_tmp = $_FILES['AnhPhuKienBaoVe5']['tmp_name'];
$AnhPhuKienBV5 = time().'_'.$AnhPhuKienBV5;

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
|| !$AnhPhuKienBV1
|| !$AnhPhuKienBV2
|| !$AnhPhuKienBV3
|| !$AnhPhuKienBV4
|| !$AnhPhuKienBV5
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
    $sqlXoa = "SELECT * FROM chitietphukienbaove WHERE IdChiTietPhuKienBaoVe = '$_GET[idaccesory]' LIMIT 1";
    $query = mysqli_query($mysqli,$sqlXoa);
    while($row = mysqli_fetch_array($query)){
        unlink('Uploads/'.$row['AnhPhuKienBV1']);
        unlink('Uploads/'.$row['AnhPhuKienBV2']);
        unlink('Uploads/'.$row['AnhPhuKienBV3']);
        unlink('Uploads/'.$row['AnhPhuKienBV4']);
        unlink('Uploads/'.$row['AnhPhuKienBV5']);
    }
    //Them
        $sql_suaphukienbaove = "UPDATE chitietphukienbaove SET TenChiTietPhuKienBaoVe = '$TenPhuKienBaoVe',IdLoaiPhuKienBaoVe = '$loaiphukienBaoVe',AnhPhuKienBV1 = '$AnhPhuKienBV1',AnhPhuKienBV2 = '$AnhPhuKienBV2',AnhPhuKienBV3 = '$AnhPhuKienBV3',AnhPhuKienBV4 = '$AnhPhuKienBV4',AnhPhuKienBV5 = '$AnhPhuKienBV5',XuatXuPhuKienBaoVe = '$XuatXuBaoVe',ChatLieuBaoVe = '$ChatLuongBaoVe',BoDayDuBaoVe = '$BoPhuKienBaoVe',DongGioiThieuPhuKienBaoVe1 = '$Gioi_THieu_PhuKien_BaoVe_1',DongGioiThieuPhuKienBaoVe2 = '$Gioi_THieu_PhuKien_BaoVe_2',DongGioiThieuPhuKienBaoVe3 = '$Gioi_THieu_PhuKien_BaoVe_3',GiaCaBaoVe = '$GiaBanBaoVe',SoLuongBaoVe = '$SoLuongBaoVe',TinhTrangBaoVe = '$TinhTrangBaoVe' Where IdChiTietPhuKienBaoVe = '$_GET[idaccesory]'"; 
        mysqli_query($mysqli,$sql_suaphukienbaove);

                    move_uploaded_file($AnhPhuKienBV1_tmp,'Uploads/'.$AnhPhuKienBV1);
                    move_uploaded_file($AnhPhuKienBV2_tmp,'Uploads/'.$AnhPhuKienBV2);
                    move_uploaded_file($AnhPhuKienBV3_tmp,'Uploads/'.$AnhPhuKienBV3);
                    move_uploaded_file($AnhPhuKienBV4_tmp,'Uploads/'.$AnhPhuKienBV4);
                    move_uploaded_file($AnhPhuKienBV5_tmp,'Uploads/'.$AnhPhuKienBV5);
                    

        
        echo '<script> alert("Bạn đã Sửa thành công");window.location="indexAdmin.php?action=Default-Type-Accesory";</script>';

    
}


if(isset($_POST['SuaPhuKienTienNghi']))
{

$TenPhuKienTienNghi = $_POST['TenPhuKienTienNghi'];
$loaiphukienTienNghi = $_POST['loaiphukienTienNghi'];
//Ảnh
$AnhPhuKienTienNghi1 = $_FILES['AnhPhuKienTienNghi1']['name'];
$AnhPhuKienTienNghi1_tmp = $_FILES['AnhPhuKienTienNghi1']['tmp_name'];
$AnhPhuKienTienNghi1 = time().'_'.$AnhPhuKienTienNghi1;
//Ảnh
$AnhPhuKienTienNghi2 = $_FILES['AnhPhuKienTienNghi2']['name'];
$AnhPhuKienTienNghi2_tmp = $_FILES['AnhPhuKienTienNghi2']['tmp_name'];
$AnhPhuKienTienNghi2 = time().'_'.$AnhPhuKienTienNghi2;
//Ảnh
$AnhPhuKienTienNghi3 = $_FILES['AnhPhuKienTienNghi3']['name'];
$AnhPhuKienTienNghi3_tmp = $_FILES['AnhPhuKienTienNghi3']['tmp_name'];
$AnhPhuKienTienNghi3 = time().'_'.$AnhPhuKienTienNghi3;
//Ảnh
$AnhPhuKienTienNghi4 = $_FILES['AnhPhuKienTienNghi4']['name'];
$AnhPhuKienTienNghi4_tmp = $_FILES['AnhPhuKienTienNghi4']['tmp_name'];
$AnhPhuKienTienNghi4 = time().'_'.$AnhPhuKienTienNghi4;
//Ảnh
$AnhPhuKienTienNghi5 = $_FILES['AnhPhuKienTienNghi5']['name'];
$AnhPhuKienTienNghi5_tmp = $_FILES['AnhPhuKienTienNghi5']['tmp_name'];
$AnhPhuKienTienNghi5 = time().'_'.$AnhPhuKienTienNghi5;

$XuatXuTienNghi = $_POST['XuatXuTienNghi'];
$ChatLuongTienNghi = $_POST['ChatLuongTienNghi'];
$BoPhuKienTienNghi = $_POST['BoPhuKienTienNghi'];
$Gioi_THieu_PhuKien_TienNghi_1 = $_POST['Gioi-THieu-PhuKien-TienNghi-1'];
$Gioi_THieu_PhuKien_TienNghi_2 = $_POST['Gioi-THieu-PhuKien-TienNghi-2'];
$Gioi_THieu_PhuKien_TienNghi_3 = $_POST['Gioi-THieu-PhuKien-TienNghi-3'];
$GiaBanTienNghi = $_POST['GiaBanTienNghi'];
$SoLuongTienNghi = $_POST['SoLuongTienNghi'];
$TinhTrangTienNghi = $_POST['TinhTrangTienNghi'];


// --------------------------------------------------- XỬ lý dữ liệu -------------------------------- //
if(!$TenPhuKienTienNghi
    || !$loaiphukienTienNghi
    || !$AnhPhuKienTienNghi1
    || !$AnhPhuKienTienNghi2
    || !$AnhPhuKienTienNghi3
    || !$AnhPhuKienTienNghi4
    || !$AnhPhuKienTienNghi5
    || !$XuatXuTienNghi
    || !$ChatLuongTienNghi
    || !$BoPhuKienTienNghi
    || !$Gioi_THieu_PhuKien_TienNghi_1
    || !$Gioi_THieu_PhuKien_TienNghi_2
    || !$Gioi_THieu_PhuKien_TienNghi_3
    || !$GiaBanTienNghi
    || !$SoLuongTienNghi
    || !$TinhTrangTienNghi)
    {
        echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>' ;
        exit;
    }

    $sqlXoa = "SELECT * FROM chitietphukientiennghi WHERE Idchitietphukientiennghi = '$_GET[idaccesory]' LIMIT 1";
    $query = mysqli_query($mysqli,$sqlXoa);
    while($row = mysqli_fetch_array($query)){
        unlink('Uploads/'.$row['AnhPhuKienTienNghi1']);
        unlink('Uploads/'.$row['AnhPhuKienTienNghi2']);
        unlink('Uploads/'.$row['AnhPhuKienTienNghi3']);
        unlink('Uploads/'.$row['AnhPhuKienTienNghi4']);
        unlink('Uploads/'.$row['AnhPhuKienTienNghi5']);
    }
        //Them
        $sql_suaphukientiennghi = "UPDATE chitietphukientiennghi SET TenChiTietPhuKienTienNghi = '$TenPhuKienTienNghi',IdLoaiPhuKienTienNghi = '$loaiphukienTienNghi',AnhPhuKienTienNghi1 = '$AnhPhuKienTienNghi1',AnhPhuKienTienNghi2 = '$AnhPhuKienTienNghi2',AnhPhuKienTienNghi3 = '$AnhPhuKienTienNghi3',AnhPhuKienTienNghi4 = '$AnhPhuKienTienNghi4',AnhPhuKienTienNghi5 = '$AnhPhuKienTienNghi5',XuatXuPhuKienTienNghi = '$XuatXuTienNghi',ChatLieuTienNghi = '$ChatLuongTienNghi',BoDayDuTienNghi = '$BoPhuKienTienNghi',DongGioiThieuPhuKienTienNghi1 = '$Gioi_THieu_PhuKien_TienNghi_1',DongGioiThieuPhuKienTienNghi2 = '$Gioi_THieu_PhuKien_TienNghi_2',DongGioiThieuPhuKienTienNghi3 = '$Gioi_THieu_PhuKien_TienNghi_3',GiaCaTienNghi = '$GiaBanTienNghi',SoLuongTienNghi = '$SoLuongTienNghi',TinhTrangTienNghi = '$TinhTrangTienNghi' Where IdChiTietPhuKienTienNghi = '$_GET[idaccesory]'"; 
        mysqli_query($mysqli,$sql_suaphukientiennghi);

                    move_uploaded_file($AnhPhuKienTienNghi1_tmp,'Uploads/'.$AnhPhuKienTienNghi1);
                    move_uploaded_file($AnhPhuKienTienNghi2_tmp,'Uploads/'.$AnhPhuKienTienNghi2);
                    move_uploaded_file($AnhPhuKienTienNghi3_tmp,'Uploads/'.$AnhPhuKienTienNghi3);
                    move_uploaded_file($AnhPhuKienTienNghi4_tmp,'Uploads/'.$AnhPhuKienTienNghi4);
                    move_uploaded_file($AnhPhuKienTienNghi5_tmp,'Uploads/'.$AnhPhuKienTienNghi5);
                    

        
        echo '<script> alert("Bạn đã thêm thành công");window.location="indexAdmin.php?action=Default-Type-Accesory";</script>';
    
}



if(isset($_POST['SuaPhuKienTrangTri']))
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

    $sqlXoa = "SELECT * FROM chitietphukientrangtri WHERE Idchitietphukientrangtri = '$_GET[idaccesory]' LIMIT 1";
    $query = mysqli_query($mysqli,$sqlXoa);
    while($row = mysqli_fetch_array($query)){
        unlink('Uploads/'.$row['AnhPhuKienTrangTri1']);
        unlink('Uploads/'.$row['AnhPhuKienTrangTri2']);
        unlink('Uploads/'.$row['AnhPhuKienTrangTri3']);
        unlink('Uploads/'.$row['AnhPhuKienTrangTri4']);
        unlink('Uploads/'.$row['AnhPhuKienTrangTri5']);
    }
        //Them
        $sql_suaphukientrangtri = "UPDATE chitietphukientrangtri SET TenChiTietPhuKienTrangTri = '$TenPhuKienTrangTri',IdLoaiPhuKienTrangTri = '$loaiphukienTrangTri',AnhPhuKienTrangTri1 = '$AnhPhuKienTrangTri1',AnhPhuKienTrangTri2 = '$AnhPhuKienTrangTri2',AnhPhuKienTrangTri3 = '$AnhPhuKienTrangTri3',AnhPhuKienTrangTri4 = '$AnhPhuKienTrangTri4',AnhPhuKienTrangTri5 = '$AnhPhuKienTrangTri5',XuatXuPhuKienTrangTri = '$XuatXuTrangTri',ChatLieuTrangTri = '$ChatLuongTrangTri',BoDayDuTrangTri = '$BoPhuKienTrangTri',DongGioiThieuPhuKienTrangTri1 = '$Gioi_THieu_PhuKien_TrangTri_1',DongGioiThieuPhuKienTrangTri2 = '$Gioi_THieu_PhuKien_TrangTri_2',DongGioiThieuPhuKienTrangTri3 = '$Gioi_THieu_PhuKien_TrangTri_3',GiaCaTrangTri = '$GiaBanTrangTri',SoLuongTrangTri = '$SoLuongTrangTri',TinhTrangTrangTri = '$TinhTrangTrangTri' Where IdChiTietPhuKienTrangTri = '$_GET[idaccesory]'"; 

        mysqli_query($mysqli,$sql_suaphukientrangtri);

                    move_uploaded_file($AnhPhuKienTrangTri1_tmp,'Uploads/'.$AnhPhuKienTrangTri1);
                    move_uploaded_file($AnhPhuKienTrangTri2_tmp,'Uploads/'.$AnhPhuKienTrangTri2);
                    move_uploaded_file($AnhPhuKienTrangTri3_tmp,'Uploads/'.$AnhPhuKienTrangTri3);
                    move_uploaded_file($AnhPhuKienTrangTri4_tmp,'Uploads/'.$AnhPhuKienTrangTri4);
                    move_uploaded_file($AnhPhuKienTrangTri5_tmp,'Uploads/'.$AnhPhuKienTrangTri5);
                    

        
        echo '<script> alert("Bạn đã Sửa thành công");window.location="indexAdmin.php?action=Default-Type-Accesory";</script>';
    
}



if(isset($_POST['SuaPhuKienMamXe']))
{

    $TenPhuKienMamXe = $_POST['TenPhuKienMamXe'];
    $loaiphukienMamXe = $_POST['loaiphukienMamXe'];
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

    $sqlXoa = "SELECT * FROM chitietphukienmamxe WHERE IdChiTietPhuKienMamXe = '$_GET[idaccesory]' LIMIT 1";
    $query = mysqli_query($mysqli,$sqlXoa);
    while($row = mysqli_fetch_array($query)){
        unlink('Uploads/'.$row['AnhPhuKienMamXe1']);
        unlink('Uploads/'.$row['AnhPhuKienMamXe2']);
        unlink('Uploads/'.$row['AnhPhuKienMamXe3']);
        unlink('Uploads/'.$row['AnhPhuKienMamXe4']);
        unlink('Uploads/'.$row['AnhPhuKienMamXe5']);
    }
    //Them
    $sql_suaphukienMamXe = "UPDATE chitietphukienmamxe SET TenChiTietPhuKienMamXe = '$TenPhuKienMamXe',IdLoaiPhuKienMamXe = '$loaiphukienMamXe',AnhPhuKienMamXe1 = '$AnhPhuKienMamXe1',AnhPhuKienMamXe2 = '$AnhPhuKienMamXe2',AnhPhuKienMamXe3 = '$AnhPhuKienMamXe3',AnhPhuKienMamXe4 = '$AnhPhuKienMamXe4',AnhPhuKienMamXe5 = '$AnhPhuKienMamXe5',XuatXuPhuKienMamXe = '$XuatXuMamXe',ChatLieuMamXe = '$ChatLuongMamXe',BoDayDuMamXe = '$BoPhuKienMamXe',DongGioiThieuPhuKienMamXe1 = '$Gioi_THieu_PhuKien_MamXe_1',DongGioiThieuPhuKienMamXe2 = '$Gioi_THieu_PhuKien_MamXe_2',DongGioiThieuPhuKienMamXe3 = '$Gioi_THieu_PhuKien_MamXe_3',GiaCaMamXe = '$GiaBanMamXe',SoLuongMamXe = '$SoLuongMamXe',TinhTrangMamXe = '$TinhTrangMamXe' Where IdChiTietPhuKienMamXe = '$_GET[idaccesory]'"; 
    mysqli_query($mysqli,$sql_suaphukienMamXe);

                    move_uploaded_file($AnhPhuKienMamXe1_tmp,'Uploads/'.$AnhPhuKienMamXe1);
                    move_uploaded_file($AnhPhuKienMamXe2_tmp,'Uploads/'.$AnhPhuKienMamXe2);
                    move_uploaded_file($AnhPhuKienMamXe3_tmp,'Uploads/'.$AnhPhuKienMamXe3);
                    move_uploaded_file($AnhPhuKienMamXe4_tmp,'Uploads/'.$AnhPhuKienMamXe4);
                    move_uploaded_file($AnhPhuKienMamXe5_tmp,'Uploads/'.$AnhPhuKienMamXe5);
                    

        
        echo '<script> alert("Bạn đã sửa thành công");window.location="indexAdmin.php?action=Default-Type-Accesory";</script>';
    
}
?>