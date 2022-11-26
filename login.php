<?php
include_once 'database.php'

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/login.css" />
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <title>Document</title>
  </head>
  <body>
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form action="#" method="POST">
          <h1>Create Account</h1>
          <input type="text" name="name" placeholder="Name" />
          <input type="email" name="email" placeholder="Email" />
          <input type="password" name="password" placeholder="Password" />
          <button name="signup">Sign Up</button>

          <?php
    if (isset($_POST['signup'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $sql = "INSERT INTO `signup`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
      $data = mysqli_query($conn, $sql);

      if ($data) {
          echo "Inserted Successfully";
            ?>
                <meta http-equiv="refresh" content="1; url = http://localhost/coffe/coffee%20website/otp/index.php" />
            <?php
            }     
      }
    ?>
        </form>
      </div>
      <div class="form-container sign-in-container">
        <form action="POST">
          <h1 id="head">Sign In</h1>
          <input name="email" id="email" placeholder="Email" />
          <input type="password" id="pad" name="pass" placeholder="Password" />
          <!----<a href="#">Forgot your password?</a>------->
          <button name="login" id="login">Sign In</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Welcome Back !</h1>
            <p>
              To keep connected with us please login with your personal info
            </p>
            <button class="btn" id="signIn">Sign In</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Welcome</h1>
            <p>Enter your details to login.<br>To get registered with us please Sign up</br></p>
            <button class="btn" name="signup" id="signUp">Sign Up</button>
          </div>
        </div>
      </div>
    </div>
    <script >
      const signUpButton = document.getElementById("signUp");
      const signInButton = document.getElementById("signIn");
      const container = document.getElementById("container");

      signUpButton.addEventListener("click", () => {
      container.classList.add("right-panel-active");
      });

      signInButton.addEventListener("click", () => {
        container.classList.remove("right-panel-active");
      });

      document.querySelector("#login").addEventListener("click", (e) => {
        e.preventDefault();
        $.post("./apis.inc.php", {
          "method": "login",
            "email": document.querySelector("#email").value,
            "password": document.querySelector("#pad").value
        }).done((e) => {
          window.localStorage.setItem("user_cred", document.querySelector("#email").value)
          alert("Login Success");
          window.location.href = "./display.html"
        }).fail((e) => {
          alert("Login Failed")
        })
      })
    </script>
    
  </body>
</html>
