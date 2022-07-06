<?php
    include("Layout/Head.php");
?>

    <?php
    if(isset($_POST['DangKy'])){
        $Username = $_POST['Username'];
        $Email = $_POST['Email'];
        $SDT = $_POST['SDT'];
        $Password = md5($_POST['Password']) ;
        $NgaySinh = $_POST['NgaySinh'];
        $GioiTinh = $_POST['GioiTinh'];

        $sql_dangky = mysqli_query('$mysqli',"INSERT INTO ")
    }
?>

        <div class="Login-scroller">
            <div class="container-login">
                <div class="row Login-width">
                    <div class="Login-background">
                        <div class="Login-Card">
                            <div class="Login-Tilte">
                                <h3 class="Login-card-title">Register</h3>
                                <form>
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