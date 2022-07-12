<?php
    include('config.php');
    $sql_thongtincanhan_user = "SELECT * FROM taikhoanuser WHere IdUser='$_GET[IdUser]' LIMIT 1"; 
    $query_thongtincanhan_user = mysqli_query($mysqli,$sql_thongtincanhan_user);
?>
<div class="thongtin-right">
<div class="Header-Right">
    <h4>Hồ Sơ Của Tôi</h4>
    <p>Quản lý thông tin hồ sơ của bạn</p>
</div>
<div class="body-thongtincanhan-right">
    <div class="body-thongtincanhan-border">
        <div class="body-thongtin">
            <?php
                $i = 0;
                while($row = mysqli_fetch_array($query_thongtincanhan_user))
                {
                    $i++;
                
            ?>
            <form action="">
                <div class="form-group">
                    <lable>Họ và Tên:</lable>
                    <input class="form-control" value="<?php echo $row['HoVaTen'] ?>">
                </div>
                
                <div class="form-group">
                    <lable>Email:</lable>
                    <input class="form-control" value="<?php echo $row['Email'] ?>">
                </div>

                <div class="form-group">
                    <lable>Số điện thoại</lable>
                    <input class="form-control" value="<?php echo $row['SDT'] ?>">
                </div>

                <div class="form-group">
                    <lable>Ngày Sinh</lable>
                    <input class="form-control" value="<?php echo $row['NgaySinh'] ?>">   
                </div>

                <div class="form-group">
                    <lable>GioiTinh</lable>
                    <input class="form-control" value="<?php echo $row['GioiTinh'] ?>">
                </div>
            </form>

            <?php
                }
            ?>
        </div>
    </div>
</div>
</div>