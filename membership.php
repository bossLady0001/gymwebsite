<?php
$msg = "";
if(isset($_POST["signup"])){
    $sname = $_POST["sname"];
    $oname = $_POST["oname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    if(($sname && $oname && $email && $password) == ""){
        $msg ="Kindly Fill the Form";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="membership.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->

</head>

<body>
  
    <div class="contain">
      

        <div class="main">
            <input type="checkbox" id="chk" name="chek" id="" aria-hidden="true">

            <div class="signup">

                <form action="" method="post">
                    <label for="chk" aria-hidden="true">Sign up</label>
                    <input type="text" name="sname" placeholder="Surname">
                    <input type="text" name="oname" placeholder="Other name">
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <input type="password" name="cpassword" placeholder="Comfirmed Password">

                    <button name="signup">Sign up</button>
                </form>
            </div>

            <div class="login">
                <form action="" method="post">
                    <label for="chk" aria-hidden="true">Login</label>
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <button name="login">Login</button>
                </form>
            </div>
        </div>
    </div>
    <div class="ms">
    <center><?php echo $msg; ?></center>
    </div>
</body>

</html>