<?php
    include("config.php");
//    Session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form

        $myusername = mysqli_real_escape_string($db,$_POST['username']);
        $mypassword = mysqli_real_escape_string($db,$_POST['password']);

        $sql = "SELECT id, username, password, first_name, last_name, email CASE WHEN is_superuser = 1 THEN 1 ELSE CASE WHEN is_staff = 1 THEN 2 ELSE 0 END END permissions FROM auth_user WHERE lower(username) = lower('$myusername')";
        $result = mysqli_query($db,$sql);
        $sql2 = "SELECT current_level, last_lesson FROM profile_user WHERE username = $myusername";
        $result2 = mysqli_query($db,$sql2);

        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
        $active = $row['active'];
        $active2 = $row2['active'];

        $count = mysqli_num_rows($result);
        $count2 = mysqli_num_rows($result2);

        // If result matched $myusername, table row must be 1 row

        if($count == 1) {
            $passHash = $row["password"];
            if (password_verify($mypassword, $passHash)) {
                $_SESSION['login_user'] = $myusername;
                $_SESSION['firstName'] = $row[first_name];
                $_SESSION['lastName'] = $row[last_name];
                $_SESSION['email'] = $row[e_mail];
                $_SESSION['permissions'] = $row[permissions];
                $_SESSION['currentLevel'] = $row2[current_level];
                $_SESSION['lastLesson'] = $row2[last_lesson];
                $sqlupdate = "UPDATE  auth_user SET last_login = NOW(), is_active = 1 WHERE lower(username) = lower('$myusername')";
                mysqli_query($db,$sqlupdate);
            }else {
                //password is invalid
                $_SESSION['errMsg'] = "Your Login Name or Password is invalid";
                echo "<script type='text/javascript'>alert('$_SESSION[errMsg]');</script>";
            }
        }else {
            // User Name is invalid
            $_SESSION['errMsg'] = "Your Login Name or Password is invalid";
            echo "<script type='text/javascript'>alert('$_SESSION[errMsg]');</script>";
        }
    }
?>

<?php include ("nav.php"); ?>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="padding:35px 50px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
                <form role="form" method = "post">
                    <div class="form-group">
                        <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                        <input type="text" class="form-control" name = "username" id="usrname" placeholder="Enter user name">
                    </div>
                    <div class="form-group">
                        <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                        <input type="password" class="form-control" name = "password" id="psw" placeholder="Enter password">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="" checked>Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block "><span class="glyphicon glyphicon-off"></span> Login</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <p>Not a member? <a href="registration.php">Sign Up</a></p>
                <p>Forgot <a href="#">Password?</a></p>
            </div>
        </div>

    </div>
</div>


<script>
    $(document).ready(function(){
        $("#signin").click(function(){
            $("#myModal").modal();
        });
    });
</script>

<script>
    $(document).ready(function(){
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
</script>