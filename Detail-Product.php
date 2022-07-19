<?php
    include("AdminConf/Configure/config.php");
?>

<?php
    $sql_xe = "SELECT * FROM chitietphukien WHERE IdChiTietPhuKien='$_GET[idchitietphukien]'";
    $query_xe = mysqli_query($mysqli,$sql_xe);
    
?>
<?php
    include("Layout/Head.php");
?>

<?php
        if(isset($_SESSION['dangnhap']))
        {
            include("Profile/Profile.php");
        }
    ?>
<?php
        include("page/menu-nav.php");
    ?>
<!---->
<div id="wrapper">
    <!--nav-->
    <?php
            include("page/nav.php");
        ?>



    <div class="Product">
        <div class="container">
            <div class="product-Header">
                <h3>Product</h3>
                <div class="product-content">
                    <?php
                    while($row = mysqli_fetch_array($query_xe))
                    {
                        ?>
                    <div class="product-content-left">
                        <div class="product-content-left-big-img">
                            <img src="AdminConf/Module/Uploads/<?php echo $row['AnhPhuKien1'] ?>" alt="Phu kien lon">
                        </div>
                        <div class="product-content-left-small-img">
                            <img src="AdminConf/Module/Uploads/<?php echo $row['AnhPhuKien2'] ?>" alt="Phu kien nho1">
                            <img src="AdminConf/Module/Uploads/<?php echo $row['AnhPhuKien3'] ?>" alt="Phu kien nho2">
                            <img src="AdminConf/Module/Uploads/<?php echo $row['AnhPhuKien4'] ?>" alt="Phu kien nho3">
                            <img src="AdminConf/Module/Uploads/<?php echo $row['AnhPhuKien5'] ?>" alt="Phu kien nho4">
                        </div>
                    </div>
                    <div class="product-content-right">
                        <div class="product-content-right-product-name">
                            <h1><?php echo $row['TenChiTietPhuKien'] ?></h1>
                            <p> Loại phụ kiện: <span style="color: blue; font-weight: bold;"><?php
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
                            ?><span><span style="color: red;">*</span></p>
                        </div>
                        <div class="product-content-right-product-price">
                            <p><?php echo $row['GiaCaPhuKien'] ?><sup>đ</sup></p>
                        </div>
                        <div class="product-content-right-product-thongtin">
                            <p>Chất liệu: <?php echo $row['ChatLieu'] ?></p>
                            <p>Trọn bộ gồm: <?php echo $row['BoDayDu'] ?></p>
                            <p><?php echo $row['DongGioiThieuPhuKien1'] ?></p>
                            <p><?php echo $row['DongGioiThieuPhuKien2'] ?></p>
                            <p><?php echo $row['DongGioiThieuPhuKien3'] ?></p>

                        </div>
                        <div class="product-content-right-product-quantity">
                            <p style="font-weight: bold;">Tình Trạng:</p>
                            <p style="color: red; padding-left: 10px;"><?php
                            if($row['TinhTrangPhuKien'] == 1)
                            {
                                echo "Còn Hàng";
                            }
                            else{
                                echo "Hết Hàng";
                            }
                        ?><span style="color: red;">*</span></p>
                        </div>
                        <div class="product-content-right-product-button">
                            <button class="button-deafault-link"><i class="bi bi-cart-plus"></i><span
                                    class="button-deafault-text">Mua Hàng</span></button>
                        </div>

                    </div>
                    <?php
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
    <?php
            include("page/Footer.php");
        ?>
    <!---->
</div>



<!---------------------------------------------Product Related---------------------------------------------->


<script>
const ImgBig = document.querySelector(".product-content-left-big-img img")
const ImgSmall = document.querySelectorAll(".product-content-left-small-img img")

ImgSmall.forEach(function(imgItem, X) {
    imgItem.addEventListener("click", function() {
        ImgBig.src = imgItem.src
    })
})
</script>
<?php
    include("Layout/Head-end.php");
?>