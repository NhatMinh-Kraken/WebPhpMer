<?php
    include('config.php');
// --------------------------------------------- khởi tạo dữ liệu ------------------------------------ //
    $TenXe = $_POST['TenXe'];
    $DongGIoiThieu1 = $_POST['Dong-GIoi-Thieu1'];
//Ảnh
    $hinhanh1 = $_FILES['hinhanh1']['name'];
    $hinhanh1_tmp = $_FILES['hinhanh1']['tmp_name'];
    $hinhanh1 = time().'_'.$hinhanh1;
//
    $DongGioiThieu2 = $_POST['Dong-GioiThieu-2'];
    $SoChoNgoi = $_POST['So-Cho-Ngoi'];
    $KieuXe = $_POST['Kieu-Xe'];
//Xuất XỨ
    $XuatXu = $_POST['Xuat-Xu'];
//
    $KichThuocDRC = $_POST['KichThuoc-DRC'];
    $ChieuDaiCoSo = $_POST['Chieu-Dai-Co-So'];
    $DongCo = $_POST['Dong-Co'];
    $DungTichCongTac = $_POST['Dung-Tich-Cong-Tac'];
    $DungTichBinhNhienLieu = $_POST['Dung-Tich-Binh-Nhien-Lieu'];
    $LoaiNhienLieu = $_POST['Loai-Nhien-Lieu'];
    $CongSuatCucDai = $_POST['Cong-Suat-Cuc-Dai'];
    $MomenCucDai = $_POST['Momen-Cuc-Dai'];
    $HopSo = $_POST['Hop-So'];
    $HeDanDong = $_POST['He-Dan-Dong'];
    $HeThongTreo = $_POST['He-Thong-Treo'];
    $TayLaiTroLuc = $_POST['Tay-Lai-Tro-Luc'];
    $CoMam = $_POST['Co-Mam'];
    $GiaNiemYet = $_POST['Gia-Niem-Yet'];
    $GiaHCM = $_POST['Gia-HCM'];
    $GiaHN = $_POST['Gia-HN'];
    $GiaTinhKhac = $_POST['Gia-Tinh-Khac'];
//Ảnh
    $AnhMau1 = $_FILES['AnhMau1']['name'];
    $AnhMau1_tmp = $_FILES['AnhMau1']['tmp_name'];
    $AnhMau1 = time().'_'.$AnhMau1;
    
    $AnhMau2 = $_FILES['AnhMau2']['name'];
    $AnhMau2_tmp = $_FILES['AnhMau2']['tmp_name'];
    $AnhMau2 = time().'_'.$AnhMau2;

    $AnhMau3 = $_FILES['AnhMau3']['name'];
    $AnhMau3_tmp = $_FILES['AnhMau3']['tmp_name'];
    $AnhMau3 = time().'_'.$AnhMau3;
//
    $GioiTHieuDienMao1 = $_POST['Gioi-THieu-DienMao-1'];
    $GioiTHieuDienMao2 = $_POST['Gioi-THieu-DienMao-2'];
//Ảnh
    $AnhDauXe1 = $_FILES['AnhDauXe1']['name'];
    $AnhDauXe1_tmp = $_FILES['AnhDauXe1']['tmp_name'];
    $AnhDauXe1 = time().'_'.$AnhDauXe1;
//
    $GioiTHieuDauXe1 = $_POST['Gioi-THieu-DauXe-1'];
    $GioiTHieuDauXe2 = $_POST['Gioi-THieu-DauXe-2'];
//Ảnh
    $AnhDauXe2 = $_FILES['AnhDauXe2']['name'];
    $AnhDauXe2_tmp = $_FILES['AnhDauXe2']['tmp_name'];
    $AnhDauXe2 = time().'_'.$AnhDauXe2;
//
    $GioiTHieuTanNhiet1 = $_POST['Gioi-THieu-TanNhiet-1'];
    $GioiTHieuTanNhiet2 = $_POST['Gioi-THieu-TanNhiet-2'];
//Ảnh
    $AnhThanXe1 = $_FILES['AnhThanXe1']['name'];
    $AnhThanXe1_tmp = $_FILES['AnhThanXe1']['tmp_name'];
    $AnhThanXe1 = time().'_'.$AnhThanXe1;
//
    $GioiTHieuThanXe1 = $_POST['Gioi-THieu-ThanXe-1'];
