<?php
    include('config.php');

    $sql_lietke_product_car = "SELECT * FROM chitietsanpham, loaixe WHere chitietsanpham.IdLoaiXe = loaixe.IdLoaiXe and idchitietsanpham='$_GET[idchitietxe]'";
    $query_lietke_product_car = mysqli_query($mysqli,$sql_lietke_product_car);

    
?>


<div class="main-content-wrap">
    <div class="container">
        <div class="rows">
            <div class="row-detail-product">
                <div class="row-detail-product-header">
                    <div class="detail-product-header">
                        <h1 class="entry-title">
                            Mercedes giá lăn bánh, đánh giá xe, khuyến mãi
                        </h1>
                    </div>
                    <form method="POST" action="" enctype="multipart/form-data">
                        <?php
                            $i = 0;
                            while($row = mysqli_fetch_array($query_lietke_product_car)) 
                            {
                                $i++;
                        ?>
                            <div class="form-group padding">
                                <div class="Name-Product-Car">
                                    <label for="exampleInputId">Id</label>
                                    <input type="text" class="form-control" id="exampleInputId" name="Id" placeholder="Id" value="<?php echo $row['idchitietsanpham'] ?>">
                                </div>
                            </div>

                            <div class="form-group padding">
                                <div class="Name-Product-Car">
                                    <label for="exampleInputNameCar1">Tên Xe</label>
                                    <input type="text" class="form-control" id="exampleInputNameCar1" name="TenXe" placeholder="Tên Xe" value="<?php echo $row['TenXe'] ?>">
                                </div>
                            </div>
                        
                            <div class="form-group padding">
                                <div class="Name-Product-Car">
                                    <label for="exampleInputLoaiCar1">Loại Xe</label>
                                    <input type="text" class="form-control" id="exampleInputLoaiCar1" name="LoaiXe" placeholder="Loại Xe" 
                                    value="<?php
                                        echo $row['tenloaixe'];
                                    ?>">
                                </div>
                            </div>
                            
                            <div class="detail-product-content">
                                <div class="form-group padding">
                                    <div class="Name-Product-Car">
                                        <label for="exampleInputDetail1">Dòng Giới Thiệu 1</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetail1" placeholder="Dòng Giới Thiệu 1" name="Dong-GIoi-Thieu1"><?php echo $row['DongGioiThieu1'] ?></textarea>
                                    </div>
                                </div>
                                <p>
                                    <div>
                                        <img loading="lazy" id="imagePreview" class="detail-product-content-img" src="Uploads/<?php echo $row['HinhAnh1'] ?>" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                    </div>
                                </p>
                                <div class="form-group padding">
                                    <p class="detail-product-content-p">
                                        <span style="font-weight: 400;">
                                        <label for="exampleInputDetail1">Dòng Giới Thiệu 2</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetail1"
                                            placeholder="Dòng Giới Thiệu 2" name="Dong-GioiThieu-2"><?php echo $row['DongGioiTHieu2'] ?></textarea>
                                    </span>
                                    </p>
                                </div>
                                <div class="form-group padding">
                                    <h2 id="ThongSo-KyThuat" class="detail-product-content-h2">
                                        <b>Thông Số Kỹ Thuật</b>
                                    </h2>
                                    <table class="detail-product-content-table" border="1" cellpadding="1">
                                        <tbody>
                                        
                                            <tr>
                                                <td><label for="exampleInputSoChoNgoi">Số Chỗ Ngồi</label></td>
                                                <td><input type="number" class="form-control" id="exampleInputSoChoNgoi" placeholder="Số Chỗ Ngồi" name="So-Cho-Ngoi" value="<?php echo $row['SoChoNgoi'] ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputKieuXe">Kiểu Xe</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputKieuXe" placeholder="Kiểu Xe" name="Kieu-Xe" value="<?php echo $row['KieuXe'] ?>"></td>

                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputXuatXu">Xuất Xứ</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputXuatXu" placeholder="Xuất Xứ" name="Xuat-Xu" 
                                                value="<?php if($row['XuatXu']==1){
                                                    echo 'Nhập Khẩu';
                                                }else{
                                                    echo 'Trong Nước';
                                                } ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputKichThuocDRC">Kích thước DxRxC</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputKichThuocDRC" name="KichThuoc-DRC" placeholder="Kích thước DxRxC" value="<?php echo $row['KichThuoc'] ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputChieuDai">Chiều Dài Cơ Sở</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputChieuDai" name="Chieu-Dai-Co-So" placeholder="Chiều Dài Cơ Sở" value="<?php echo $row['ChieuDaiCoSo'] ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputDongCo">Động Cơ</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputDongCo" name="Dong-Co" placeholder="Động Cơ" value="<?php echo $row['DongCo'] ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputDungTichCongTac">Dung Tích Công Tác</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputDungTichCongTac" name="Dung-Tich-Cong-Tac" placeholder="Dung Tích Công Tác" value="<?php echo $row['DungTichCongTac'] ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputDungTichBinhNhienLieu">Dung Tích Bình Nhiên
                                                    Liệu</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputDungTichBinhNhienLieu" name="Dung-Tich-Binh-Nhien-Lieu" placeholder="Dung Tích Bình Nhiên Liệu" value="<?php echo $row['DungTichBinhNhienLieu'] ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputLoaiNhienLieu">Loại Nhiên Liệu</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputLoaiNhienLieu" name="Loai-Nhien-Lieu" placeholder="Loại Nhiên Liệu" value="<?php echo $row['LoaiNhienLieu'] ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputCongSuatCucDai">Công Suất Cực Đại</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputCongSuatCucDai" name="Cong-Suat-Cuc-Dai" placeholder="Công Suất Cực Đại" value="<?php echo $row['CongSuatCucDai'] ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputMomenXoan">Mô-men Xoắn Cực Đại</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputMomenXoan" name="Momen-Cuc-Dai" placeholder="Mô-men Xoắn Cực Đại" value="<?php echo $row['Momen'] ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputHopSo">Hộp Số</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputHopSo" name="Hop-So" placeholder="Hộp Số" value="<?php echo $row['HopSo'] ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputHeDanDong">Hệ Dẫn Động</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputHeDanDong" name="He-Dan-Dong" placeholder="Hệ Dẫn Động" value="<?php echo $row['HeDanDong'] ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputHeThongTreo">Hệ Thống Treo</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputHeThongTreo" name="He-Thong-Treo" placeholder="Hệ Thống Treo" value="<?php echo $row['HeThongTreo'] ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputTayLaiTroLuc">Tay Lái Trợ Lực</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputTayLaiTroLuc" name="Tay-Lai-Tro-Luc" placeholder="Tay Lái Trợ Lực" 
                                                value="<?php if($row['TayLaiTroLuc'] == 1){
                                                    echo 'Điện';
                                                }else{
                                                    echo 'Cơ';
                                                } ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputCoMam">Cỡ Mâm</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputCoMam" name="Co-Mam" placeholder="Cỡ Mâm" value="<?php echo $row['CoMam'] ?>"></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="form-group padding">
                                    <h2 id="Gia-Ban" class="detail-product-content-h2">
                                        <b>Giá Bán</b>
                                    </h2>
                                    <table class="detail-product-content-table" border="1" cellpadding="1">
                                        <tbody>
                                            <tr>
                                                <td><label for="exampleInputGiaNiemYet">Giá Niêm Yết</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputGiaNiemYet" name="Gia-Niem-Yet" placeholder="Giá Niêm Yết" value="<?php echo $row['GiaXeNiemYet']?> VNĐ"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputGiaHCM">Giá HCM</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputGiaHCM" name="Gia-HCM" placeholder="Giá HCM" value="<?php echo $row['GiaHCM'] ?> VNĐ"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputGiaHaNoi">Giá Hà Nội</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputGiaHaNoi" name="Gia-HN" placeholder="Giá Hà Nội" value="<?php echo $row['GiaHN'] ?> VNĐ"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputGiaTinhKhac">Giá Các Tỉnh Khác</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputGiaTinhKhac" name="Gia-Tinh-Khac" placeholder="Giá Tỉnh Khác" value="<?php echo $row['GiaTinhKhac'] ?> VNĐ"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <h2 id="Mau-Sac" class="detail-product-content-h2">
                                    <b>Màu Sắc</b>
                                </h2>
                                <p>
                                    <div>
                                        <img loading="lazy" id="imagePreview1" class="detail-product-content-img" src="Uploads/<?php echo $row['MauSac1'] ?>" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                    </div>
                                </p>
                                <p class="detail-product-content-Note"></p>
                                <p>
                                    <div>
                                        <img loading="lazy" id="imagePreview2" class="detail-product-content-img" src="Uploads/<?php echo $row['MauSac2'] ?>" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                    </div>
                                </p>
                                <p class="detail-product-content-Note"></p>
                                <p>
                                    <div>
                                        <img loading="lazy" id="imagePreview3" class="detail-product-content-img" src="Uploads/<?php echo $row['MauSac3'] ?>" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                    </div>
                                    
                                </p>
                                <p class="detail-product-content-Note"></p>
                                <h2 id="Dien-Mao" class="detail-product-content-h2">
                                    <b>Diện Mạo Hiện Đại Và Thể Thao Hơn</b>
                                </h2>
                                <div class="form-group padding">
                                    <p class="detail-product-content-p">
                                        <span style="font-weight: 400;">
                                        <label for="exampleInputDetailDienMao1">Dòng Giới Thiệu Diện Mạo 1</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailDienMao1"
                                            placeholder="Dòng Giới Thiệu Diện Mạo 1" name="Gioi-THieu-DienMao-1" value="<?php echo $row['DongDienMao1'] ?>"></textarea>
                                    </span>
                                    </p>
                                </div>
                                <div class="form-group padding">
                                    <p class="detail-product-content-p">
                                        <span style="font-weight: 400;">
                                        <label for="exampleInputDetailDienMao2">Dòng Giới Thiệu Diện Mạo 2</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailDienMao2"
                                            placeholder="Dòng Giới Thiệu Diện Mạo 2" name="Gioi-THieu-DienMao-2"><?php echo $row['DongDienMao2'] ?></textarea>
                                    </span>
                                    </p>
                                </div>
                                <h4 class="Detalt-Car-title">
                                    Đầu Xe
                                </h4>
                                <p>
                                    <div>
                                        <img loading="lazy" id="imagePreview4" class="detail-product-content-img" src="Uploads/<?php echo $row['AnhDauXe1'] ?>" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                    </div>
                                    
                                </p>
                                <p class="detail-product-content-Note"></p>
                                <div class="form-group padding">
                                    <p class="detail-product-content-p">
                                        <span style="font-weight: 400;">
                                        <label for="exampleInputDetailDienMaoDauXe1">Dòng Giới Thiệu Diện Mạo Đầu Xe
                                            1</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailDienMaoDauXe1"
                                            placeholder="Dòng Giới Thiệu Đầu Xe 1" name="Gioi-THieu-DauXe-1"><?php echo $row['DongGioiThieuDauXe1'] ?></textarea>
                                    </span>
                                    </p>
                                </div>
                                <div class="form-group padding">
                                    <p class="detail-product-content-p">
                                        <span style="font-weight: 400;">
                                        <label for="exampleInputDetailDienMaoDauXe2">Dòng Giới Thiệu Diện Mạo Đầu Xe
                                            2</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailDienMaoDauXe2"
                                            placeholder="Dòng Giới Thiệu Đầu Xe 2" name="Gioi-THieu-DauXe-2"><?php echo $row['DongGioiThieuDauXe2'] ?></textarea>
                                    </span>
                                    </p>
                                </div>
                                <p>
                                    <div>
                                        <img loading="lazy" id="imagePreview5" class="detail-product-content-img" src="Uploads/<?php echo $row['AnhDauXe2'] ?>" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                    </div>
                                    
                                </p>
                                <p class="detail-product-content-Note"></p>
                                <div class="form-group padding">
                                    <p class="detail-product-content-p">
                                        <span style="font-weight: 400;">
                                        <label for="exampleInputDetailTanNhiet1">Dòng Giới Thiệu Tản Nhiệt 1</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailTanNhiet1"
                                            placeholder="Dòng Giới Thiệu Tản Nhiệt 1" name="Gioi-THieu-TanNhiet-1"><?php echo $row['DongGioiThieuTanNhiet1'] ?></textarea>
                                    </span>
                                    </p>
                                </div>
                                <div class="form-group padding">
                                    <p class="detail-product-content-p">
                                        <span style="font-weight: 400;">
                                        <label for="exampleInputDetailTanNhiet2">Dòng Giới Thiệu Tản Nhiệt 2</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailTanNhiet2"
                                            placeholder="Dòng Giới Thiệu Tản Nhiệt 2" name="Gioi-THieu-TanNhiet-2"><?php echo $row['DongGioiThieuTanNhiet2'] ?></textarea>
                                    </span>
                                    </p>
                                </div>
                                <h4 class="Detalt-Car-title">
                                    Thân Xe
                                </h4>
                                <p>
                                    <div>
                                        <img loading="lazy" id="imagePreview6" class="detail-product-content-img" src="Uploads/<?php echo $row['AnhThanXe1'] ?>" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                    </div>
                                    
                                </p>
                                <p class="detail-product-content-Note"></p>
                                <div class="form-group padding">
                                    <p class="detail-product-content-p">
                                        <span style="font-weight: 400;">
                                        <label for="exampleInputDetailThanXe1">Dòng Giới Thiệu Thân Xe 1</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailThanXe1"
                                            placeholder="Dòng Giới Thiệu Thân Xe 1" name="Gioi-THieu-ThanXe-1"><?php echo $row['DongGioiThieuThanXe1'] ?></textarea>
                                    </span>
                                    </p>
                                </div>
                                <p>
                                    <div>
                                        <img loading="lazy" id="imagePreview7" class="detail-product-content-img" src="Uploads/<?php echo $row['AnhThanXe2'] ?>" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                    </div>
                                    
                                </p>
                                <p class="detail-product-content-Note"></p>
                                <div class="form-group padding">
                                    <p class="detail-product-content-p">
                                        <span style="font-weight: 400;">
                                        <label for="exampleInputDetailThanDuoi">Dòng Giới Thiệu Thân Dưới</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailThanDuoi"
                                            placeholder="Dòng Giới Thiệu Thân Dưới" name="Gioi-THieu-ThanDuoi-1"><?php echo $row['DongGioiThieuThanDuoi1'] ?></textarea>
                                    </span>
                                    </p>
                                </div>
                                <h4 class="Detalt-Car-title">
                                    Đuôi Xe
                                </h4>
                                <p>
                                    <div>
                                        <img loading="lazy" id="imagePreview8" class="detail-product-content-img" src="Uploads/<?php echo $row['AnhDuoiXe'] ?>" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                    </div>
                                    
                                </p>
                                <p class="detail-product-content-Note"></p>
                                <div class="form-group padding">
                                    <p class="detail-product-content-p">
                                        <span style="font-weight: 400;">
                                        <label for="exampleInputDetailDuoiXe1">Dòng Giới Thiệu Đuôi Xe 1</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailDuoiXe1"
                                            placeholder="Dòng Giới Thiệu Đuôi Xe 1" name="Gioi-THieu-DuoiXe-1"><?php echo $row['DongGioiThieuDuoiXe1'] ?></textarea>
                                    </span>
                                    </p>
                                </div>
                                <div class="form-group padding">
                                    <p class="detail-product-content-p">
                                        <span style="font-weight: 400;">
                                        <label for="exampleInputDetailDuoiXe2">Dòng Giới Thiệu Đuôi Xe 2</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailDuoiXe2"
                                            placeholder="Dòng Giới Thiệu Đuôi Xe 2" name="Gioi-THieu-DuoiXe-2"><?php echo $row['DongGioiThieuDuoiXe2'] ?></textarea>
                                    </span>
                                    </p>
                                </div>
                                <h4 class="Detalt-Car-title">
                                    Nội Thất Rộng Rải, Sang Trọng
                                </h4>
                                <div class="form-group padding">
                                    <p class="detail-product-content-p">
                                        <span style="font-weight: 400;">
                                        <label for="exampleInputDetailNoiThat1">Dòng Giới Thiệu Nội Thất 1</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailNoiThat1"
                                            placeholder="Dòng Giới Thiệu Nội Thất 1" name="Gioi-THieu-NoiThat-1"><?php echo $row['DongGioiThieuNoiThat1'] ?></textarea>
                                    </span>
                                    </p>
                                </div>
                                <div class="form-group padding">
                                    <p class="detail-product-content-p">
                                        <span style="font-weight: 400;">
                                        <label for="exampleInputDetailNoiThat2">Dòng Giới Thiệu Nội Thất 2</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailNoiThat2"
                                            placeholder="Dòng Giới Thiệu Nội Thất 2" name="Gioi-THieu-NoiThat-2"><?php echo $row['DongGioiThieuNoiThat2'] ?></textarea>
                                    </span>
                                    </p>
                                </div>
                                <div class="form-group padding">
                                    <p class="detail-product-content-p">
                                        <span style="font-weight: 400;">
                                        <label for="exampleInputDetailNoiThat3">Dòng Giới Thiệu Nội Thất 3</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailNoiThat3"
                                            placeholder="Dòng Giới Thiệu Nội Thất 3" name="Gioi-THieu-NoiThat-3"><?php echo $row['DongGioiThieuNoiThat3'] ?></textarea>
                                    </span>
                                    </p>
                                </div>
                                <h4 class="Detalt-Car-title">
                                    Khoang Lái
                                </h4>
                                <p>
                                    <div>
                                        <img loading="lazy" id="imagePreview9" class="detail-product-content-img" src="Uploads/<?php echo $row['AnhKhoangLai1'] ?>" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                    </div>
                                    
                                </p>
                                <p class="detail-product-content-Note"></p>
                                <div class="form-group padding">
                                    <p class="detail-product-content-p">
                                        <span style="font-weight: 400;">
                                        <label for="exampleInputDetailKhoangLai">Dòng Giới Thiệu Khoang Lái</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailKhoangLai"
                                            placeholder="Dòng Giới Thiệu Khoang Lái" name="Gioi-THieu-KhoangLai"><?php echo $row['DongGioiThieuKhoangLai'] ?></textarea>
                                    </span>
                                    </p>
                                </div>
                                <p>
                                    <div>
                                        <img loading="lazy" id="imagePreview10" class="detail-product-content-img" src="Uploads/<?php echo $row['AnhGheTruoc'] ?>" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                    </div>
                                    
                                </p>
                                <p class="detail-product-content-Note"></p>
                                <div class="form-group padding">
                                    <p class="detail-product-content-p">
                                        <span style="font-weight: 400;">
                                        <label for="exampleInputDetailHangGheTruoc">Dòng Giới Thiệu Hàng Ghế
                                            Trước</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailHangGheTruoc"
                                            placeholder="Dòng Giới Thiệu Hàng Ghế Trước" name="Gioi-THieu-HangGheTruoc"> <?php echo $row['DongGioiThieuHangGheTruoc'] ?></textarea>
                                    </span>
                                    </p>
                                </div>
                                <h4 class="Detalt-Car-title">
                                    Khoang Hành Khách
                                </h4>
                                <p>
                                    <div>
                                        <img loading="lazy" id="imagePreview11" class="detail-product-content-img" src="Uploads/<?php echo $row['AnhKhoangHanhKhach'] ?>" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                    </div>
                                    
                                </p>
                                <p class="detail-product-content-Note"></p>
                                <div class="form-group padding">
                                    <p class="detail-product-content-p">
                                        <span style="font-weight: 400;">
                                        <label for="exampleInputDetailKhoangHanhKhach1">Dòng Giới Thiệu Khoang Hành
                                            Khách 1</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control"
                                            id="exampleInputDetailKhoangHanhKhach1"
                                            placeholder="Dòng Giới Thiệu Khoang Hành Khách 1" name="Gioi-THieu-KhoangHanhKhach-1"><?php echo $row['DongGioiThieuKhoangHanhKhach1'] ?></textarea>
                                    </span>
                                    </p>
                                </div>
                                <div class="form-group padding">
                                    <p class="detail-product-content-p">
                                        <span style="font-weight: 400;">
                                        <label for="exampleInputDetailKhoangHanhKhach2">Dòng Giới Thiệu Khoang Hành
                                            Khách 2</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control"
                                            id="exampleInputDetailKhoangHanhKhach2"
                                            placeholder="Dòng Giới Thiệu Khoang Hành Khách 2" name="Gioi-THieu-KhoangHanhKhach-2"><?php echo $row['DongGioiThieuKhoangHanhKhach2'] ?></textarea>
                                    </span>
                                    </p>
                                </div>
                                <h4 class="Detalt-Car-title">
                                    Khoang Hành Lý
                                </h4>
                                <p>
                                    <div>
                                        <img loading="lazy" id="imagePreview12" class="detail-product-content-img" src="Uploads/<?php echo $row['AnhKhoangHanhLy'] ?>" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                    </div>
                                    
                                </p>
                                <p class="detail-product-content-Note"></p>
                                <div class="form-group padding">
                                    <p class="detail-product-content-p">
                                        <span style="font-weight: 400;">
                                        <label for="exampleInputDetailKhoangHanhLy1">Dòng Giới Thiệu Khoang Hành Lý
                                            1</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailKhoangHanhLy1"
                                            placeholder="Dòng Giới Thiệu Khoang Hành Lý 1" name="Gioi-THieu-HanhLy-1"><?php echo $row['DongGioiThieuKhoangHanhLy1'] ?></textarea>
                                    </span>
                                    </p>
                                </div>
                                <div class="form-group padding">
                                    <p class="detail-product-content-p">
                                        <span style="font-weight: 400;">
                                        <label for="exampleInputDetailKhoangHanhLy2">Dòng Giới Thiệu Khoang Hành Lý
                                            2</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailKhoangHanhLy2"
                                            placeholder="Dòng Giới Thiệu Khoang Hành Lý 2" name="Gioi-THieu-HanhLy-2"><?php echo $row['DongGioiThieuKhoangHanhLy2'] ?></textarea>
                                    </span>
                                    </p>
                                </div>
                                <h4 class="Detalt-Car-title">
                                    Tiện Nghi Bậc Nhất Phân Khúc
                                </h4>
                                <div class="form-group padding">
                                    <p class="detail-product-content-p">
                                        <span style="font-weight: 400;">
                                        <label for="exampleInputDetailTienNghi">Dòng Giới Thiệu Tiện Nghi</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailTienNghi"
                                            placeholder="Dòng Giới Thiệu Tiện Nghi" name="Gioi-THieu-TienNghi"><?php echo $row['DongGioiThieuTienNghi'] ?></textarea>
                                    </span>
                                    </p>
                                </div>
                                <p>
                                    <div>
                                        <img loading="lazy" id="imagePreview13" class="detail-product-content-img" src="Uploads/<?php echo $row['AnhTienNghi'] ?>" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                    </div>
                                    
                                </p>
                                <p class="detail-product-content-Note"></p>
                                <div class="form-group padding">
                                    <p class="detail-product-content-p">
                                        <span style="font-weight: 400;">
                                        <label for="exampleInputDetailCongNghe1">Dòng Giới Thiệu Công Nghệ 1</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailCongNghe1"
                                            placeholder="Dòng Giới Thiệu Công Nghệ 1" name="Gioi-THieu-CongNghe-1"><?php echo $row['DongGioiThieuCongNghe1'] ?></textarea>
                                    </span>
                                    </p>
                                </div>
                                <div class="form-group padding">
                                    <p class="detail-product-content-p">
                                        <span style="font-weight: 400;">
                                        <label for="exampleInputDetailCongNghe2">Dòng Giới Thiệu Công Nghệ 2</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailCongNghe2"
                                            placeholder="Dòng Giới Thiệu Công Nghệ 2" name="Gioi-THieu-CongNghe-2"><?php echo $row['DongGioiThieuCongNghe2'] ?></textarea>
                                    </span>
                                    </p>
                                </div>
                                <h4 class="Detalt-Car-title">
                                    Động Cơ Và Hộp Số
                                </h4>
                                <p>
                                    <div>
                                        <img loading="lazy" id="imagePreview14" class="detail-product-content-img" src="Uploads/<?php echo $row['AnhDongCo'] ?>" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                    </div>
                                    
                                </p>
                                <p class="detail-product-content-Note"></p>
                                <div class="form-group padding">
                                    <p class="detail-product-content-p">
                                        <span style="font-weight: 400;">
                                        <label for="exampleInputDetailDongCo1">Dòng Giới Thiệu Động CƠ 1</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailDongCo1"
                                            placeholder="Dòng Giới Thiệu Động Cơ 1" name="Gioi-THieu-DongCo-1"><?php echo $row['DongGioiThieuDongCo1'] ?></textarea>
                                    </span>
                                    </p>
                                </div>
                                <div class="form-group padding">
                                    <p class="detail-product-content-p">
                                        <span style="font-weight: 400;">
                                        <label for="exampleInputDetailDongCo2">Dòng Giới Thiệu Động CƠ 2</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailDongCo2"
                                            placeholder="Dòng Giới Thiệu Động Cơ 2" name="Gioi-THieu-DongCo-2"><?php echo $row['DongGioiThieuDongCo2'] ?></textarea>
                                    </span>
                                    </p>
                                </div>
                                <h4 class="Detalt-Car-title">
                                    Vận Hành Mạnh Mẽ, Êm Ái
                                </h4>
                                <p>
                                    <div>
                                        <img loading="lazy" id="imagePreview15" class="detail-product-content-img" src="Uploads/<?php echo $row['AnhVanHanh'] ?>" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                    </div>
                                    
                                </p>
                                <p class="detail-product-content-Note"></p>
                                <div class="form-group padding">
                                    <p class="detail-product-content-p">
                                        <span style="font-weight: 400;">
                                        <label for="exampleInputDetailVanHanh1">Dòng Giới Thiệu Vận Hành 1</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailVanHanh1"
                                            placeholder="Dòng Giới Thiệu Vận Hành 1" name="Gioi-THieu-VanHanh-1"><?php echo $row['DongGioiThieuVanHanh1'] ?></textarea>
                                    </span>
                                    </p>
                                </div>
                                <div class="form-group padding">
                                    <p class="detail-product-content-p">
                                        <span style="font-weight: 400;">
                                        <label for="exampleInputDetailVanHanh2">Dòng Giới Thiệu Vận Hành 2</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailVanHanh2"
                                            placeholder="Dòng Giới Thiệu Vận Hành 2" name="Gioi-THieu-VanHanh-2"><?php echo $row['DongGioiThieuVanHanh2'] ?></textarea>
                                    </span>
                                    </p>
                                </div>
                                <div class="form-group padding">
                                    <p class="detail-product-content-p">
                                        <span style="font-weight: 400;">
                                        <label for="exampleInputDetailVanHanh3">Dòng Giới Thiệu Vận Hành 3</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailVanHanh3"
                                            placeholder="Dòng Giới Thiệu Vận Hành 3" name="Gioi-THieu-VanHanh-3"><?php echo $row['DongGioiThieuVanHanh3'] ?></textarea>
                                    </span>
                                    </p>
                                </div>
                                <h4 class="Detalt-Car-title">
                                    An Toàn Đầy Đủ Tiện Nghi, Hiện Đại, Thông Minh
                                </h4>
                                <div class="form-group padding">
                                    <p class="detail-product-content-p">
                                        <span style="font-weight: 400;">
                                        <label for="exampleInputDetailAnToan">Dòng Giới Thiệu An Toàn</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailAnToan"
                                            placeholder="Dòng Giới Thiệu An Toàn" name="AnToan"><?php echo $row['DongAnhToan'] ?></textarea>
                                    </span>
                                    </p>
                                </div>
                                <div class="form-group padding">
                                    <h2 id="ThongSo-KyThuat" class="detail-product-content-h2">
                                        <b>Tiêu Chuẩn An Toàn</b>
                                    </h2>

                                    <table class="detail-product-content-table" border="1" cellpadding="1">
                                        <tbody>
                                            <tr>
                                                <td><label for="exampleInputTieuChuan1">Tiêu Chuẩn 1</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputTieuChuan1" placeholder="Tiêu Chuẩn 1" name="TieuChuan-1" value="<?php echo $row['TieuChuan1'] ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputTieuChuan2">Tiêu Chuẩn 2</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputTieuChuan2" placeholder="Tiêu Chuẩn 2" name="TieuChuan-2" value="<?php echo $row['TieuChuan2'] ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputTieuChuan3">Tiêu Chuẩn 3</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputTieuChuan3" placeholder="Tiêu Chuẩn 3" name="TieuChuan-3" value="<?php echo $row['TieuChuan3'] ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputTieuChuan4">Tiêu Chuẩn 4</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputTieuChuan4" placeholder="Tiêu Chuẩn 4" name="TieuChuan-4" value="<?php echo $row['TieuChuan4'] ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputTieuChuan5">Tiêu Chuẩn 5</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputTieuChuan5" placeholder="Tiêu Chuẩn 5" name="TieuChuan-5" value="<?php echo $row['TieuChuan5'] ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputTieuChuan6">Tiêu Chuẩn 6</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputTieuChuan6" placeholder="Tiêu Chuẩn 6" name="TieuChuan-6" value="<?php echo $row['TieuChuan6'] ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputTieuChuan7">Tiêu Chuẩn 7</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputTieuChuan7" placeholder="Tiêu Chuẩn 7" name="TieuChuan-7" value="<?php echo $row['TieuChuan7'] ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputTieuChuan8">Tiêu Chuẩn 8</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputTieuChuan8" placeholder="Tiêu Chuẩn 8" name="TieuChuan-8" value="<?php echo $row['TieuChuan8'] ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputTieuChuan9">Tiêu Chuẩn 9</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputTieuChuan9" placeholder="Tiêu Chuẩn 9" name="TieuChuan-9" value="<?php echo $row['TieuChuan9'] ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputTieuChuan10">Tiêu Chuẩn 10</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputTieuChuan10" placeholder="Tiêu Chuẩn 10" name="TieuChuan-10" value="<?php echo $row['TieuChuan10'] ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputTieuChuan11">Tiêu Chuẩn 11</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputTieuChuan11" placeholder="Tiêu Chuẩn 11" name="TieuChuan-11" value="<?php echo $row['TieuChuan11'] ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputTieuChuan12">Tiêu Chuẩn 12</label></td>
                                                <td><input type="text" class="form-control" id="exampleInputTieuChuan12" placeholder="Tiêu Chuẩn 12" name="TieuChuan-12" value="<?php echo $row['TieuChuan12'] ?>"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="footer-laithu">
                                <div class="button-laithu">
                                    <a href="XuLyXoaChiTietXe.php?idchitietsanpham=<?php echo $row['idchitietsanpham'] ?>" class="button-laithu-link" name="SuaCTXe"><i class="bi bi-trash">Xóa Chi Tiết Xe</i></a>
                                </div>
                            </div>
                        <?php
                            }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>