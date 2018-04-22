<?php
    Session_start();
?>

<?php include("lesshead.php"); ?>

<body  id="myPage">
<?php include ("header.php"); ?>

<?php
$currPdfPath = 1;
function get_pdf($number) {
    $currPdfPath = $number;
}
?>

<div class="jumbotron" style = " background: url(../images/flower.jpg) no-repeat center; background-size: 100% 100%;">
    <h1 style = "text-align: center">Beginner Lessons</h1><br>
    <p style = "text-align: center">start from the beginning and build you way up.</p>
</div>
<div class =" container-fluid">

    <div class ="col-sm-4">
        <div id="flip"><h1 style = "text-align:left">Lessons 1~12</h1></div>
        <div id="panel" style = "text-align:left">
            <h2><u><a href=<?php get_pdf(1)?>>Lesson 1</a></u></h2>
            <h2><u><a href=<?php get_pdf(2)?>>Lesson 2</a></u></h2>
            <h2><u>Lesson 3</u></h2>
            <h2><u>Lesson 4</u></h2>
            <h2><u>Lesson 5</u></h2>
            <h2><u>Lesson 6</u></h2>
            <h2><u>Lesson 7</u></h2>
            <h2><u>Lesson 8</u></h2>
            <h2><u>Lesson 9</u></h2>
            <h2><u>Lesson 10</u></h2>
            <h2><u>Lesson 11</u></h2>
            <h2><u>Lesson 12</u></h2>
            <!--<h3>Conversation01<br></h3>-->
            <!--<ul>-->
            <!--<li>Vocabulary & Expressions<br></li>-->
            <!--<li>Grammar<br></li>-->
            <!--<li>Activities<br></li>-->
            <!--</ul>-->
            <!--<h3>Conversation 02<br></h3>-->
            <!--<ul>-->
            <!--<li>Vocabulary & Expressions<br></li>-->
            <!--<li>Grammar<br></li>-->
            <!--<li>Activities</li>-->

            <!--</ul>-->
        </div>
    </div>
    <div class ="col-sm-8">
        <?php
        $path1 = 'lesson_pdfs/Lesson';
        $path3 = '.pdf';
        $final = $path1.$currPdfPath.$path3;
        ?>
        <iframe src= "<?php echo $final; ?>" width ="100%" height ="500px" scrolling ="yes">
        </iframe></div>


    <!-- begin wwww.htmlcommentbox.com -->
    <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">HTML Comment Box</a> is loading comments...</div>
    <link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
    <script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="//www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&mod=%241%24wq1rdBcg%24CZFwVYp.l7lLTcpLFv4AJ0"+"&opts=16863&num=10&ts=1523649694696");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
    <!-- end www.htmlcommentbox.com -->

    <div id="disqus_thread"></div>
    <script>

        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://hanstuff.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    </div>
</div>
<?php include ("footer.php"); ?>
</body>

