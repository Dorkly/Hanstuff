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

        $sqlUser = "SELECT id FROM auth_user WHERE lower(username) = lower('$userName')";

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
                $sql2 = "INSERT INTO profile_user (current_level, last_lesson, username) VALUES ('BEGINNER', null, '$userName')";
                mysqli_query($db,$sql2);
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

<?php include ("head.php"); ?>

<body id="myPage">
<?php include ("header.php"); ?>
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
<?php include ("footer.php"); ?>
</body>