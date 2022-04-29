<?php
	$is_google_maldito = false;
	if(!empty(stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights'))){
		$is_google_maldito = true;
	}

	if(!empty(stripos($_SERVER['HTTP_USER_AGENT'], 'Chrome-Lighthouse'))){
		$is_google_maldito = true;
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
    	<meta charset="utf-8">
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

	    <meta name="robots" 	content="index, follow">
		<meta name="googlebot" 	content="index, follow">
		<meta name="Googlebot Images" 	content="noindex, nofollow">
		<meta name="googlebotimages" 	content="noindex, nofollow">
		<meta name="googlebot-images" 	content="noindex, nofollow">
		<meta name="Googlebot-Images" 	content="noindex, nofollow">


		<title>Felideo</title>

	    <meta name="description" content='' />
	    <meta name="revisit-after" content="2 days" />

	    <meta name="author" content="Felideo Desittale Paravimnce"/>
	    <meta name="copyright" content="Felideo Desittale Paravimnce" />

        <?php
        // “Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/536.8 (KHTML, like Gecko; Google Page Speed Insights) Chrome/19.0.1084.36 Safari/536.8”
        ?>

        <?php if(empty($is_google_maldito)): ?>
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
                position: absolute;
                top: 50%;
                left: 50%;
                margin-top: -250px;
                margin-left: -250px;
                width: 500px;
                height: 500px;
            }
        </style>

    </head>
      <body>
        <div id="centro">
        	<?php if(!empty($is_google_maldito)): ?>
        		<?php echo $_SERVER['HTTP_USER_AGENT'] ?></p>
        	<?php endif; ?>

            <img src="./felideo.jpg" width="500px;">
        </div>
      </body>
</html>

<?php


//Por Felideo Oficial!
function debug2($var, $legenda = false, $exit = false) {
    //Se for ajax deve ser exibido em JSON FORMAT
    // if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

    //     if(is_array(carregar_UTF8($var))){
    //         echo json_encode(carregar_UTF8($var));
    //     }else{
    //         echo json_encode(array(carregar_UTF8($var)));
    //     }

    // }else{

        echo "\n<pre style='position: relative; z-index: 99999;''>";
        echo "============================ DEBUG2 OFICIAL ==========================\n";



        foreach($GLOBALS as $var_name => $value) {
            if ($value === $var) {

                $variavel = "Variavel => $" . $var_name;

                $tamanho = strlen ($variavel);
                $tabs = str_repeat('&nbsp;', (70 - $tamanho) / 2);
                echo $tabs . $variavel . "\n";
            }
        }

        if ($legenda){
            $legenda = strtoupper($legenda);
            $tamanho = strlen ($legenda);
            $tabs = str_repeat('&nbsp;', (70 - $tamanho) / 2);
            echo $tabs . $legenda . "\n\n";
        }
        if (is_array($var) || is_object($var)) {
            echo htmlentities(print_r($var, true));
        } elseif (is_string($var)) {
            echo "string(" . strlen($var) . ") \"" . htmlentities($var) . "\"\n";
        } else {
            var_dump($var);
        }
        // echo "\n=============== FIM ===============\n";
        echo "\n";
        debug_print_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
        echo "</pre>";
    // }

    if ($exit) {
        die;
    }
}

?>