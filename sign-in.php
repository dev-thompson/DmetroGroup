   <?php 
        require_once('./header.php');
   ?>

   <section class="all-signup">
        <div class="signup-head mb-3 margin">
            <div class="sign-1">
                <a href="./index.php"><i class="fa fa-chevron-left"></i> Back To WealthForge</a>
            </div>
        </div>
        <form action="" class="sign-input">
            <div class="sign-content margin">
                <div class="sign-2">
                    <img width="200" src="./assets/image/black-logo.png" alt="">
                </div>
                <label for="email">Email</label>
                <div class="sign-space mb-4">    
                    <input type="email" name="email" placeholder="Enter Your Email ">
                    <i class="far fa-envelope"></i>
                </div>
                <label for="password">Password</label>
                <div class="sign-space mb-4">    
                    <input id="password" type="password" name="password" placeholder="Enter Password ">
                     <span class="eye-icon"><i class="far fa-eye " style="font-size: 0.9rem;" onclick="togglePasswordVisibility()"></i></span>
                </div>
                 <div class="quest-1 mb-4">
                    <p>Forgot your password? <a href="">Recover Password</a></p>
                </div>
                <div class="login-cta mb-4">
                    <button type="button" class="login-btn">Login</button>
                </div>
                <div class="login-select mb-4">
                    <div class="line-1"></div>
                    <h6>OR</h6>
                    <div class="line-1"></div>
                </div>
                <div class="quest">
                    <p>Already have an account? <a href="./register.php">Register Here</a></p>
                </div>
            </div>
        </form>
   </section>















<?php 
    require_once ('./script.php');
?>