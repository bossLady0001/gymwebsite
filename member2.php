<?php
include "connect.php";
if(isset($_POST["signup"])){
    $sname = $_POST["sname"];
    $oname = $_POST["oname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password2 = $_POST["cpassword"];

    if(($sname && $oname && $email && $password && $password2) == ""){
       echo "<center>Kindly Fill the form</center>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="text.css" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="member2.css">
</head>
<body>
    <div class="container" id="main">
        <div class="sign-up">
            <form action="" method="post">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <p>or use your email for registration</p>
                <input type="text" name="sname" placeholder="Surname">
                <input type="text" name="oname" placeholder="Other Name">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="cpassword" placeholder="Comfirmed Password">
                <button name="signup">Sign Up</button>
            </form>
            
        </div>
        <div class="sign-in">
            <form action="" method="post">
                <h1>Sign In</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <p>or use your account</p>
              
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
               <a href="#">Forget Your Password?</a>
                <button name="signup">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-left">
                    <h1>Welcome Back</h1>
                    <p>To keep connected with us please login with your personal Info</p>
                    <button id="sign-in">Sign In</button>
                </div>
                <div class="overlay-right">
                    <h1>Hello,Friend</h1>
                    <p>Enter your personal details and start your journey with us</p>
                    <button id="sign-up">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const signUpBotton = document.getElementById('sign-up');
        const signInBotton = document.getElementById('sign-in');
        const main = document.getElementById('main');

        signUpBotton.addEventListener("click",()=>{
            main.classList.add("right-panel-active");
        });
        signInBotton.addEventListener("click",()=>{
            main.classList.remove("right-panel-active");
        })
    </script>
</body>
</html>