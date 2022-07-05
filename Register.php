<?php
    include("Layout/Head.php");
?>


<div class="Login-scroller">    
        <div class="container-login">
            <div class="row Login-width">
                <div class="Login-background">
                    <div class="Login-Card col-lg-4">
                        <div class="Login-Tilte">
                            <h3 class="Login-card-title">Register</h3>
                            <form>
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
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block enter-btn" name="DangKy">Enter</button>
                                </div>
                                <div class="d-flex">
                                    <button class="btn btn-facebook mr-2">
                                        <i class="bi bi-facebook"></i>
                                        Facebook
                                    </button>
                                    <button class="btn btn-google mr-2">
                                        <i class="bi bi-google"></i>
                                        Facebook
                                    </button>
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