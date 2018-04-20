<?php
    Session_start();
?>

<?php include ("lesshead.php"); ?>

<body  id="myPage">

<?php include ("header.php"); ?>

<div class="jumbotron">
    <h1 style = "text-align: center">Advanced Lessons</h1><br>
    <p style = "text-align: center">Explore more complex vocabulary and multiple grammar points</p>
</div>

<div class =" container-fluid">

    <div class ="col-sm-4">
        <div id="flip"><h1 style = "text-align:left">Lessons 43-62</h1></div>
        <div id="panel" style = "text-align:left">
            <h2><u>Lesson 43</u></h2>
            <h2><u>Lesson 44</u></h2>
            <h2><u>Lesson 45</u></h2>
            <h2><u>Lesson 46</u></h2>
            <h2><u>Lesson 47</u></h2>
            <h2><u>Lesson 48</u></h2>
            <h2><u>Lesson 49</u></h2>
            <h2><u>Lesson 50</u></h2>
            <h2><u>Lesson 51</u></h2>
            <h2><u>Lesson 52</u></h2>
            <h2><u>Lesson 53</u></h2>
            <h2><u>Lesson 54</u></h2>
            <h2><u>Lesson 55</u></h2>
            <h2><u>Lesson 56</u></h2>
            <h2><u>Lesson 57</u></h2>
            <h2><u>Lesson 58</u></h2>
            <h2><u>Lesson 59</u></h2>
            <h2><u>Lesson 60</u></h2>
            <h2><u>Lesson 61</u></h2>
            <h2><u>Lesson 62</u></h2>
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
        <iframe src="images/pdfread.pdf" width ="100%" height ="500px" scrolling ="yes">
        </iframe>


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
