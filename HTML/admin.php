<?php
Session_start();
    if(!isset($_SESSION['login_user'])):
        header('Location:index.php');
    endif;
?>

<?php include ("head.php"); ?>

<body  id="myPage">

    <?php include ("header.php"); ?>
    <div class="container-fluid">
        <h1>Welcome, Jong Hyun</h1>
        <p>ADMIN</p>
        <p></p>


        <div class="col-sm-5">

            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <ul class="list-group">
                    <li class="list-group-item">Messages<span class="badge">7</span></li>
                    <li class="list-group-item">Profile</li>
                    <li class="list-group-item">Comments<span class="label label-primary">NEW</span></li>
                    <li class="list-group-item">Settings</li>
                </ul>
            </div>
            <!-- Seems important so I"m going to put this here... https://davidwalsh.name/multiple-file-upload-->
            <!--   if(count($_FILES['uploads']['filesToUpload'])) {
              foreach ($_FILES['uploads']['filesToUpload'] as $file) {

                //do your upload stuff here
                echo $file;

              }
            } -->
        </div>

        <div class = "col-sm-5">
            <div class="panel panel-culture">
                <div class="panel-heading-culture">Update Expression of the Day</div>
                <form>
                    <div>
                        <label for="newExp"> Input new expression: </label>
                        <input type="text" id="newExp" name="expression">
                    </div>
                    <div>
                        <button>Update</button>
                    </div>
                </form>
            </div>
        </div>


        <div class="col-sm-5">
            <div class="panel panel-lessons">
                <div class="panel-heading-lessons">Update Lesson Content</div>
                <p> To select multiple files, hold down the CTRL or SHIFT key while selecting.</p>
                <form action="/action_page.php">
                    <br>Select files: <input name="upload[]" type="file" multiple="multiple" />
                    <input type="submit">
                </form>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="panel panel-culture">
                <div class="panel-heading-culture">Update Culture Content</div>

                <p> To select multiple files, hold down the CTRL or SHIFT key while selecting.</p>
                <form action="/action_page.php">
                    <br>Select files: <input name="upload[]" type="file" multiple="multiple" />
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
    <?php include ("footer.php"); ?>
</body>
