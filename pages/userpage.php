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


 if (isset($_SESSION['username'])) {
    $sql = "SELECT * FROM users WHERE username = '$username'";
 ?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<title>Profile Page</title>
</head>

<body class="animated fadeIn">

	<div class="container">
		<div class="upperbar">
		<img src="../assets/images/a.jpg">
			<div class="helper">
				<form><input type="text" placeholder="Search.." name="search">
				</form>
			</div>
		</div>
		<div class="header">
			<img class="header-image" src="../assets/images/1.png">
			<img class="profile-avatar" src="../assets/images/a.jpg">
			<div class="header-content">
				<?php echo "<h1 class='username'>" . $username  . "</h1>"; ?>
				<h2>Position</h2>
				<h3>Location</h3>
			</div>
		</div>

		<div class="past-items">
			<h1>Past Projects</h1>
			<div class="item-container">
				<div class="c-item">
					<h1>Project Name<a href="http://google.com"><img src="../assets/images/hyperlink.png"></a></h1>
					<h2>Position</h2>
					<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus venenatis interdum molestie. Mauris ornare est tempus, feugiat arcu ac, venenatis velit. Donec et elit efficitur, mattis dui hendrerit, sollicitudin purus. In aliquet, lacus vitae malesuada rhoncus, massa justo tempus nunc, sed bibendum lorem ex quis nunc. Vestibulum rhoncus cursus feugiat. Proin nunc ante, sagittis ut maximus quis, tincidunt ac enim. Curabitur consequat libero eu erat feugiat volutpat. Sed efficitur purus a ante egestas consequat. Cras molestie eros turpis, ut congue urna hendrerit ut. Proin mollis tellus et dapibus mattis. </h3>
				</div>

				<div class="c-item">
					<h1>Project Name<a href="http://google.com"><img src="../assets/images/hyperlink.png"></a></h1>
					<h2>Position</h2>
					<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus venenatis interdum molestie. Mauris ornare est tempus, feugiat arcu ac, venenatis velit. Donec et elit efficitur, mattis dui hendrerit, sollicitudin purus. In aliquet, lacus vitae malesuada rhoncus, massa justo tempus nunc, sed bibendum lorem ex quis nunc. Vestibulum rhoncus cursus feugiat. Proin nunc ante, sagittis ut maximus quis, tincidunt ac enim.</h3>
				</div>

				<div class="c-item">
					<h1>Project Name<a href="http://google.com"><img src="../assets/images/hyperlink.png"></a></h1>
					<h2>Position</h2>
					<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus venenatis interdum molestie.</h3>
				</div>
			</div>
		</div>


		<div class="past-items">
			<h1>Past Courses</h1>
			<div class="item-container">
				<div class="c-item">
					<h1>Course Name<a href="http://google.com"><img src="../assets/images/hyperlink.png"></a></h1>
					<h2>Date</h2>
					<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus venenatis interdum molestie. Mauris ornare est tempus, feugiat arcu ac, venenatis velit. Donec et elit efficitur, mattis dui hendrerit, sollicitudin purus. In aliquet, lacus vitae malesuada rhoncus, massa justo tempus nunc, sed bibendum lorem ex quis nunc. Vestibulum rhoncus cursus feugiat. Proin nunc ante, sagittis ut maximus quis, tincidunt ac enim. Curabitur consequat libero eu erat feugiat volutpat. Sed efficitur purus a ante egestas consequat. Cras molestie eros turpis, ut congue urna hendrerit ut. Proin mollis tellus et dapibus mattis. </h3>
				</div>

				<div class="c-item">
					<h1>Course Name<a href="http://google.com"><img src="../assets/images/hyperlink.png"></a></h1>
					<h2>Date</h2>
					<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus venenatis interdum molestie. Mauris ornare est tempus, feugiat arcu ac, venenatis velit. Donec et elit efficitur, mattis dui hendrerit, sollicitudin purus. In aliquet, lacus vitae malesuada rhoncus, massa justo tempus nunc, sed bibendum lorem ex quis nunc. Vestibulum rhoncus cursus feugiat. Proin nunc ante, sagittis ut maximus quis, tincidunt ac enim. </h3>
				</div>

				<div class="c-item">
					<h1>Course Name<a href="http://google.com"><img src="../assets/images/hyperlink.png"></a></h1>
					<h2>Date</h2>
					<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus venenatis interdum molestie.</h3>
				</div>
			</div>
		</div>


	</div>
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
    <title>Flinc</title>
     </head>
     <body>
     	<div class="warning-container">
         <div class="warningdiv">
             <H1>You need to be logged in to view this page.</H1><br>
             <h2>Login <a href="login.php">here</a></h2>
        </div>
    </div>
     </body>
     
 </html>
 
 <?php }
 ?>
