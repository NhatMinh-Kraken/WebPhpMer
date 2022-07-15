<?php
    include('config.php');

    $sql_lietke_chitietphukienbv = "SELECT * FROM chitietphukienbaove, loaiphukienbaove WHere chitietphukienbaove.IdLoaiPhuKienBaoVe = loaiphukienbaove.IdLoaiPhuKienBaoVe and IdChiTietPhuKienBaoVe='$_GET[idaccesory]'";
    $query_lietke_chitietphukienbv = mysqli_query($mysqli,$sql_lietke_chitietphukienbv);

    
?>


<div class="main-content-wrap">
    <div class="container">
        <div class="rows">
            <div class="row-detail-product">
                <div class="row-detail-product-header">
                    <div class="detail-product-header">
                        <h1 class="entry-title">
                            Phụ Kiện Mercesde-Benz, Chất Lượng, Uy Tín Đặt Lên Hàng Đầu
                        </h1>
                    </div>
                    <form method="POST" action="" enctype="multipart/form-data">
                        <?php
                            $i = 0;
                            while($row = mysqli_fetch_array($query_lietke_chitietphukienbv)) 
                            {
                                $i++;
                        ?>
                        <div class="form-group padding">
                            <div class="Name-Product-Car">
                                <label for="exampleInputId">Id</label>
                                <input type="text" class="form-control" id="exampleInputId" name="Id" placeholder="Id"
                                    value="<?php echo $row['IdChiTietPhuKienBaoVe'] ?>">
                            </div>
                        </div>

                        <div class="form-group padding">
                            <div class="Name-Product-Car">
                                <label for="exampleInputNameCar1">Tên Phụ Kiện</label>
                                <input type="text" class="form-control" id="exampleInputNameCar1" name="TenPhuKien"
                                    placeholder="Tên Phụ Kiện" value="<?php echo $row['TenChiTietPhuKienBaoVe'] ?>">
                            </div>
                        </div>

                        <div class="form-group padding">
                            <div class="Name-Product-Car">
                                <label for="exampleInputLoaiCar1">Loại Phụ Kiện</label>
                                <input type="text" class="form-control" id="exampleInputLoaiCar1" name="LoaiPhuKien"
                                    placeholder="Loại Phụ Kiện" value="<?php
                                        echo $row['TenLoaiPhuKienBaoVe'];
                                    ?>">
                            </div>
                        </div>

                        <div class="detail-product-content">
                            <h2 id="TenAnh" class="detail-product-content-h2">
                                <b>Ảnh Phụ Kiện</b>
                            </h2>
                            <p>
                            <div>
                                <img loading="lazy" id="imagePreview" class="detail-product-content-img"
                                    src="Uploads/<?php echo $row['AnhPhuKienBV1'] ?>" title="Ảnh Xem Trước" width="640"
                                    height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                            </div>
                            </p>
                            <p class="detail-product-content-Note"></p>
                            
                            <p>
                            <div>
                                <img loading="lazy" id="imagePreview1" class="detail-product-content-img"
                                    src="Uploads/<?php echo $row['AnhPhuKienBV2'] ?>" title="Ảnh Xem Trước" width="640"
                                    height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                            </div>
                            </p>
                            <p class="detail-product-content-Note"></p>
                            <p>

                            <div>
                                <img loading="lazy" id="imagePreview2" class="detail-product-content-img"
                                    src="Uploads/<?php echo $row['AnhPhuKienBV3'] ?>" title="Ảnh Xem Trước" width="640"
                                    height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                            </div>
                            </p>
                            <p class="detail-product-content-Note"></p>
                            <p>
                            <div>
                                <img loading="lazy" id="imagePreview3" class="detail-product-content-img"
                                    src="Uploads/<?php echo $row['AnhPhuKienBV4'] ?>" title="Ảnh Xem Trước" width="640"
                                    height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                            </div>

                            </p>
                            <p class="detail-product-content-Note"></p>
                            
                            <p>
                            <div>
                                <img loading="lazy" id="imagePreview4" class="detail-product-content-img"
                                    src="Uploads/<?php echo $row['AnhPhuKienBV5'] ?>" title="Ảnh Xem Trước" width="640"
                                    height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                            </div>

                            </p>
                            <p class="detail-product-content-Note"></p>

                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailXuatXu">Xuất Xứ:
                                        </label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailXuatXu"
                                            placeholder="Xuất Xứ Sản Phẩm" name="XuatXu"><?php echo $row['XuatXuPhuKienBaoVe'] ?></textarea>
                                    </span>
                                </p>
                            </div>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailChatLuong">Chất Lượng Sản Phẩm:
                                        </label>
                                        <textarea rows="3" cols="5" type="text" class="form-control" id="exampleInputDetailChatLuong"
                                            placeholder="Chất Lượng Sản Phẩm" name="ChatLuong"><?php echo $row['ChatLieuBaoVe'] ?></textarea>
                                    </span>
                                </p>
                            </div>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailBoPhuKien">Bộ Phụ Kiện Đầy Đủ Gồm: </label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailBoPhuKien"
                                            placeholder="Bộ Phụ Kiện Đầy Đủ Gồm:" name="BoPhuKien"><?php echo $row['BoDayDuBaoVe'] ?></textarea>
                                    </span>
                                </p>
                            </div>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailPhuKien1">Dòng Giới Thiệu Phụ Kiện 1</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailPhuKien1"
                                            placeholder="Dòng Giới Thiệu Phụ Kiện 1"
                                            name="Gioi-THieu-PhuKien-1"><?php echo $row['DongGioiThieuPhuKienBaoVe1'] ?></textarea>
                                    </span>
                                </p>
                            </div>

                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailPhuKien2">Dòng Giới Thiệu Phụ Kiện 2</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailPhuKien2"
                                            placeholder="Dòng Giới Thiệu Phụ Kiện 2"
                                            name="Gioi-THieu-PhuKien-2"><?php echo $row['DongGioiThieuPhuKienBaoVe2'] ?></textarea>
                                    </span>
                                </p>
                            </div>

                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailPhuKien3">Dòng Giới Thiệu Phụ Kiện 3</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailPhuKien3"
                                            placeholder="Dòng Giới Thiệu Phụ Kiện 3"
                                            name="Gioi-THieu-PhuKien-3"><?php echo $row['DongGioiThieuPhuKienBaoVe3'] ?></textarea>
                                    </span>
                                </p>
                            </div>

                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailGiaBan">Giá Bán</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailGiaBan"
                                            placeholder="Giá Bán" name="GiaBan"><?php echo $row['GiaCaBaoVe'] ?></textarea>
                                    </span>
                                </p>
                            </div>

                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailSoLuong">Số Lượng</label>
                                        <input type="number" class="form-control" id="exampleInputDetailSoLuong"
                                            placeholder="Số Lượng" name="SoLuong" value="<?php echo $row['SoLuongBaoVe'] ?>">
                                    </span>
                                </p>
                            </div>

                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailTinhTrang">Tình Trạng</label>
                                        <input type="text" class="form-control" id="exampleInputDetailTinhTrang" placeholder="Tình Trạng" name="TinhTrang" 
                                                value="<?php if($row['TinhTrangBaoVe']==1){
                                                    echo 'Còn Hàng';
                                                }else{
                                                    echo 'Hết Hàng';
                                                } ?>">
                                    </span>
                                </p>
                            </div>
                            
                        <div class="footer-laithu">
                            <div class="button-laithu">
                                <a href="XuLyXoaChiTietXe.php?idchitietsanpham=<?php echo $row['IdChiTietPhuKienBaoVe'] ?>"
                                    class="button-laithu-link" name="SuaCTXe"><i class="bi bi-trash">Xóa Chi Tiết
                                        Phụ Kiện</i></a>
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