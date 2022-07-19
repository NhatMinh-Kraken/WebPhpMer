<?php
    session_start();
    include("AdminConf/Configure/config.php");

    // thêm vào giỏ hàng
    if(isset($_POST['ThemVaoGioHang'])){
        $id = $_GET['idchitietphukien'];
        $SoLuong = 1;
        $SQL_them = "SELECT * FROM chitietphukien Where IdChiTietPhuKien='$id' LIMIT 1";

        $query = mysqli_query($mysqli,$SQL_them);
        $row = mysqli_fetch_array($query);
        if($row)
        {
            $New_Product = array(array('tensanpham'=>$row['TenChiTietPhuKien'], 'id'=>$id,'AnhPhuKien1'=>$row['AnhPhuKien1'],'XuatXu'=>$row['XuatXuPhuKien'],'ChatLieu'=>$row['ChatLieu'],'BoDayDu'=>$row['BoDayDu'],'DongGioiThieu1'=>$row['DongGioiThieuPhuKien1'],'DongGioiThieu2'=>$row['DongGioiThieuPhuKien2'],'DongGioiThieu3'=>$row['DongGioiThieuPhuKien3'],'SoLuong'=>$SoLuong));
            //Kiểm tra session đã tồn tài chưa

            if(isset($_SESSION['cart']))
            {
                $found = false;
                foreach($_SESSION['cart'] as $cart_item)
                {
                    if($cart_item['id'] != $id){
                        $Product = array(array('tensanpham'=>$cart_item['TenChiTietPhuKien'], 'id'=>$cart_item,'AnhPhuKien1'=>$cart_item['AnhPhuKien1'],'XuatXu'=>$cart_item['XuatXuPhuKien'],'ChatLieu'=>$cart_item['ChatLieu'],'BoDayDu'=>$cart_item['BoDayDu'],'DongGioiThieu1'=>$cart_item['DongGioiThieuPhuKien1'],'DongGioiThieu2'=>$cart_item['DongGioiThieuPhuKien2'],'DongGioiThieu3'=>$cart_item['DongGioiThieuPhuKien3'],'SoLuong'=>$cart_item['SoLuongPhuKien']));
                        $found = true;
                    }elseif($cart_item['id'] == $id){
                        $Product = array(array('tensanpham'=>$cart_item['TenChiTietPhuKien'], 'id'=>$cart_item,'AnhPhuKien1'=>$cart_item['AnhPhuKien1'],'XuatXu'=>$cart_item['XuatXuPhuKien'],'ChatLieu'=>$cart_item['ChatLieu'],'BoDayDu'=>$cart_item['BoDayDu'],'DongGioiThieu1'=>$cart_item['DongGioiThieuPhuKien1'],'DongGioiThieu2'=>$cart_item['DongGioiThieuPhuKien2'],'DongGioiThieu3'=>$cart_item['DongGioiThieuPhuKien3'],'SoLuong'=>$cart_item['SoLuongPhuKien']+1));
                    }
                }
            }
            else{
                $_SESSION['cart'] = $New_Product;
            }
        }
        echo '<script> alert("Bạn đã thêm thành công");window.location="Index.php?quanly=Accesory";</script>';

    }
?>