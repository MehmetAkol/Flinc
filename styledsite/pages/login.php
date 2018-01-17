<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
<body>
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
                <h1>Log in with your account</h1>
                    <form role="form" action="sql/login.php" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="username" class="sr-only">Email</label>
                            <input type="username" name="username" id="email" class="form-control" placeholder="somebody@example.com">
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Password</label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log in">
                    </form>
                    <hr> <hr> <hr> <hr> <hr> <hr>
              </div>
        </div> 
      </div> 
    </div> 
</section>
</body>
</html>