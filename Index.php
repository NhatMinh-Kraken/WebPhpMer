<?php
    include("Layout/Head.php");
?>
    <?php
        include("Loadding.php");    
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
            if($tam =='danhmucsanpham'){
                include("Product/Product-Type.php");
            }else{
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