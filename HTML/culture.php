<?php
Session_start();
?>

<?php include ("head.php"); ?>

<body  id="myPage">

<?php include ("header.php"); ?>

<div class="jumbotron2">
    <h1 style = "text-align: center">Culture</h1><br>
    <p style = "text-align: center">come learn about all things Korea!</p>
</div>

<div class =" container-fluid">

    <div class ="col-sm-4">
        <div id="flip"><h1 style = "text-align:left">Food</h1></div>
        <div id="panel" style = "text-align:left">
            <h2><u>Street Food</u></h2>
            <h2><u>Traditional Tea House</u></h2>
            <h2><u>Convenience Store Food</u></h2>

        </div>

        <div id="flip2"><h1 style = "text-align:left">Entertainment</h1></div>
        <div id="panel2" style = "text-align:left">
            <h2><u>Kpop</u></h2>
            <h2><u>Trot Music</u></h2>
            <h2><u>Kdramas</u></h2>
        </div>

        <div id="flip3"><h1 style = "text-align:left">Communication</h1></div>
        <div id="panel3" style = "text-align:left">
            <h2><u>Greetings in Korea</u></h2>
            <h2><u>How to Respond to Compliments</u></h2>
            <h2><u>Korean Taxis</u></h2>

        </div>
    </div>

    <div class ="col-sm-6">
        <iframe src="images/pdfread.pdf" width ="100%" height ="400px" scrolling ="yes">
        </iframe></div>

</div>
<?php include ("footer.php"); ?>
</body>
