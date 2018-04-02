<?php
    Session_start();
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
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="lessons.html">LESSONS<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="lessons.html">Beginner</a></li>
                        <li><a href="#">Intermediate</a></li>
                        <li><a href="#">Advanced</a></li>
                    </ul>
                <li><a href="home.html">CULTURE</a></li>
                <?php if(isset($_SESSION['login_user'])): ?>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="lessons.html"><?php echo "$_SESSION[firstName]" ?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#portfolio">ACCOUNT</a></li>
                        <?php if($_SESSION['permissions'] >= 2): ?>
                            <li><a href="#">ADMIN</a></li>
                        <?php endif; ?>
                        <?php if($_SESSION['permissions'] >= 1): ?>
                            <li><a href="#">LESSONS</a></li>
                        <?php endif; ?>
                        <li><a href="#">SETTINGS</a></li>
                        <li><a href="logout.php" id="signout">SIGN OUT</a></li>
                    </ul>
                <?php else: ?>
                    <li><a href="#" id="signin">SIGN IN</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>

    <?php if ($_SERVER['PHP_SELF'] == "/Hanstuff/html/alphabet.php" or $_SERVER['PHP_SELF'] == "/Hanstuff/html/beginner.php" or $_SERVER['PHP_SELF'] == "/Hanstuff/html/intermediate.php" or $_SERVER['PHP_SELF'] == "/Hanstuff/html/advanced.php"): ?>
        <nav class="navbar navbar-lessons">
            <ul class="nav navbar-nav navbar-center">
                <li><a href="alphabet.html">ALPAHBET</a></li>
                <li><a href="beginner.html">BEGINNER</a></li>
                <li><a href="intermediate.html">INTERMEDIATE</a></li>
                <li><a href="advanced.html">ADVANCED</a></li>
            </ul>
        </nav>
    <?php endif; ?>

</nav>
