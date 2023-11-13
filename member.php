<?php

include "connect.php";
if(isset($_POST["submit"])){
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  // $picture = $_FILES["picture"]["name"];
  // $tmp_picture = $_FILES["picture"]["tmp_name"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  if(($fname && $lname && $email && $password) == ""){
    echo "Kindly fill out the form";
  }else{
    $insert = mysqli_query($conn,"INSERT INTO `member`( `fname`, `lname`, `email`, `password`) VALUES ('$fname','$lname','$email','$password')");
    if($insert){
      echo "You have successfully created an account";
    }
  }
}

session_start();
if(isset($_POST["submit2"])){
  $email = $_POST["email"];
  $password = $_POST["password"];

  $select = mysqli_query($conn, "SELECT * FROM `member` WHERE `email`= '$email' AND `password` = '$password' ");
  if (mysqli_num_rows($select) > 0){
   $user = mysqli_fetch_assoc($select);
   $_SESSION["email"] = $user["email"];
   $_SESSION["password"] = $user["password"];

   echo "Successfully Login";
  }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="member.css"> -->
</head>

<style>
  .hero {
    display: grid;
    grid-template-columns: 1fr 1fr;
    place-content: center;
    position: relative;
    /* align-items: center; */
    /* border: 1px solid #000; */
    /* gap: 150px; */
  }

  .first {
    height: 91vh;
    border: 1px solid #000;
    background: #E64201;
    color: #ddd;
    /* width: 50%; */
    display: grid;
    place-items: center;
  }

  .te {
    display: grid;
    place-content: center;
    padding: 20px;
  }
  body{
    overflow-x: hidden;
  }

  button {
    width: 200px;
    height: 50px;
    background: transparent;
    border: 3px solid #000;
    font-size: 19px;
    color: #ddd;
  }
  .secon button{
    width: 200px;
    height: 50px;
    background: transparent;
    border: 3px solid #000;
    font-size: 19px;
    color: #000;
  }

  .first h1 {
    font-size: 50px;
    /* padding: 20px; */
  }

  .secon {
    display: grid;
    place-content: center;
    place-items: center;
    /* border: 1px solid #000; */


  }

  .secon h2 {
    display: flex;
    justify-content: flex-start;
  }

  .chech {
    /* display: flex; */
    width: 500px;
    /* justify-content: left; */
    align-items: start;
    margin:0 auto;
  }

  form input {
    width: 350px;
    height: 40px;
    border-radius: 10px;

  }


  .login{
    position: absolute;
    top: 180px;
    right: -390px;
    overflow: hidden;
  }
  @media (max-width: 1024px) {
    .hero{
      display: grid;
      grid-template-columns: 1fr;
    }
  }
</style>

<body>

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg bg-light text-dark">
    <div class="container">
      <a class="navbar-brand" href="#">FitnessClub</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-light" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5 ">
          <li class="nav-item">
            <a class="nav-link" href="index2.html">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="member.php">membership</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Coaches</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Schedule</a>
          </li>
        </ul>


      </div>
    </div>
  </nav>

  <section class="hero">
    <div class="first">
      <div class="te">
        <h3 class="si">Already Signed Up?</h3>
        <p class="si2">Login in to your account so you can continue with the membership</p>
        <button id="login">Log in</button>
      </div>
    </div>
    <div class="secon" id="second">
      <h2>Sign up</h2>
      <form action="" method="post" enctype="multipart/form-data">
        <label for="fname">First name</label><br>
        <input type="text" name="fname"><br>

        <label for="fname">Last name</label><br>
        <input type="text" name="lname"><br>


        <label for="email">Email</label><br>
        <input type="email" name="email"><br>

        <label for="password">Password</label><br>
        <input type="password" name="password"><br>

        <label for="password">Confirmed Password</label><br>
        <input type="password" name="password"><br><br>

        <button name="submit" class="sign">Sign Up</button>
      </form>
       <!-- <div class="chech">
          <input type="checkbox" name="check" id="" required>
          <label for="check">Terms of Services and Policies</label>
        </div> -->
        
    </div>
  </section>

  <section class="login" >
    <h2>Sign In</h2>
    <form action="" method="post">
      <label for="email">Email</label><br>
        <input type="email" name="email" value="<?php echo $_SESSION['email']?>"><br>

        <label for="password">Password</label><br>
        <input type="password" name="password" value="<?php echo $_SESSION['password']?>"><br><br>

        <button style="color: #000;" name="submit2" class="signin">Sign In</button>

    </form>
  </section>


</body>
<script>
  let login = document.getElementById("login");
  let logini = document.querySelector(".login");
  // let logini2 = document.querySelector(".login2");
  let si = document.querySelector(".si");
  let si2 = document.querySelector(".si2");
  let signup = document.getElementById("second");

 
 login.addEventListener("click",function(){
  logini.style.right = "120px" ;
  login.innerText= "Sign Up" ;
  signup.style.display = "none";
  logini.style.transition = ".7s";
  signup.style.transition = ".7s";
  si.innerText = "Create an account now."
  si.innerText = "Create an account to be part of the member"
 } )
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>