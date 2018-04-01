<?php
    include("config.php");
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $firstName = mysqli_real_escape_string($db,$_POST['firstName']);
        $lastName = mysqli_real_escape_string($db,$_POST['lastName']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $password = mysqli_real_escape_string($db,$_POST['psw']);
        $passRepeat = mysqli_real_escape_string($db,$_POST['psw-repeat']);
        $userName = mysqli_real_escape_string($db,$_POST['userName']);

        $sqlUser = "SELECT id FROM auth_user WHERE lower(username) = lower('$myusername')";

        $result = mysqli_query($db,$sqlUser);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($con));
            exit();
        }
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];

        $count = mysqli_num_rows($result);

        if($count == 1) {
            $_SESSION['errMsg'] = "Username is already taken, please enter in a new name";
        } else {
            $passHash = password_hash($password, PASSWORD_DEFAULT);
            if (password_verify($passRepeat, $passHash)) {
                $sql = "INSERT INTO auth_user (password, first_name, last_name, email, date_joined, username) VALUES ('$passHash','$firstName','$lastName','$email',CURDATE(),'$userName')";

                if (mysqli_query($db,$sql)) {
                    header("location:index.php");
                } else {
                    $_SESSION['errMsg'] = "Error registering user.";
                }

            }else {
                $_SESSION['errMsg'] = "Passwords do not match";
            }
        }
    }
?>

<html lang="en">
<head>

  <title>Hanstuff:Korean language learning</title>

  <meta charset="utf-8"> 
  

  <meta name="viewport" content="width=device-width, initial-scale=1">

  

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="home.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">HANSTUFF</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">LESSONS<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Beginner</a></li>
          <li><a href="#">Intermediate</a></li>
          <li><a href="#">Advanced</a></li>
          </ul>
        <li><a href="home.html">CULTURE</a></li>
        <li><a href="#portfolio">ACCOUNT</a></li>
        <li><a href="#contact">SETTINGS</a></li>
      </ul>
    </div>
  </div>
</nav>
<div>
<br><br>
  <form role="form" method = "post">
  <div class="container" style="text-align: center">
      <?php unset($_SESSION['errMsg']); ?>
    <h1>Register</h1>
    <p>Please fill in all fields of this form to create an account.</p>
    <hr>

    <br><label id="username"><b>Enter Username</b></label>
    <br><input type="text" placeholder="Username" name="userName" required>

    <br><label id ="firstName"><b>First Name</b></label>
    <br><input type="text" placeholder="First Name" name="firstName" required>

    <br><label id="lastName"><b>Last Name</b></label>
    <br><input type="text" placeholder="Last Name" name="lastName" required>

    <br><label id ="Email"><b>Email</b></label>
    <br><input type="text" placeholder="Email" name="email" required>

    <br><label id ="psw"><b>Password</b></label>
    <br><input type="password" placeholder="Password" name="psw" required>

    <br><label id="psw-repeat"><b>Confirm Password</b></label>
    <br><input type="password" placeholder="Repeat Password" name="psw-repeat" required>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">

      <button type="submit" class="btn btn-primary">Sign Up</button>
      <button type="button" class="btn btn-primary">Cancel</button>

    </div>
  </div>
</form>
</div>
</body>