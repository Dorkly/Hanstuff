<?php
//    Session_start();
?>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">HANSTUFF</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="alphabet.php">LESSONS<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="beginner.php">Beginner</a></li>
                        <li><a href="intermediate.php">Intermediate</a></li>
                        <li><a href="advanced.php">Advanced</a></li>
                    </ul>
                <li><a href="culture.php">CULTURE</a></li>
                <?php if(isset($_SESSION['login_user'])): ?>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['firstName'] ?><span class="caret"></span></a>
                    <ul class="dropdown-menu">

                        <li><a href="home.php">ACCOUNT</a></li>
                        <?php if($_SESSION['permissions'] >= 2): ?>
                            <li><a href="admin.php">ADMIN</a></li>
                        <?php endif; ?>
                        <?php if($_SESSION['permissions'] >= 1): ?>
                            <li><a href="#">LESSONS</a></li>
                        <?php endif; ?>

                        <!-- -->
                        <li><a href="adminSetting.php">SETTINGS</a></li>
                        <?php if($_SESSION['permissions'] >= 2): ?>
                            <li><a href="admin.php">ADMIN</a></li>
                        <?php endif; ?>

                        <li><a href="logout.php" id="signout">SIGN OUT</a></li>


                    </ul>
                <?php else: ?>
                    <li><a href="#" id="signin">SIGN IN</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>

    <?php if ($_SERVER['PHP_SELF'] == dirname($_SERVER['PHP_SELF']) ."/alphabet.php" or $_SERVER['PHP_SELF'] == dirname($_SERVER['PHP_SELF']) ."/beginner.php" or $_SERVER['PHP_SELF'] == dirname($_SERVER['PHP_SELF']) ."/intermediate.php" or $_SERVER['PHP_SELF'] == dirname($_SERVER['PHP_SELF']) ."/advanced.php"): ?>
        <nav class="navbar navbar-lessons" style="z-index: 10">
            <ul class="nav navbar-nav navbar-center">
                <li><a href="alphabet.php">ALPAHBET</a></li>
                <li><a href="beginner.php">BEGINNER</a></li>
                <li><a href="intermediate.php">INTERMEDIATE</a></li>
                <li><a href="advanced.php">ADVANCED</a></li>
            </ul>
        </nav>
    <?php endif; ?>

</nav>
