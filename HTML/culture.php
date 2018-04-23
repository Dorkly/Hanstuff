<?php
Session_start();
?>

<?php include ("chead.php"); ?>

<body  id="myPage">

<?php include ("header.php"); ?>

<?php
$currPdfPath = 1;
function get_pdf($number) {
    $currPdfPath = $number;
    $path1 = 'culture_pdfs/Culture';
    $path3 = '.pdf';
    $final = $path1.$currPdfPath.$path3;
    $doc = new DomDocument;
    echo $final;
    if ($doc -> getElementById('pdfViewer') != NULL) {
        $doc -> getElementById('pdfViewer') -> setAttribute("src", $final);
    }
}
?>

<div class="jumbotron" style = " background: url(../images/food.jpg) no-repeat center; background-size: 100% 100%;">
    <h1 style = "text-align: center">Culture</h1><br>
    <p style = "text-align: center">come learn about all things Korea!</p>
</div>

<div class =" container-fluid">

    <div class ="col-sm-4">
        <div id="flip"><h1 style = "text-align:left">Food</h1></div>
        <div id="panel" style = "text-align:left">
            <h2><u><a href="<?php get_pdf(1)?>" target="pdfViewer">Street Food</a></u></h2>
            <h2><u><a href="<?php get_pdf(2)?>" target="pdfViewer">Traditional Tea House</a></u></h2>
            <h2><u><a href="<?php get_pdf(3)?>" target="pdfViewer">Convenience Store Food</a></u></h2>
        </div>

        <div id="flip2"><h1 style = "text-align:left">Entertainment</h1></div>
        <div id="panel2" style = "text-align:left">
            <h2><u><a href="<?php get_pdf(4)?>" target="pdfViewer">Kpop</a></u></h2>
            <h2><u><a href="<?php get_pdf(5)?>" target="pdfViewer">Trot Music</a></u></h2>
            <h2><u><a href="<?php get_pdf(6)?>" target="pdfViewer">Kdramas</a></u></h2>
        </div>

        <div id="flip3"><h1 style = "text-align:left">Communication</h1></div>
        <div id="panel3" style = "text-align:left">
            <h2><u><a href="<?php get_pdf(7)?>" target="pdfViewer">Greetings in Korea</a></u></h2>
            <h2><u><a href="<?php get_pdf(8)?>" target="pdfViewer">How to Respond to Compliments</a></u></h2>
            <h2><u><a href="<?php get_pdf(9)?>" target="pdfViewer">Korean Taxis</a></u></h2>
        </div>
    </div>

    <div class ="col-sm-8">
        <iframe name = "pdfViewer" src= 'culture_pdfs/Culture1.pdf' width ="100%" height ="500px" scrolling ="yes">
        </iframe></div>

    <?php if(isset($_SESSION['login_user'])): ?>
        <div class ="col-sm-8">
            </br><button type="submit" style="float: right" class="btn btn-warning"><a href="<?php complete_lesson()?>">Complete Lesson</button>
        </div>
    <?php endif; ?>


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
<?php include ("footer.php"); ?>
</body>
