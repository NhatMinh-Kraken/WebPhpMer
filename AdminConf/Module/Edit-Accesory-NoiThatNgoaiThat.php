<?php
    include('config.php');

    $sql_Sua_PhuKien = "SELECT * FROM chitietphukiennoithatngoaithat WHere idchitietsanphamnoithatngoaithat='$_GET[idaccesory]' LIMIT 1"; 
    $query_sua_PhuKien = mysqli_query($mysqli,$sql_Sua_PhuKien);
    
?>


<div class="main-content-wrap">
    <div class="container">
        <div class="rows">
            <div class="row-detail-product">
                <div class="row-detail-product-header">
                    <div class="detail-product-header">
                        <h1 class="entry-title">
                            Phụ Kiện Body Mercesde-Benz, Chất Lượng, Uy Tín Đặt Lên Hàng Đầu
                        </h1>
                    </div>
                    <form method="POST" action="XuLySuaPhuKien.php?idaccesory=<?php echo $_GET['idaccesory'] ?>" enctype="multipart/form-data">
                        <?php
                            while($row = mysqli_fetch_array($query_sua_PhuKien))
                            {
                        ?>
                        <div class="form-group padding">
                            <div class="Name-Product-Car">
                                <label for="exampleInputNameCar1">Tên Phụ Kiện</label>
                                <input type="text" class="form-control" id="exampleInputNameCar1" name="TenPhuKienNoiThatNgoaiThat"
                                    placeholder="Tên Phụ Kiện" value="<?php echo $row['TenPhuKienNoiThatNgoaiThat'] ?>">
                            </div>
                        </div>

                        <div class="form-group padding">
                            <div class="Name-Product-Car">
                                <label for="exampleInputNameCar1">Loại Phụ Kiện</label>
                                <select id="loaiphukien" name="loaiphukienNoiThatNgoaiThat" class="form-control">
                                    <option value="">Chọn Loại Phụ Kiện</option>
                                    <?php
                                        include('config.php');
                                        $sql = "SELECT IdLoaiPhuKienNoiThatNgoaiThat, TenLoaiPhuKienNoiThatNgoaiThat FROM loaiphukiennoithatngoaithat"; 
                                        $ktloaixe = mysqli_query($mysqli,$sql);
                                        $num = mysqli_num_rows($ktloaixe);
                                        if($num > 0){
                                            while($row1 = mysqli_fetch_array($ktloaixe))
                                            {   
                                    ?>
                                    <option value="<?php echo $row1['IdLoaiPhuKienNoiThatNgoaiThat'] ?>">
                                        <?php echo $row1['TenLoaiPhuKienNoiThatNgoaiThat'] ?></option>
                                    <?php
                                            }
                                        }
                                    ?>
                                </select>

                            </div>
                        </div>

                        <div class="detail-product-content">

                            <h2 id="AnhPhuKien" class="detail-product-content-h2">
                                <b>Ảnh Chi Tiết Phụ Kiện</b>
                            </h2>

                            <p>
                            <div>
                                <img loading="lazy" id="imagePreview" class="detail-product-content-img"
                                    src="Uploads/<?php echo $row['AnhPhuKienNoiThatNgoaiThat1'] ?>" title="Ảnh Xem Trước" width="640"
                                    height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                            </div>
                            <div class="padding imageUpload">
                                <input type="file" id="ImageUploadInputt" accept=".jpg,.png" name="AnhPhuKienNoiThatNgoaiThat1">
                                <div class="input-group col-xs-12">
                                    <span class="form-control file-upload-info" id="fileInfomation_name" disabled
                                        placeholder="Upload Image">Upload Image</span>
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" id="imageUploadInputBtn"
                                            type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <div id="uploadFileStatus"></div>
                            </p>
                            <p class="detail-product-content-Note">

                            </p>

                            <p>
                            <div>
                                <img loading="lazy" id="imagePreview1" class="detail-product-content-img"
                                    src="Uploads/<?php echo $row['AnhPhuKienNoiThatNgoaiThat2'] ?>" title="Ảnh Xem Trước" width="640" height="auto"
                                    sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                            </div>
                            <div class="padding imageUpload1">
                                <input type="file" id="ImageUploadInputt1" accept=".jpg,.png" name="AnhPhuKienNoiThatNgoaiThat2">
                                <div class="input-group col-xs-12">
                                    <span class="form-control file-upload-info" id="fileInfomation_name1" disabled
                                        placeholder="Upload Image">Upload Image</span>
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" id="imageUploadInputBtn1"
                                            type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <div id="uploadFileStatus1"></div>
                            </p>
                            <p class="detail-product-content-Note">

                            </p>
                            <p>
                            <div>
                                <img loading="lazy" id="imagePreview2" class="detail-product-content-img"
                                    src="Uploads/<?php echo $row['AnhPhuKienNoiThatNgoaiThat3'] ?>" title="Ảnh Xem Trước" width="640" height="auto"
                                    sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                            </div>
                            <div class="padding imageUpload2">
                                <input type="file" id="ImageUploadInputt2" accept=".jpg,.png" name="AnhPhuKienNoiThatNgoaiThat3">
                                <div class="input-group col-xs-12">
                                    <span class="form-control file-upload-info" id="fileInfomation_name2" disabled
                                        placeholder="Upload Image">Upload Image</span>
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" id="imageUploadInputBtn2"
                                            type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <div id="uploadFileStatus2"></div>
                            </p>
                            <p class="detail-product-content-Note">

                            </p>
                            <p>
                            <div>
                                <img loading="lazy" id="imagePreview3" class="detail-product-content-img"
                                    src="Uploads/<?php echo $row['AnhPhuKienNoiThatNgoaiThat4'] ?>" title="Ảnh Xem Trước" width="640" height="auto"
                                    sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                            </div>
                            <div class="padding imageUpload3">
                                <input type="file" id="ImageUploadInputt3" accept=".jpg,.png" name="AnhPhuKienNoiThatNgoaiThat4">
                                <div class="input-group col-xs-12">
                                    <span class="form-control file-upload-info" id="fileInfomation_name3" disabled
                                        placeholder="Upload Image">Upload Image</span>
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" id="imageUploadInputBtn3"
                                            type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <div id="uploadFileStatus3"></div>
                            </p>
                            <p class="detail-product-content-Note">

                            </p>

                            <p>
                            <div>
                                <img loading="lazy" id="imagePreview4" class="detail-product-content-img"
                                    src="Uploads/<?php echo $row['AnhPhuKienNoiThatNgoaiThat5'] ?>" title="Ảnh Xem Trước" width="640" height="auto"
                                    sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                            </div>
                            <div class="padding imageUpload4">
                                <input type="file" id="ImageUploadInputt4" accept=".jpg,.png" name="AnhPhuKienNoiThatNgoaiThat5">
                                <div class="input-group col-xs-12">
                                    <span class="form-control file-upload-info" id="fileInfomation_name4" disabled
                                        placeholder="Upload Image">Upload Image</span>
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" id="imageUploadInputBtn4"
                                            type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <div id="uploadFileStatus4"></div>
                            </p>
                            <p class="detail-product-content-Note">

                            </p>


                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailXuatXu">Xuất Xứ:
                                        </label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailXuatXu"
                                            placeholder="Xuất Xứ Sản Phẩm" name="XuatXuNoiThatNgoaiThat"><?php echo $row['XuatXuNoiThatNgoaiThat'] ?></textarea>
                                    </span>
                                </p>
                            </div>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailChatLuong">Chất Lượng Sản Phẩm:
                                        </label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailChatLuong"
                                            placeholder="Chất Lượng Sản Phẩm" name="ChatLuongNoiThatNgoaiThat"><?php echo $row['ChatLieuNoiThatNgoaiThat'] ?></textarea>
                                    </span>
                                </p>
                            </div>

                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailBoPhuKien">Bộ Phụ Kiện Đầy Đủ Gồm: </label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailBoPhuKien"
                                            placeholder="Bộ Phụ Kiện Đầy Đủ Gồm:" name="BoPhuKienNoiThatNgoaiThat"><?php echo $row['BoDayDuNoiThatNgoaiThat'] ?></textarea>
                                    </span>
                                </p>
                            </div>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailPhuKien1">Dòng Giới Thiệu Phụ Kiện 1</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailPhuKien1"
                                            placeholder="Dòng Giới Thiệu Phụ Kiện 1"
                                            name="Gioi-THieu-PhuKien-NoiThatNgoaiThat-1"><?php echo $row['DongGioiThieuPhuKienNoiThatNgoaiThat1'] ?></textarea>
                                    </span>
                                </p>
                            </div>

                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailPhuKien2">Dòng Giới Thiệu Phụ Kiện 2</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailPhuKien2"
                                            placeholder="Dòng Giới Thiệu Phụ Kiện 2"
                                            name="Gioi-THieu-PhuKien-NoiThatNgoaiThat-2"><?php echo $row['DongGioiThieuPhuKienNoiThatNgoaiThat2'] ?></textarea>
                                    </span>
                                </p>
                            </div>

                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailPhuKien3">Dòng Giới Thiệu Phụ Kiện 3</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailPhuKien3"
                                            placeholder="Dòng Giới Thiệu Phụ Kiện 3"
                                            name="Gioi-THieu-PhuKien-NoiThatNgoaiThat-3"><?php echo $row['DongGioiThieuPhuKienNoiThatNgoaiThat3'] ?></textarea>
                                    </span>
                                </p>
                            </div>

                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailGiaBan">Giá Bán</label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailGiaBan"
                                            placeholder="Giá Bán" name="GiaBanNoiThatNgoaiThat"><?php echo $row['GiaCaNoiThatNgoaiThat'] ?></textarea>
                                    </span>
                                </p>
                            </div>

                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailSoLuong">Số Lượng</label>
                                        <input type="number" class="form-control" id="exampleInputDetailSoLuong"
                                            placeholder="Số Lượng" name="SoLuongNoiThatNgoaiThat" value="<?php echo $row['SoLuongNoiThatNgoaiThat'] ?>">
                                    </span>
                                </p>
                            </div>

                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailTinhTrang">Tình Trạng</label>
                                        <select id="exampleInputDetailTinhTrang" name="TinhTrangNoiThatNgoaiThat" class="form-control">
                                            <option value="0">Chọn Tình Trạng</option>
                                            <option value="1">Còn Hàng</option>
                                            <option value="2">Hết Hàng</option>
                                        </select>
                                    </span>
                                </p>
                            </div>

                            <div class="footer-laithu">
                                <div class="button-laithu">
                                    <input class="button-laithu-link" type="submit" value="Sửa Phụ Kiện"
                                        name="SuaPhuKienNoiThatNgoaiThat">
                                </div>
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