<?php
    include('config.php');

    $sql_lietke_danhsachkhachhang = "SELECT * FROM taikhoanuser "; 
    $query_lietke_danhsachkhachhang = mysqli_query($mysqli,$sql_lietke_danhsachkhachhang);
    
?>
<div class="main-content-wrap">
    <div class="container">
        <div class="rows">
            <div class="row-detail-product">
                <div class="row-detail-product-header">
                    <div class="detail-product-header">
                        <h1 class="entry-title">
                            Danh Sách Khách Hàng
                        </h1>
                    </div>
                    <div class="form-group">
                        <div class="container">
                            <div class="row">
                                <div class="Muc-TieuDe-User">
                                    <span class="Muc-id">ID</span>
                                    <span class="Muc-name">Tên Khách Hàng</span>
                                    <span class="Muc-Email">Email</span>
                                    <span class="Muc-SDT">Số Điện Thoại</span>
                                    <span class="Muc-TieuDe-DiaChi">Địa Chỉ</span>
                                    <span class="Muc-TieuDe-NgaySinh">Ngày Sinh</span>
                                    <span class="Muc-TieuDe-GioiTinh">Giới Tính</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    while($row = mysqli_fetch_array($query_lietke_danhsachkhachhang))
                    {
                        
                    ?>
                    <div class="form-group">
                        <div class="container">
                            <div class="row">
                                <div class="Muc-TieuDe">
                                    <span class="Muc-id"><?php echo $row['IdUser'] ?></span>
                                    <span class="Muc-name"><?php echo $row['HoVaTen'] ?></span>
                                    <span class="Muc-Email">
                                    <?php 
                                        echo $row['Email'];
                                     ?></span>
                                    <span class="Muc-SDT"><?php echo $row['SDT'];  ?></span>
                                    <span class="Muc-TieuDe-DiaChi"><?php echo $row['DiaChi'];  ?></span>
                                    <span class="Muc-TieuDe-NgaySinh"><?php echo $row['NgaySinh'];  ?></span>
                                    <span class="Muc-TieuDe-GioiTinh"><?php echo $row['GioiTinh'];  ?></span>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>