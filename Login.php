<?php
    include("Layout/Head.php");
?>
    <div class="Login-scroller">    
        <div class="container-login">
            <div class="row Login-width">
                <div class="Login-background">
                    <div class="Login-Card col-lg-4">
                        <div class="Login-Tilte">
                            <h3 class="Login-card-title">Login</h3>
                            <form>
                                <div class="form-group">
                                    <label>Username or email *</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Password *</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">
                                            Remember me
                                            <i class="input-helper"></i>
                                        </label>
                                    </div>
                                    <a href="#" class="forgot-pass">Forgot Password</a>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block enter-btn">Enter</button>
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
                                    Don't have an Account?
                                    <a href="Register.php">Sign Up</a>
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