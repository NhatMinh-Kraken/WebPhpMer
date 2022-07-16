<?php
    include("AdminConf/Configure/config.php");
?>

<?php
    $sql_xe = "SELECT * FROM chitietsanpham Order by idchitietsanpham DESC LIMIT 6";
    $query_xe = mysqli_query($mysqli,$sql_xe);
    
?>

<div class="Product-Website">
    <div class="Title-Product">
        <h1 class="Title-Product-car">CÁC XE ĐƯỢC ĐĂNG KÝ CHẠY NHIỀU NHẤT</h1>
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
                        <a href="#">
                            <img src="AdminConf/Module/Uploads/<?php echo $row['HinhAnh1'] ?>">
                        </a>
                    </div>
                    <div class="Product-name">
                        <a href="Detail-Product.php">
                            <h4><?php
                                echo $row['TenXe']
                            ?></h4>
                        </a>
                    </div>
                    <div class="Product-money">
                        <span class="spleft"></span>
                        <span class="Money">Giá: <?php echo $row['GiaXeNiemYet'] ?> VNĐ</span>
                        <div class="spleft spright"></div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>