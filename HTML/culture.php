<?php
Session_start();
?>

<?php include ("chead.php"); ?>

<body  id="myPage">

<?php include ("header.php"); ?>

<div class="jumbotron">
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

    <div class ="col-sm-8">
        <iframe src="images/pdfread.pdf" width ="100%" height ="500px" scrolling ="yes">
        </iframe></div>



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
