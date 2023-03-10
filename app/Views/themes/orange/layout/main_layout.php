<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="{THEMES_PAGE}/assets/css/normalize.min.css">
    <link rel="stylesheet" href="{THEMES_PAGE}/assets/css/main.css">

    <script src="{THEMES_PAGE}/assets/js/modernizr-2.6.1-respond-1.1.0.min.js"></script>
</head>

<body>
    <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

    {!HEADER_SECTION!}

    <div class="main-container">
        {!BODY_SECTION!}
    </div>

    <div class="footer-container">
        {!FOOTER_SECTION!}
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script>
    window.jQuery || document.write('<script src="{THEMES_PAGE}/assets/js/vendor/jquery-1.8.0.min.js"><\/script>')
    </script>

    <script src="{THEMES_PAGE}/assets/js/main.js"></script>

    <script>
    var _gaq = [
        ['_setAccount', 'UA-11028046-9'],
        ['_trackPageview']
    ];
    (function(d, t) {
        var g = d.createElement(t),
            s = d.getElementsByTagName(t)[0];
        g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g, s)
    }(document, 'script'));
    </script>
</body>

</html>