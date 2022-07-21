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
                <form method="POST" action="XuLySuaThongTinUser.php?IdUser=<?php echo $_GET['IdUser'] ?>">
                    <div class="form-group">
                        <lable>Họ và Tên:</lable>
                        <input type="text" name="HoVaTen" class="form-control" value="<?php echo $row['HoVaTen'] ?>">
                    </div>

                    <div class="form-group">
                        <lable>Email:</lable>
                        <input type="text" name="Email" class="form-control" readonly
                            value="<?php echo $row['Email'] ?>">
                    </div>

                    <div class="form-group">
                        <lable>Số điện thoại</lable>
                        <input type="number" name="SDT" class="form-control" value="<?php echo $row['SDT'] ?>">
                    </div>

                    <div class="form-group">
                        <lable>Địa Chỉ</lable>
                        <textarea type="text" name="DiaChi" class="form-control"> <?php echo $row['DiaChi'] ?></textarea>
                    </div>

                    <div class="form-group">
                        <lable>Ngày Sinh</lable>
                        <input type="date" name="NgaySinh" class="form-control" value="<?php echo $row['NgaySinh'] ?>">   
                    </div>

                    <div class="form-group">
                        <lable>GioiTinh</lable>
                        <input type="text" name="GioiTinh" class="form-control" value="<?php echo $row['GioiTinh']?>">
                    </div>

                    <div class="footer-laithu">
                        <div class="button-laithu">
                            <input class="button-laithu-link" type="submit" value="Sửa Thông Tin" name="SuaTTCaNhan">
                        </div>
                    </div>
                </form>

                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>


