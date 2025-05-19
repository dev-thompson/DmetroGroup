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
                    <h3><strong>Verify Email</strong></h3>
                    <p>Please enter the 6 digit code that was sent to your email</p>
                </div>
                <label for="verify">Enter Code</label>
                <div class="sign-space mb-4">
                    <input type="text" inputmode="numeric" name="verify" placeholder="Enter Code ">
                    <!-- <i class="far fa-envelope"></i> -->
                </div>
                <div class="login-cta mb-4">
                    <a href="#">
                        <button type="button" class="login-btn">Verify</button>
                    </a>
                </div>
            </div>
        </form>
   </section>















<?php 
    require_once ('./script.php');
?>