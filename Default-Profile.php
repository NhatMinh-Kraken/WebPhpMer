<?php
    include("Layout/Head.php");
?>

<?php
    include("AdminConf/Configure/config.php");

    
    $sql_xemthongtin = "SELECT * FROM taikhoanuser Where idUser='$_GET['IdUser']' LIMIT 1"
?>

    <div class="Default-Profile">
        <div class="nav-menu-default-profile">

            <div class="logo-mer-profile">
                <div class="logo-top navbar-left">
                    <a href="Index.php"><img src="Images/logo.png" alt="Mercedes-Benz">
                </div>
                <div class="Title-logo">
                    <a href="Index.php">
                        <h4>Mercedes-Benz</h4>
                    </a>
                </div>
            </div>
            <div class="Default-Prodile-Search">
                <ul class="navbar-nav-search w-100">
                    <li class="nav-item-search w-100">
                        <form class="nav-search">
                            <input type="text" class="form-control" placeholder="Search">
                        </form>
                    </li>
                </ul>
            </div>
            <div class="Default-Profile-User">
                <div class="Btn-Default-User">
                    <span class="IconProfile">
                        <i id="iconX" class="bi bi-person-square"></i>
                    </span>

                </div>
                <span class="NameProfile">Nguyễn Nhật Minh</span>
            </div>
        </div>
    </div>
    <div class="Body-Default-Profile">
        <div class="ThongTin-Profile">
            <div class="row">
                <div class="Khung-Profile">
                <div class="ThongTin-Profile-Left">
                    <div class="ThongTin-Left">
                        <div class="ThongTinCaNhan-AnhDaiDien-Left">
                            <a href="#">
                                <div class="avatar">
                                    <div class="avater-placeholder"></div>
                                </div>
                            </a>
                            <div class="Name-Avatar">
                                <div class="Name-Avatar-1">Nguyễn Nhật Minh</div>
                                <div class="Edit-ThongTinCaNhan">
                                    <a href="">
                                        <div class="IconEdit">
                                            <span class="IconEdit-ThongTinCaNhan"><i class="bi bi-pencil"></i></span>
                                            <span>Sửa Hồ Sơ </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="ThongTinCaNhan-Left">
                            <a href="">
                                <span class="ThongTinCaNhan-Icon"><i class="bi bi-person-bounding-box"></i></span>
                                <span class="ThongTinCaNhan-TieuDe">Thông Tin Cá Nhân</span>
                            </a>
                        </div>
                        <div class="DonMua-Left">
                            <a href="">
                                <span class="DonMua-Icon"><i class="bi bi-clipboard-minus"></i></span>
                                <span class="DonMua-TieuDe">Thông Tin Giỏ Hàng</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="NganCach"></div>
                <div class="ThongTin-Profile-Right"></div>
                </div>
                
            </div>
        </div>
    </div>

    <?php
    include("Layout/Head-end.php");
?>