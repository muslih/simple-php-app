<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Unlam PNPB</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <!-- <link href='http://fonts.googleapis.com/css?family=Armata' rel='stylesheet' type='text/css'> -->
        <link rel="stylesheet" href="public/css/style.css">

        <script src="public/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        <div class="bungkus">
            <div id="kotak" class="baris">    
                <!-- <div class="baris"> -->
                    <div class="zeen-4">
                        <!-- masukan aside -->
                        <?php include 'view/aside.php'; ?>
                    </div>
                    <div class="zeen-8">
                        <!-- masukan section -->
                        <?php include 'view/section.php'; ?>
                    </div>
                <!-- </div> -->
            </div>
            <!-- masukan footer -->
            <?php include 'view/footer.php'; ?>
        </div><!-- bungkus -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="public/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="public/js/plugins.js"></script>
        <script src="public/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
