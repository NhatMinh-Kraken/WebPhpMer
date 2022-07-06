<?php
    include("Layout/Head.php");
?>

    <div class="backgr"></div>
    <div class="Registration-form">
        <header>
            <h1 class="Register-header-h1">
                Sign Up
            </h1>
            <p class="Register-header-p">
                Fill In A Informations.
            </p>
        </header>
        <form>
            <div class="input-section username-section">
                <input class="username-register username" type="text" placeholder="ENTER YOUR USERNAME HERE" autocomplete="off">

                <div class="animated-button">
                    <span class="icon-person-square">
                        <i class="bi bi-person-square"></i>
                    </span>
                    <span class="next-button username">
                        <i class="fa fa-arrow-up"></i>
                    </span>
                </div>
            </div>
            <div class="input-section email-section folder">
                <input class="email-register email" type="email" placeholder="ENTER YOUR E-MAIL HERE" autocomplete="off">

                <div class="animated-button">
                    <span class="icon-paper-plane">
                        <i class="bi bi-envelope"></i>
                    </span>
                    <span class="next-button email">
                        <i class="fa fa-arrow-up"></i>
                    </span>
                </div>
            </div>
            <div class="input-section sdt-section folder">
                <input class="sdt-register sdt" type="number" placeholder="Number Phone" autocomplete="off">

                <div class="animated-button">
                    <span class="icon-paper-plane">
                        <i class="fa fa-envelope-0"></i>
                    </span>
                    <span class="next-button sdt">
                        <i class="fa fa-arrow-up"></i>
                    </span>
                </div>
            </div>
            <div class="input-section password-section folder">
                <input class="password-register pass" type="password" placeholder="Password" autocomplete="off">

                <div class="animated-button">
                    <span class="icon-paper-plane">
                        <i class="fa fa-envelope-0"></i>
                    </span>
                    <span class="next-button pass">
                        <i class="fa fa-arrow-up"></i>
                    </span>
                </div>
            </div>
            <div class="input-section conf-password-section folder">
                <input class="conf-password-register conf-pass" type="password" placeholder="Conf-Password" autocomplete="off">

                <div class="animated-button">
                    <span class="icon-paper-plane">
                        <i class="fa fa-envelope-0"></i>
                    </span>
                    <span class="next-button conf-pass">
                        <i class="fa fa-arrow-up"></i>
                    </span>
                </div>
            </div>
            <div class="input-section Sex-section folder">
                <select class="Sex-register Sex" type="text" id="Sex-register" name="Sex-register" autocomplete="off">
                    <option value="0">Chọn GIới TÍnh</option>
                    <option value="1">Nam</option>
                    <option value="2">Nữ</option>
                </select>

                <div class="animated-button">
                    <span class="icon-paper-plane">
                        <i class="fa fa-envelope-0"></i>
                    </span>
                    <span class="next-button Sex">
                        <i class="fa fa-arrow-up"></i>
                    </span>
                </div>
            </div>
            <div class="input-section birthday-section folder">
                <input class="birthday-register birthday" id="birthday" name="birthday" type="date" autocomplete="off">

                <div class="animated-button">
                    <span class="icon-paper-plane">
                        <i class="fa fa-envelope-0"></i>
                    </span>
                    <span class="next-button birthday">
                        <i class="fa fa-arrow-up"></i>
                    </span>
                </div>
            </div>
        </form>
    </div>

    <?php
    include("Layout/Head-end.php");
?>