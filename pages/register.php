<?php
    $host = "127.0.0.1";
    $user = "root";
    $pass = "";
    $db = "flinc";
    
    $con = mysqli_connect ($host, $user, $pass) or die("cannot connect");
    mysqli_select_db($con, $db);


    session_start();
    
    
 if (isset($_SESSION['username'])) {
 ?>
 
  <?php
    $username = $_SESSION['username'];


 if ($username = "admin") {
    $sql = "SELECT * FROM users WHERE username = '$username'";
 ?>


<html>
<head>
  <title>Register</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>  
    <link href="../css/style.css" rel="stylesheet">
 
</head>



<body class="animated fadeIn">
  <div class="contain">
    <div class="upperbar">
      <img src="../assets/images/a.jpg">
      <div class="helper">
        <form><input type="text" placeholder="Search.." name="search">
        </form>
      </div>
  </div>
<section id="login">
    <div class="container">
      <div class="row">
          <div class="col-xs-12">
              <div class="form-wrap">
                <h1>Register an account</h1>
                    <form role="form" action="sql/register.php" method="post" id="login-form" autocomplete="off">
                      <div class="form-group">
                            <label for="username" class="sr-only">First Name</label>
                            <input type="username" name="fname" id="email" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <label for="username" class="sr-only">Last Name</label>
                            <input type="username" name="lname" id="email" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <label for="username" class="sr-only">Username</label>
                            <input type="username" name="username" id="email" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Password</label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="username" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com">
                        </div>
                        
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Register">
                    </form>
                    <hr> <hr> <hr> <hr> <hr> <hr>
              </div>
        </div> 
      </div> 
    </div> 
</section>
</body>
</html>
<!--else-->
 <?php
 } 
?> <?php

 } else {
     ?>
 <html>
     <head>
       <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
      <link href="../css/style.css" rel="stylesheet">
     </head>
     <body>
      <div class="warning-container">
         <div class="warningdiv">
             <H1>You need to be an admin to view this page.</H1><br>
             <h2>Login <a href="login.php">here</a></h2>
        </div>
    </div>
     </body>
     
 </html>
 
 <?php }
 ?>
