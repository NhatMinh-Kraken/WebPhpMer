<!---->
<!--nav-->
<?php
    include("AdminConf/Configure/config.php");
?>
<?php
    $sql_xe = "SELECT * FROM chitietphukien, loaiphukienbody,loaiphukienbaove,loaiphukientiennghi,loaiphukientrangtri,loaiphukienmamxe WHERE chitietphukien.IdLoaiPhuKienBody = loaiphukienbody.IdLoaiPhuKienBody OR chitietphukien.IdLoaiPhuKienBaoVe = loaiphukienbaove.IdLoaiPhuKienBaoVe OR chitietphukien.IdLoaiPhuKienTienNghi = loaiphukientiennghi.IdLoaiPhuKienTienNghi or chitietphukien.IdLoaiPhuKienTrangTri = loaiphukientrangtri.IdLoaiPhuKienTrangTri OR chitietphukien.IdLoaiPhuKienMamXe = loaiphukienmamxe.IdLoaiPhuKienMamXe LIMIT 6";
    $query_xe = mysqli_query($mysqli,$sql_xe);
    
?>

    <div class="Product-Website">
        <div class="Title-Product">
            <h1 class="Title-Product-car">Các Loại Phụ Kiện Mercedes</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="row-product">
                    <?php
                    while($row = mysqli_fetch_array($query_xe))
                    {
                    ?>
                    <div class="col-12 col-sm-6 col-md-4 product-khung">
                        <div class="Product-img">
                            <a class="link-accesory"
                                href="Detail-Product.php?idchitietphukien=<?php echo $row['IdChiTietPhuKien'] ?>">
                                <img src="AdminConf/Module/Uploads/<?php echo $row['AnhPhuKien1'] ?>">

                        </div>
                        <div class="Product-loaixe">
                            <span>Loại Phụ Kiện: </span>
                            <span><?php
                                if($row['IdLoaiPhuKienBody']!='' && $row['IdLoaiPhuKienBaoVe']=='' && $row['IdLoaiPhuKienTienNghi']=='' && $row['IdLoaiPhuKienTrangTri']=='' && $row['IdLoaiPhuKienMamXe']=='')
                                {
                                    echo $row['TenLoaiPhuKienBody'];
                                } 
                                elseif($row['IdLoaiPhuKienBody']=='' && $row['IdLoaiPhuKienBaoVe']!='' && $row['IdLoaiPhuKienTienNghi']=='' && $row['IdLoaiPhuKienTrangTri']=='' && $row['IdLoaiPhuKienMamXe']=='')
                                {
                                    echo $row['TenLoaiPhuKienBaoVe'];
                                }
                                elseif($row['IdLoaiPhuKienBody']=='' && $row['IdLoaiPhuKienBaoVe']=='' && $row['IdLoaiPhuKienTienNghi']!='' && $row['IdLoaiPhuKienTrangTri']=='' && $row['IdLoaiPhuKienMamXe']=='')
                                {
                                    echo $row['TenLoaiPhuKienTienNghi'];
                                }
                                elseif($row['IdLoaiPhuKienBody']=='' && $row['IdLoaiPhuKienBaoVe']=='' && $row['IdLoaiPhuKienTienNghi']=='' && $row['IdLoaiPhuKienTrangTri']!='' && $row['IdLoaiPhuKienMamXe']=='')
                                {
                                    echo $row['TenLoaiPhuKienTrangTri'];
                                }
                                elseif($row['IdLoaiPhuKienBody']=='' && $row['IdLoaiPhuKienBaoVe']=='' && $row['IdLoaiPhuKienTienNghi']=='' && $row['IdLoaiPhuKienTrangTri']=='' && $row['IdLoaiPhuKienMamXe']!='')
                                {
                                    echo $row['TenLoaiPhuKienMamXe'];
                                }
                            ?></span>
                        </div>
                        <div class="Product-name">
                            <a class="link-accesory"
                                href="Detail-Product.php?idchitietphukien=<?php echo $row['IdChiTietPhuKien'] ?>">
                                <span><?php
                                echo $row['TenChiTietPhuKien']
                            ?></span>
                            </a>
                        </div>
                        <div class="Product-money">
                            <a class="link-accesory"
                                href="Detail-Product.php?idchitietphukien=<?php echo $row['IdChiTietPhuKien'] ?>">
                                <span class="spleft"></span>
                                <span class="Money">Giá: <?php echo $row['GiaCaPhuKien'] ?>
                                    VNĐ</span>
                                <div class="spleft spright"></div>
                            </a>
                        </div>

                    </div>
                    <?php
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
    