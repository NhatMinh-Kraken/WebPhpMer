<?php
    session_start();
    if(!isset($_SESSION['dangnhap'])){
        header('Location:Login.php');
    }
?>

<?php
    include("Layout/Head.php");
?>
<?php
            include("Loadding.php");
        ?>
<div class="DangKy-LaiThu">
        <div class="container container-login">
            <div class="row Login-width">
                <div class="content">
                    <div class="background-while">
                        <div class="content-gr1 shadow-box">
                            <div class="content-left">
                                <div class="content-left-tittle">
                                    <p>Vẻ đẹp làm nên thương hiệu</p>
                                    <h3>Mercedes-Benz</h3>
                                </div>
                                <div class="Nut-ANhLaiTHu">
                                    <a href="Index.php" role="button"></a>
                                </div>
                                <div class="content-left-logo">
                                    <img src="Images/AnhNenLogo.jpg">
                                </div>

                            </div>
                            <div class="content-right">
                                <div class="content-form">
                                    <div class="content-header">
                                        Đăng Ký Lái Thử
                                    </div>
                                    <div class="form">
                                        <form>
                                            <div class="form-group">
                                                <label>Họ và Tên *</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Email *</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Địa Chỉ *</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Số Điện Thoại *</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Loại Xe *</label>
                                                <select id="LoaiXeLaiThu" class="form-control">
                                                    <option value="0">Chọn Loại Xe</option>
                                                    <option value="1">C-Class</option>
                                                    <option value="2">B-Class</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Tên Xe *</label>
                                                <select id="TenXeLaiThu" class="form-control">
                                                    <option value="0">Chọn Tên Xe</option>
                                                    <option value="1">C-300</option>
                                                    <option value="2">B-300</option>
                                                </select>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn-block-enter">Enter</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("Layout/Head-end.php");
?>