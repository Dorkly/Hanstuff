<?php
Session_start();
?>

<?php include ("lesshead.php"); ?>

<body  id="myPage">

<?php include ("header.php"); ?>

<?php
$currPdfPath = 1;
function get_pdf($number) {
    $currPdfPath = $number;
    $path1 = 'lesson_pdfs/Lesson';
    $path3 = '.pdf';
    $final = $path1.$currPdfPath.$path3;
    $doc = new DomDocument;
    echo $final;
    if ($doc -> getElementById('pdfViewer') != NULL) {
        $doc -> getElementById('pdfViewer') -> setAttribute("src", $final);
    }
}

function complete_lesson() {
    $id_user = $_SESSION['login_user'];
    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO lessons_historyheader (id_history,id_user,id_lessons,lessonCompletedDate) VALUES (null, $id_user, $currPdfPath, $date)";
    mysqli_query($db,$sql);
}
?>

<div class="jumbotron" style = " background: url(../images/rocks.jpg) no-repeat center; background-size: 100% 100%; image-orientation: from-image;">
    <h1 style = "text-align: center">Intermediate Lessons</h1><br>
    <p style = "text-align: center">Continue to build on what you already know with more ways to express yourself</p>
</div>
<div class =" container-fluid">

    <div class = "col-sm-4">
        <div id="flip"><h1 style = "text-align:left">Lessons 13-42</h1></div>
        <div id="panel" style = "text-align:left">
            <h2><u><a href="<?php get_pdf(13)?>" target="pdfViewer">Lesson 13</a></u></h2>
            <h2><u><a href="<?php get_pdf(14)?>" target="pdfViewer">Lesson 14</a></u></h2>
            <h2><u><a href="<?php get_pdf(15)?>" target="pdfViewer">Lesson 15</a></u></h2>
            <h2><u><a href="<?php get_pdf(16)?>" target="pdfViewer">Lesson 16</a></u></h2>
            <h2><u><a href="<?php get_pdf(17)?>" target="pdfViewer">Lesson 17</a></u></h2>
            <h2><u><a href="<?php get_pdf(18)?>" target="pdfViewer">Lesson 18</a></u></h2>
            <h2><u><a href="<?php get_pdf(19)?>" target="pdfViewer">Lesson 19</a></u></h2>
            <h2><u><a href="<?php get_pdf(20)?>" target="pdfViewer">Lesson 20</a></u></h2>
            <h2><u><a href="<?php get_pdf(21)?>" target="pdfViewer">Lesson 21</a></u></h2>
            <h2><u><a href="<?php get_pdf(22)?>" target="pdfViewer">Lesson 22</a></u></h2>
            <h2><u><a href="<?php get_pdf(23)?>" target="pdfViewer">Lesson 23</a></u></h2>
            <h2><u><a href="<?php get_pdf(24)?>" target="pdfViewer">Lesson 24</a></u></h2>
            <h2><u><a href="<?php get_pdf(25)?>" target="pdfViewer">Lesson 25</a></u></h2>
            <h2><u><a href="<?php get_pdf(26)?>" target="pdfViewer">Lesson 26</a></u></h2>
            <h2><u><a href="<?php get_pdf(27)?>" target="pdfViewer">Lesson 27</a></u></h2>
            <h2><u><a href="<?php get_pdf(28)?>" target="pdfViewer">Lesson 28</a></u></h2>
            <h2><u><a href="<?php get_pdf(29)?>" target="pdfViewer">Lesson 29</a></u></h2>
            <h2><u><a href="<?php get_pdf(30)?>" target="pdfViewer">Lesson 30</a></u></h2>
            <h2><u><a href="<?php get_pdf(31)?>" target="pdfViewer">Lesson 31</a></u></h2>
            <h2><u><a href="<?php get_pdf(32)?>" target="pdfViewer">Lesson 32</a></u></h2>
            <h2><u><a href="<?php get_pdf(33)?>" target="pdfViewer">Lesson 33</a></u></h2>
            <h2><u><a href="<?php get_pdf(34)?>" target="pdfViewer">Lesson 34</a></u></h2>
            <h2><u><a href="<?php get_pdf(35)?>" target="pdfViewer">Lesson 35</a></u></h2>
            <h2><u><a href="<?php get_pdf(36)?>" target="pdfViewer">Lesson 36</a></u></h2>
            <h2><u><a href="<?php get_pdf(37)?>" target="pdfViewer">Lesson 37</a></u></h2>
            <h2><u><a href="<?php get_pdf(38)?>" target="pdfViewer">Lesson 38</a></u></h2>
            <h2><u><a href="<?php get_pdf(39)?>" target="pdfViewer">Lesson 39</a></u></h2>
            <h2><u><a href="<?php get_pdf(40)?>" target="pdfViewer">Lesson 40</a></u></h2>
            <h2><u><a href="<?php get_pdf(41)?>" target="pdfViewer">Lesson 41</a></u></h2>
            <h2><u><a href="<?php get_pdf(42)?>" target="pdfViewer">Lesson 42</a></u></h2>

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
        <iframe name = "pdfViewer" src= 'lesson_pdfs/Lesson13.pdf' width ="100%" height ="500px" scrolling ="yes">
        </iframe></div>

    <?php if(isset($_SESSION['login_user'])): ?>
        <div class ="col-sm-8">
            </br><button type="submit" style="float: right" class="btn btn-warning"><a href="<?php complete_lesson()?>">Complete Lesson</button>
        </div>
    <?php endif; ?>

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