//Ảnh
    $AnhThanXe2 = $_FILES['AnhThanXe2']['name'];
    $AnhThanXe2_tmp = $_FILES['AnhThanXe2']['tmp_name'];
    $AnhThanXe2 = time().'_'.$AnhThanXe2;
//

    $GioiTHieuThanDuoi1 = $_POST['Gioi-THieu-ThanDuoi-1'];

//Ảnh
    $AnhDuoiXe = $_FILES['AnhDuoiXe']['name'];
    $AnhDuoiXe_tmp = $_FILES['AnhDuoiXe']['tmp_name'];
    $AnhDuoiXe = time().'_'.$AnhDuoiXe;
//

    $GioiTHieuDuoiXe1 = $_POST['Gioi-THieu-DuoiXe-1'];
    $GioiTHieuDuoiXe2 = $_POST['Gioi-THieu-DuoiXe-2'];
    $GioiTHieuNoiThat1 = $_POST['Gioi-THieu-NoiThat-1'];
    $GioiTHieuNoiThat2 = $_POST['Gioi-THieu-NoiThat-2'];
    $GioiTHieuNoiThat3 = $_POST['Gioi-THieu-NoiThat-3'];

//Ảnh
    $AnhKhoangLai = $_FILES['AnhKhoangLai']['name'];
    $AnhKhoangLai_tmp = $_FILES['AnhKhoangLai']['tmp_name'];
    $AnhKhoangLai = time().'_'.$AnhKhoangLai;
//

    $GioiTHieuKhoangLai = $_POST['Gioi-THieu-KhoangLai'];

//Ảnh
    $AnhHangGheTruoc = $_FILES['AnhHangGheTruoc']['name'];
    $AnhHangGheTruoc_tmp = $_FILES['AnhHangGheTruoc']['tmp_name'];
    $AnhHangGheTruoc = time().'_'.$AnhHangGheTruoc;
//

    $GioiTHieuHangGheTruoc = $_POST['Gioi-THieu-HangGheTruoc'];

//Ảnh
    $AnhHangGheHanhKhach = $_FILES['AnhHangGheHanhKhach']['name'];
    $AnhHangGheHanhKhach_tmp = $_FILES['AnhHangGheHanhKhach']['tmp_name'];
    $AnhHangGheHanhKhach = time().'_'.$AnhHangGheHanhKhach;
//

    $GioiTHieuKhoangHanhKhach1 = $_POST['Gioi-THieu-KhoangHanhKhach-1'];
    $GioiTHieuKhoangHanhKhach2 = $_POST['Gioi-THieu-KhoangHanhKhach-2'];

//Ảnh
    $AnhHanhLy = $_FILES['AnhHanhLy']['name'];
    $AnhHanhLy_tmp = $_FILES['AnhHanhLy']['tmp_name'];
    $AnhHanhLy = time().'_'.$AnhHanhLy;
//

    $GioiTHieuHanhLy1 = $_POST['Gioi-THieu-HanhLy-1'];
    $GioiTHieuHanhLy2 = $_POST['Gioi-THieu-HanhLy-2'];
    $GioiTHieuTienNghi = $_POST['Gioi-THieu-TienNghi'];

//ẢNh
    $AnhTienNghi = $_FILES['AnhTienNghi']['name'];
    $AnhTienNghi_tmp = $_FILES['AnhTienNghi']['tmp_name'];
    $AnhTienNghi = time().'_'.$AnhTienNghi;
//

    $GioiTHieuCongNghe1 = $_POST['Gioi-THieu-CongNghe-1'];
    $GioiTHieuCongNghe2 = $_POST['Gioi-THieu-CongNghe-2'];

//Ảnh
    $AnhDongCo = $_FILES['AnhDongCo']['name'];
    $AnhDongCo_tmp = $_FILES['AnhDongCo']['tmp_name'];
    $AnhDongCo = time().'_'.$AnhDongCo;
//

    $GioiTHieuDongCo1 = $_POST['Gioi-THieu-DongCo-1'];
    $GioiTHieuDongCo2 = $_POST['Gioi-THieu-DongCo-2'];

//Ảnh
    $AnhVanHanh = $_FILES['AnhVanHanh']['name'];
    $AnhVanHanh_tmp = $_FILES['AnhVanHanh']['tmp_name'];
    $AnhVanHanh = time().'_'.$AnhVanHanh;
