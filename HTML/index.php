<?php
//    session_start();
?>

<?php include ("head.php"); ?>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<?php include ("header.php"); ?>

<div class="jumbotron text-center"  style ="padding-top: 300px; color:white">
  <h1>Korean Language Learning</h1>
  <p>Learn.Discuss.Grow.</p>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>HANSTUFF</h2><br>
      <h5>We're passionate about all things Hanguk(Korea).That's why we made it our mission to make innovative lessons and share information about Korean culture.</h5><br>
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
         <img src="../images/hangul.jpg" alt="hangul" height="400px">
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center bg-grey">
  <h2>LESSONS</h2>
  <h5>We divided our lessons into three levels, and within those levels are three more categories:<br>
        Low, Medium and High</h5>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-book logo-small"></span>
      <h5>BEGINNER</h5>
      <p>Start from the alphabet work your way up!</p>
      <p>learn basic vocab,sentence structure,etc.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-book logo-small"></span>
      <span class="glyphicon glyphicon-book logo-small"></span>
      <h5>INTERMEDIATE</h5>
      <p>Build upon vocabulary and grammar</p>
      <p>introduces different verb endings and new expressions</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-book logo-small"></span>
      <span class="glyphicon glyphicon-book logo-small"></span>
      <span class="glyphicon glyphicon-book logo-small"></span>
      <h5>ADVANCED</h5>
      <p>practice with Korean articles and stories</p>
      <p>Learn about Korean idioms, more complex expressions and practice reading Korean literature</p>
    </div>
  </div>
  <br><br>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>CULTURE</h2><br>
      <h5><strong>MISSION:</strong> Learn about Korea through music,entertainment,food and tourism!</h5><br>
    </div>
  </div>
</div>
<?php include ("footer.php"); ?>

<script>

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>