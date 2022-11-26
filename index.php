<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/form-elements.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="cssprop.css">
  <style>
    .btn-text-left {
      text-align: left;
     
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;

      
    }
  </style>
    <title>Firebase Phone Verification</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

  </head>
  <body>
  <form method="POST">
    <div class="btn-text-left">
      <a href="index.html" class="logo" name="home">
        <img src="images/logo2.jpg" alt="">
    </a>
    <h1>Please verify your phone number to login!!</h1>
    </div>
  </form>
  <?php
  if (isset($_POST['home'])) {
  ?>
    <meta http-equiv="refresh" content="1; url = http://localhost/coffe/coffee%20website/index.html" />
  <?php
  }
  ?>
    <form action="verification.php">
      <h1>Phone verification</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label for="uname"><strong>Phone Number</strong></label>
        <input type="text" id="number" placeholder="Enter phone number" name="uname" required>
      </div>
      <div id="recaptcha-container"></div>
      <button type="button" onclick="phoneAuth();">Send Otp</button>
    
    </form>

    <form method="POST" action="verification.php">
      <!-- <h1>Firebase Phone verification In PHP</h1> -->
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label for="uname"><strong>Verification Number</strong></label>
        <input type="text" id="verifyNumber" placeholder="Enter verification code" name="uname" required>
      </div>
      <!-- <div id="recaptcha-container"></div> -->
      <button name ="sub" type="submit" onclick="codeverify();">Submit</button>
      <?php
        if (isset($_POST['sub'])) {
          ?>
          <meta http-equiv="refresh" content="1; url = http://localhost/coffe/coffee%20website/index.php" />
          <?php
        }
        ?>
    
    </form>

    After Verification Click <a href="http://localhost/coffe/coffee%20website/index.php">here</a>


  <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase.js"></script>
    <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
    apiKey: "AIzaSyCenNYz0t1Re71YZTn2UQjNgFH0KXuBhi0",
    authDomain: "museum-63148.firebaseapp.com",
    projectId: "museum-63148",
    storageBucket: "museum-63148.appspot.com",
    messagingSenderId: "47331439042",
    appId: "1:47331439042:web:870557b85ef622d640e65b",
    measurementId: "G-V410SQ1L2Y"
    };

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
     firebase.analytics();
</script>
    <script src="js/firebase.js" type="text/javascript"></script>
  </body>
</html>