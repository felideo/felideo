<?php
	header('HTTP/1.0 404 Not Found', true, 404);

	if(isset($_SERVER['HTTP_VIA']) && !empty($_SERVER['HTTP_VIA']) && !empty(stripos($_SERVER['HTTP_VIA'], 'archive'))){
		echo 'Error';
		exit;
	}

	if(!empty(stripos($_SERVER['HTTP_USER_AGENT'], 'archive'))){
		echo 'Error';
		exit;
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
    	<meta charset="utf-8">
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

        <meta name="robots" 	content="noindex, nosnippet, noimageindex, nofollow">
		<meta name="googlebot" 	content="noindex, nosnippet, noimageindex, nofollow">

		<title>Error felideo</title>

	    <meta name="description" content='A ironia, do paradoxo, da antítese, ambígua.' />
	    <meta name="revisit-after" content="2 days" />

	    <meta name="author" content="Felideo Desittale Paravimnce"/>
	    <meta name="copyright" content="Felideo Desittale Paravimnce" />

        <?php
        // “Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/536.8 (KHTML, like Gecko; Google Page Speed Insights) Chrome/19.0.1084.36 Safari/536.8”
        ?>

        <?php if(!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>
    		<script>
    			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    			  ga('create', 'UA-36899868-1', 'auto');
    			  ga('send', 'pageview');
    		</script>
        <?php endif; ?>


        <style>
            body {
                background: #000000;
                color: #FFFFFF;
                font-size: 50px;
                text-align: center;
            }

            #centro {
            	position: relative;
            	width: 50%;
            	left: 25%;
            }

            #centro img{
            	height: 95vh;
            }
        </style>

    </head>
      <body>
        <div id="centro">
            <img src="./you-shall-not-pass.jpg">
        </div>
      </body>
</html>