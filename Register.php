<?php
    include("Layout/Head.php");
?>

    <?php
    include("AdminConf/Configure/config.php");

    if(isset($_POST['DangKy'])){   
        $Username = $_POST['Username'];
        $Email = $_POST['Email'];
        $SDT = $_POST['SDT'];
        $Password = md5($_POST['Password']);
        $ConfirmPassword = ($_POST['Confirm-Password']);
        $NgaySinh = $_POST['NgaySinh'];
        $GioiTinh = $_POST['GioiTinh'];

        
        $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^"; 
        if(!preg_match($pattern, $Email))
        {
            echo '<script language="javascript"> alert("Email này không hợp lệ. Vui lòng nhập Email khác."); window.location="Register.php";</script>' ;
        }
        
        if(mysqli_num_rows(mysqli_query($mysqli,"SELECT Email FROM taikhoanuser WHERE Email='$Email'")) > 0 )
        {
            echo '<script> alert("Email đã được sử dụng. Vui lòng dùng Email khác để đăng ký."); window.location="Register.php";</script>';  
        }
    
        if(!preg_match ("[0-9]", $SDT)){
            echo '<script> alert("Số điện thoại không hợp lệ."); window.location="Register.php";</script>';
        }
    
        if($SDT < 10 && $SDT > 10)
        {
            echo '<script> alert("Số điện thoại phải có 10 số."); window.location="Register.php";</script>';
        }

        $PassDB = "^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$";

        if(!preg_match($PassDB, $Password))
        {
            echo '<script> alert("Mật khẩu không đúng đĩnh dạng. Mật khẩu đúng định dạng bao gồm các ký tự sau : ^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$"); window.location="Register.php";</script>';
        }

        if($Password != $ConfirmPassword)
        {
            echo '<script> alert("Mật khẩu không trùng với Nhập lại mật khẩu"); window.location="Register.php";</script>';
        }
        
        $sql_dangky = mysqli_query($mysqli,"INSERT INTO taikhoanuser(HoVaTen,Email,SDT,pasword,NgaySinh,GioiTinh) VALUE('".$Username."','".$Email."','".$SDT."','".$Password."','".$NgaySinh."','".$GioiTinh."')");
    
        if($sql_dangky)
        {
            echo '<script> alert(<p stype="color:green">Bạn đã đăng ký thành công</p>); window.location="Login.php";</script>';
        }
    }
  
?>

        <div class="Login-scroller">
            <div class="container-login">
                <div class="row Login-width">
                    <div class="Login-background">
                        <div class="Login-Card">
                            <div class="Login-Tilte">
                                <h3 class="Login-card-title">Register</h3>
                                <form action="" method="POST">
                                    <div class="form-row">
                                        <div class="form-grouper">
                                            <div class="form-group">
                                                <label>Username *</label>
                                                <input type="text" class="form-control" name="Username">
                                            </div>
                                            <div class="form-group">
                                                <label>Email *</label>
                                                <input type="text" class="form-control" name="Email">
                                            </div>
                                            <div class="form-group">
                                                <label>Password *</label>
                                                <input type="password" class="form-control" name="Password">
                                            </div>
                                            <div class="form-group">
                                                <label>Confirm Password *</label>
                                                <input type="password" class="form-control" name="Confirm-Password">
                                            </div>
                                        </div>
                                        <div class="form-grouper">
                                            <div class="form-group">
                                                <label>Số Điện Thoại *</label>
                                                <input type="number" class="form-control" name="SDT">
                                            </div>
                                            <div class="form-group">
                                                <label>Giới Tính *</label>
                                                <select id="GioiTinh" name="GioiTinh" class="form-control">
                                                    <option value="0">Chọn Giới Tính</option>
                                                    <option value="1">Nam</option>
                                                    <option value="2">Nữ</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Ngày Sinh *</label>
                                                <input type="date" class="form-control" name="NgaySinh">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="text-center">
                                        <button type="submit" name="DangKy" class="btn btn-primary btn-block enter-btn">Enter</button>
                                    </div>

                                    <p class="sign-up">
                                        Do you already have an account ?
                                        <a href="Login.php"> Login</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    include("Layout/Head-end.php");
?>