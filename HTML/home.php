<?php
if ( !isset($_SESSION) ) session_start();

?>

    <?php include ("head.php"); ?>
<body id="myPage">
    <?php include ("header.php"); ?>

    <div class="container-fluid">
        <h1>Welcome, <?php echo $_SESSION['firstName'] ?></h1>
        <p>Level: <?php echo $_SESSION['currentLevel']?></p>
        <p></p>
        <div class="row">
            <div class="col-xs-6 col-md-3">
                <div class="panel panel-culture">
                    <div class="panel-heading-culture">Expression of the Day</div>
                    <div class="panel-body">해결하다: (noun) to resolve a matter.</div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    <ul class="list-group">
                        <li class="list-group-item">Messages<span class="badge">7</span></li>
                        <li class="list-group-item">Profile</li>
                        <li class="list-group-item">Comments<span class="label label-primary">NEW</span></li>
                        <li class="list-group-item">Settings</li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-5">
                <div class="panel panel-lessons">
                    <div class="panel-heading-lessons">Lessons</div>
<!--                    <div class="panel-body">Lesson 6-2: Interviews</div>-->
                    <ul class="list-group">
<!--                        <li class="list-group-item">Vocabulary: Going to Restaurant</li>-->
<!--                        <li class="list-group-item">Grammar: Verb Stem + 았/었어요.</li>-->
                    </ul>
                </div>
            </div>



            <div class="col-sm-4">
                <div class="panel panel-culture">
                    <div class="panel-heading-culture">Culture</div>

                    <ul class="list-group">
                        <img src="images/pyeongchang.jpg" alt="pyeong">
                        <li class="list-group-item">Pyeongchang Olympics</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php include ("footer.php"); ?>
</body>
