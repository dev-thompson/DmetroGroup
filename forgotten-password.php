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
                <div class="forget-pass mb-4">
                    <p>
                        <span>Enter email associated with your account and we’ll send</span>
                        <span>an email with instructions to reset your password.</span>
                    </p>
                </div>
                <label for="email">Email</label>
                <div class="sign-space mb-4">    
                    <input type="email" name="email" placeholder="Enter Your Email ">
                    <i class="far fa-envelope"></i>
                </div>
                <div class="login-cta mb-4">
                    <a href="#">
                        <button type="button" class="login-btn">Send Instructions</button>
                    </a>
                </div>
            </div>
        </form>
   </section>















<?php 
    require_once ('./script.php');
?>