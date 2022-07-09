
    <?php
        include("AdminConf/Configure/config.php");
    ?>

    <?php
        if(isset($_GET['action']) == 'dangxuat'){
            unset($_SESSION['dangnhap']);
            header('Location:Login.php');
        }
    ?>

    <div class="body">
        <div class="menu-profile">
            <ul id="menu-profile">
                <li class="ItemProfile">
                    <div class="Click-drop">
                        <span class="IconProfile"><i class="bi bi-person-badge"></i></span>
                        <span class="NameProfile">User</span>
                    </div>
                    <div class="cont-drobdown-menu">
                        <ul>
                            <li>
                            
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="ItemProfile">
                    <div class="Click-drop">
                        <span class="IconProfile"><i class="bi bi-list-check"></i></span>
                        <span class="NameProfile">Thông Tin</span>
                    </div>
                    
                </li>
                <li class="ItemProfile">
                    <div class="Click-drop">
                        <span class="IconProfile"><i class="bi bi-basket"></i></span>
                        <span class="NameProfile">Giỏ Hàng</span>
                    </div>
                </li>
                <li class="ItemProfile">
                    <a href="Index.php?action=dangxuat">
                        <span class="IconProfile"><i class="bi bi-box-arrow-right"></i></span>
                        <span class="NameProfile">Đăng Xuất</span>
                    </a>

                </li>
            </ul>
            <div class="Btn-Profile">
                <span class="IconProfile"><i id="iconX" class="bi bi-person-square"></i></span>
            </div>
        </div>
    </div>

    <script>
        const btn = document.querySelector(".Btn-Profile")
        btn.addEventListener('click', e => {
            btn.classList.toggle("rotatesBtn");
            document.querySelector("#menu-profile").classList.toggle('showMenu');
            document.querySelector("#iconX").classList.toggle('showIconX');
        });
    </script>


