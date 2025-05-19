   <?php 
        require_once('./header.php');
   ?>


   <section class="all-signup">
        <div class="signup-head mb-3 margin">
            <div class="sign-1">
                <a href="./index.php"><i class="fa fa-chevron-left"></i> Back To DivestiaMetroGroup</a>
            </div>
        </div>
        <form action="" class="sign-input">
            <div class="sign-content margin">
                <div class="sign-2">
                    <img width="200" src="./assets/image/black-logo.png" alt="">
                </div>
                <div class="quest-1 mb-3">
                    <h3><strong>Reset Password</strong></h3>
                </div>
                <label for="password">New Password</label>
                <div class="sign-space mb-4">    
                    <input id="password" type="password" name="password" placeholder="Enter Password ">
                     <span class="eye-icon"><i class="far fa-eye " style="font-size: 0.9rem;" onclick="togglePasswordVisibility()"></i></span>
                </div>
                <label for="password">Confirm Password</label>
                <div class="sign-space mb-4">    
                    <input id="con-password" type="password" name="password" placeholder="Confirm Password ">
                    <span class="eye-visible"><i class="far fa-eye " style="font-size: 0.9rem;" onclick="togglePassword()"></i></span>
                </div>
                <div class="login-cta mb-4">
                    <button type="button" class="login-btn">Change Password</button>
                </div>
            </div>
        </form>
   </section>















<?php 
    require_once ('./script.php');
?>