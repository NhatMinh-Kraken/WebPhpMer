<?php
    session_start();
?>

<?php
    include("Layout/Head.php");
?>
    <?php
        include("Loadding.php");    
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
        <!---->
        <!--slide-->
        <?php
            include("page/slider.php");
        ?>
        <!---->
        
        <!--Ưu đãi-->
        <?php
            include("page/offer.php");
        ?>
        <!---->

        <!--Product-->
        <?php
            if(isset($_GET['quanly'])){
                $tam = $_GET['quanly'];
            }else{
                $tam ='';
            }
            if($tam =='danhmucsanphamxe'){
                include("Product/Product-Type.php");
            }
            elseif($tam =='Product-Detail'){
                include("Product/Product-Detail.php");
            }
            
            else{
                include("Product/Product-car.php");
            }
        ?>
        <!---->

        <!--Tìm hiểu thêm-->
        <?php
            include("page/Default.php");
        ?>
        <!---->

        <!---Tin tức sự kiện khuyến mãi-->
        <?php
            include("page/New-Event-Sale.php");
        ?>
        <!---->

        <!--Lợi ích-->
        <?php
            include("page/Ads-Benefit.php");
        ?>

        <!--Footer-->
        <?php
            include("page/Footer.php");
        ?>
        <!---->
    </div>

<?php
    include("Layout/Head-end.php");
?>