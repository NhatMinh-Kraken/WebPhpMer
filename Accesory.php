<?php
    session_start();
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

<!---Menu-nav-->
<?php
        include("page/menu-nav.php");
    ?>
<!---->
<div id="wrapper">
    <!--nav-->
        <?php
            include("page/nav.php");
        ?>

        <?php
            include("page/Dropdown-Type-Accesory.php");
        ?>


    <?php
        include("AdminConf/Configure/config.php");
    ?>

    <?php
    $sql_xe = "SELECT * FROM chitietphukiennoithatngoaithat, loaiphukiennoithatngoaithat WHere chitietphukiennoithatngoaithat.IdLoaiPhuKienNoiThatNgoaiThat = loaiphukiennoithatngoaithat.IdLoaiPhuKienNoiThatNgoaiThat Order by idchitietsanphamnoithatngoaithat DESC LIMIT 6";
    $query_xe = mysqli_query($mysqli,$sql_xe);
    
?>
<div class="section1"></div>
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
                            <a
                                href="Product-Detail.php?idchitietxe=<?php echo $row['idchitietsanphamnoithatngoaithat'] ?>">
                                <img src="AdminConf/Module/Uploads/<?php echo $row['AnhPhuKienNoiThatNgoaiThat1'] ?>">

                        </div>
                        <div class="Product-loaixe">
                            <span>Loại Xe: </span>
                            <span><?php
                                echo $row['TenLoaiPhuKienNoiThatNgoaiThat']
                            ?>:</span>
                        </div>
                        <div class="Product-name">
                            <a
                                href="Product-Detail.php?idchitietxe=<?php echo $row['idchitietsanphamnoithatngoaithat'] ?>">
                                <span><?php
                                echo $row['TenPhuKienNoiThatNgoaiThat']
                            ?></span>
                            </a>
                        </div>
                        <div class="Product-money">
                            <a
                                href="Product-Detail.php?idchitietxe=<?php echo $row['idchitietsanphamnoithatngoaithat'] ?>">
                                <span class="spleft"></span>
                                <span class="Money">Giá: <?php echo $row['GiaCaNoiThatNgoaiThat'] ?>
                                    VNĐ</span>
                                <div class="spleft spright"></div>
                            </a>
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

    <?php
    include("Layout/Head-end.php");
?>