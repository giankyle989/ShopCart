<?php
include_once'signup.php';

?> 
 
 <!--SignIn-->
            <div class="form-container sign-in-container">
                <form action="includes/login.inc.php" method="post">
                    <h1>Sign in</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class='bx bxl-facebook-circle'></i></a>
                        <a href="#" class="social"><i class='bx bxl-google' ></i></a>
                        <a href="#" class="social"><i class='bx bxl-linkedin' ></i></a>
                    </div>
                    <span>or use your account</span>
                    <input type="text" name="uid" placeholder="Username/Email">
                    <input type="password" name="password" placeholder="Password">
                    <a href="#">Forgot your password?</a>
                    <button type="submit" name="submit">Sign In</button>
                    <?php
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo "<p>Fill in all fields.</p>";
                        }
                        else if ($_GET["error"] == "wronglogin") {
                            echo "<p>Incorrect login information.</p>";
                        }
                    }
                    ?>
                </form>

            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your personal details and start journey with us</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>

        </div>
        
        <script src="js/main.js" async defer></script>
    </body>
</html>
