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

<div class="jumbotron" style = " background: url(../images/flag.jpg) no-repeat center; background-size: 100% 100%;">
    <h1 style = "text-align: center">Advanced Lessons</h1><br>
    <p style = "text-align: center">Explore more complex vocabulary and multiple grammar points</p>
</div>

<div class =" container-fluid">

    <div class ="col-sm-4">
        <div id="flip"><h1 style = "text-align:left">Lessons 43-62</h1></div>
        <div id="panel" style = "text-align:left">
            <h2><u><a href="<?php get_pdf(43)?>" target="pdfViewer">Lesson 43</a></u></h2>
            <h2><u><a href="<?php get_pdf(44)?>" target="pdfViewer">Lesson 44</a></u></h2>
            <h2><u><a href="<?php get_pdf(45)?>" target="pdfViewer">Lesson 45</a></u></h2>
            <h2><u><a href="<?php get_pdf(46)?>" target="pdfViewer">Lesson 46</a></u></h2>
            <h2><u><a href="<?php get_pdf(47)?>" target="pdfViewer">Lesson 47</a></u></h2>
            <h2><u><a href="<?php get_pdf(48)?>" target="pdfViewer">Lesson 48</a></u></h2>
            <h2><u><a href="<?php get_pdf(49)?>" target="pdfViewer">Lesson 49</a></u></h2>
            <h2><u><a href="<?php get_pdf(50)?>" target="pdfViewer">Lesson 50</a></u></h2>
            <h2><u><a href="<?php get_pdf(51)?>" target="pdfViewer">Lesson 51</a></u></h2>
            <h2><u><a href="<?php get_pdf(52)?>" target="pdfViewer">Lesson 52</a></u></h2>
            <h2><u><a href="<?php get_pdf(53)?>" target="pdfViewer">Lesson 53</a></u></h2>
            <h2><u><a href="<?php get_pdf(54)?>" target="pdfViewer">Lesson 54</a></u></h2>
            <h2><u><a href="<?php get_pdf(55)?>" target="pdfViewer">Lesson 55</a></u></h2>
            <h2><u><a href="<?php get_pdf(56)?>" target="pdfViewer">Lesson 56</a></u></h2>
            <h2><u><a href="<?php get_pdf(57)?>" target="pdfViewer">Lesson 57</a></u></h2>
            <h2><u><a href="<?php get_pdf(58)?>" target="pdfViewer">Lesson 58</a></u></h2>
            <h2><u><a href="<?php get_pdf(59)?>" target="pdfViewer">Lesson 59</a></u></h2>
            <h2><u><a href="<?php get_pdf(60)?>" target="pdfViewer">Lesson 60</a></u></h2>
            <h2><u><a href="<?php get_pdf(61)?>" target="pdfViewer">Lesson 61</a></u></h2>
            <h2><u><a href="<?php get_pdf(62)?>" target="pdfViewer">Lesson 62</a></u></h2>
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
        <iframe name = "pdfViewer" src= 'lesson_pdfs/Lesson43.pdf' width ="100%" height ="500px" scrolling ="yes">
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
</div>
<?php include ("footer.php"); ?>
</body>
