
<?php
/**
 * Created by IntelliJ IDEA.
 * User: AustinJ
 * Date: 4/15/18
 * Time: 6:12 PM
 */
    // still needs to work on the database stuff
    include("config.php");
    session_start();
    //define some session variable
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

        $_SESSION["favcolor"] = $userName;

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

    <br><label id="username"><b>Enter Username: </b></label>
      <?php echo $_SESSION['firstName']; ?>

    <br><label><b>Enter Lastname: </b></label>
      <?php echo $_SESSION['lastName']; ?>

    <br><label id="username"><b>Enter Email: </b></label>
      <?php echo $_SESSION['email']; ?>


    <div><span style="align-content: center">
      <form enctype="multipart/form-data" action="uploader.php" method="POST">
          <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
          <b>Choose a file to upload:</b>
          <input name="uploadedfile" type="file" />
          <input type="submit" value="Upload File" />
      </form>
    </div></span>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">

      <button type="submit" class="btn btn-primary">Comfirm</button>
      <button type="button" class="btn btn-primary">Cancel</button>

    </div>
  </div>
</form>
</div>
<?php include ("footer.php"); ?>
</body>