//

    $GioiTHieuVanHanh1 = $_POST['Gioi-THieu-VanHanh-1'];
    $GioiTHieuVanHanh2 = $_POST['Gioi-THieu-VanHanh-2'];
    $GioiTHieuVanHanh3 = $_POST['Gioi-THieu-VanHanh-3'];
    $AnToan = $_POST['AnToan'];

    $TieuChuan1 = $_POST['TieuChuan-1'];
    $TieuChuan2 = $_POST['TieuChuan-2'];
    $TieuChuan3 = $_POST['TieuChuan-3'];
    $TieuChuan4 = $_POST['TieuChuan-4'];
    $TieuChuan5 = $_POST['TieuChuan-5'];
    $TieuChuan6 = $_POST['TieuChuan-6'];
    $TieuChuan7 = $_POST['TieuChuan-7'];
    $TieuChuan8 = $_POST['TieuChuan-8'];
    $TieuChuan9 = $_POST['TieuChuan-9'];
    $TieuChuan10 = $_POST['TieuChuan-10'];
    $TieuChuan11 = $_POST['TieuChuan-11'];
    $TieuChuan12 = $_POST['TieuChuan-12'];


// --------------------------------------------------- XỬ lý dữ liệu -------------------------------- //

if(isset($_POST['ThemSanPhamXe']))
{
    //Them
    $sql_them = "INSERT INTO chitietsanpham(TenXe,DongGioiThieu1,HinhAnh1,DongGioiTHieu2,SoChoNgoi
                                            ,KieuXe,XuatXu,KichThuoc,ChieuDaiCoSo,DongCo
                                            ,DungTichCongTac,DungTichBinhNhienLieu,LoaiNhienLieu,CongSuatCucDai,Momen
                                            ,HopSo,HeDanDong,HeThongTreo,TayLaiTroLuc,CoMam
                                            ,GiaXeNiemYet,GiaHCM,GiaHN,GiaTinhKhac,MauSac1
                                            ,MauSac2,MauSac3,DongDienMao1,DongDienMao2,AnhDauXe1
                                            ,DongGioiThieuDauXe1,DongGioiThieuDauXe2,AnhDauXe2,DongGioiThieuTanNhiet1,DongGioiThieuTanNhiet2
                                            ,AnhThanXe1,DongGioiThieuThanXe1,AnhThanXe2,DongGioiThieuThanDuoi1,AnhDuoiXe
                                            ,DongGioiThieuDuoiXe1,DongGioiThieuDuoiXe2,DongGioiThieuNoiThat1,DongGioiThieuNoiThat2,DongGioiThieuNoiThat3
                                            ,AnhKhoangLai1,DongGioiThieuKhoangLai,AnhGheTruoc,DongGioiThieuHangGheTruoc,AnhKhoangHanhKhach
                                            ,DongGioiThieuKhoangHanhKhach1,DongGioiThieuKhoangHanhKhach2,AnhKhoangHanhLy,DongGioiThieuKhoangHanhLy1,DongGioiThieuKhoangHanhLy2
                                            ,DongGioiThieuTienNghi,AnhTienNghi,DongGioiThieuCongNghe1,DongGioiThieuCongNghe2,AnhDongCo
                                            ,DongGioiThieuDongCo1,DongGioiThieuDongCo2,AnhVanHanh,DongGioiThieuVanHanh1,DongGioiThieuVanHanh2
                                            ,DongGioiThieuVanHanh3,DongAnhToan,TieuChuan1,TieuChuan2,TieuChuan3
                                            ,TieuChuan4,TieuChuan5,TieuChuan6,TieuChuan7,TieuChuan8
                                            ,TieuChuan9,TieuChuan10,TieuChuan11,TieuChuan12) 
                                            VALUE('".$TenXe."','".$DongGIoiThieu1."','".$hinhanh1."','".$DongGioiThieu2."','".$SoChoNgoi."'
                                                    ,'".$KieuXe."','".$XuatXu."','".$KichThuocDRC."','".$ChieuDaiCoSo."','".$DongCo."'
                                                    ,'".$DungTichCongTac."','".$DungTichBinhNhienLieu."','".$LoaiNhienLieu."','".$CongSuatCucDai."','".$MomenCucDai."'
                                                    ,'".$HopSo."' ,'".$HeDanDong."','".$HeThongTreo."','".$TayLaiTroLuc."','".$CoMam."' 
                                                    ,'".$GiaNiemYet."','".$GiaHCM."','".$GiaHN."','".$GiaTinhKhac."','".$AnhMau1."' 
                                                    ,'".$AnhMau2."','".$AnhMau3."','".$GioiTHieuDienMao1."','".$GioiTHieuDienMao2."','".$AnhDauXe1."' 
                                                    ,'".$GioiTHieuDauXe1."','".$GioiTHieuDauXe2."','".$AnhDauXe2."','".$GioiTHieuTanNhiet1."','".$GioiTHieuTanNhiet2."' 
                                                    ,'".$AnhThanXe1."','".$GioiTHieuThanXe1."','".$AnhThanXe2."','".$GioiTHieuThanDuoi1."','".$AnhDuoiXe."' 
                                                    ,'".$GioiTHieuDuoiXe1."','".$GioiTHieuDuoiXe2."','".$GioiTHieuNoiThat1."','".$GioiTHieuNoiThat2."','".$GioiTHieuNoiThat3."' 
                                                    ,'".$AnhKhoangLai."','".$GioiTHieuKhoangLai."','".$AnhHangGheTruoc."','".$GioiTHieuHangGheTruoc."','".$AnhHangGheHanhKhach."' 
                                                    ,'".$GioiTHieuKhoangHanhKhach1."','".$GioiTHieuKhoangHanhKhach2."','".$AnhHanhLy."','".$GioiTHieuHanhLy1."','".$GioiTHieuHanhLy2."' 
                                                    ,'".$GioiTHieuTienNghi."','".$AnhTienNghi."','".$GioiTHieuCongNghe1."','".$GioiTHieuCongNghe2."','".$AnhDongCo."' 
                                                    ,'".$GioiTHieuDongCo1."','".$GioiTHieuDongCo2."','".$AnhVanHanh."','".$GioiTHieuVanHanh1."','".$GioiTHieuVanHanh2."' 
                                                    ,'".$GioiTHieuVanHanh3."','".$AnToan."','".$TieuChuan1."','".$TieuChuan2."','".$TieuChuan3."' 
                                                    ,'".$TieuChuan4."','".$TieuChuan5."','".$TieuChuan6."','".$TieuChuan7."','".$TieuChuan8."'
                                                    ,'".$TieuChuan9."','".$TieuChuan10."','".$TieuChuan11."','".$TieuChuan12."')";
    mysqli_query($mysqli,$sql_them);

    move_uploaded_file($hinhanh1_tmp,'Uploads/'.$hinhanh1);
    move_uploaded_file($AnhMau1_tmp,'Uploads/'.$AnhMau1);
    move_uploaded_file($AnhMau2_tmp,'Uploads/'.$AnhMau2);
    move_uploaded_file($AnhMau3_tmp,'Uploads/'.$AnhMau3);
    move_uploaded_file($AnhDauXe1_tmp,'Uploads/'.$AnhDauXe1);
    move_uploaded_file($AnhDauXe2_tmp,'Uploads/'.$AnhDauXe2);
    move_uploaded_file($AnhThanXe1_tmp,'Uploads/'.$AnhThanXe1);
    move_uploaded_file($AnhThanXe2_tmp,'Uploads/'.$AnhThanXe2);
    move_uploaded_file($AnhDuoiXe_tmp,'Uploads/'.$AnhDuoiXe);
    move_uploaded_file($AnhKhoangLai_tmp,'Uploads/'.$AnhKhoangLai);
    move_uploaded_file($AnhHangGheTruoc_tmp,'Uploads/'.$AnhHangGheTruoc);
    move_uploaded_file($AnhHangGheHanhKhach_tmp,'Uploads/'.$AnhHangGheHanhKhach);
    move_uploaded_file($AnhHanhLy_tmp,'Uploads/'.$AnhHanhLy);
    move_uploaded_file($AnhTienNghi_tmp,'Uploads/'.$AnhTienNghi);
    move_uploaded_file($AnhDongCo_tmp,'Uploads/'.$AnhDongCo);
    move_uploaded_file($AnhVanHanh_tmp,'Uploads/'.$AnhVanHanh);

    header('location:/WEBs/AdminConf/Module/indexAdmin.php');
    
    echo "ThanhCong";
} 
else
    echo "Không Thanh cong. <a href='location:/WEBs/AdminConf/Module/indexAdmin.php?action=Add-Product'>Thử lại</a>";

?>