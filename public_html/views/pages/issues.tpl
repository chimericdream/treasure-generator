<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Known Issues &bull; Treasure Generator &bull; World of Pannotia</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="Content-Script-Type" content="text/javascript">
        <meta http-equiv="Content-Style-Type" content="text/css">
        <meta name="author" content="Bill Parrott">
        <meta name="robots" content="index,follow">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="verify-v1" content="egPuqjqZ8sCHKRVlzOiwixC/6IpPbxxdcuohNchNa0A=">
        <link rel="stylesheet" href="{{ css_path }}/compiled/style.css" type="text/css" media="all">
    </head>
    <body class="{{ bodyclass }}">
        <header id="page-head">
            <h1><a href="{{ site_url }}/"><span>World of Pannotia</span></a></h1>
        </header>
        <section id="content">
            <h2>Treasure Generator</h2>
            <section id="main-content">
                <small>
                    <span class="center">
                        <a href="index.php">Back to the generator</a>
                    </span>
                </small>
                <p>
                    This is more for me than anyone else, but in case you were curious...
                </p>
                <h3>Known Issues</h3>
                <ul>
                    <li>Double weapons currently only get one bonus generated</li>
                    <li>Size adjustments don't work right for specific weapons &amp; armor</li>
                    <li>There is something odd going on with the footer... probably a negative margin gone wrong or something</li>
                </ul>
                <h3>Future Additions</h3>
                <ul>
                    <li>Add epic item generation for high CRs</li>
                    <li>Come up with prices for Draconomicon materials and objects</li>
                    <li>Add book/page number references for items from the Magic Item Compendium</li>
                    <li>Link to spells/items/etc in the SRD or on the Pannotia website</li>
                </ul>
                <small>
                    <span class="center">
                        <a href="index.php">Back to the generator</a>
                    </span>
                </small>
            </section>
        </section>
        <footer id="page-foot" class="container">
            <p><a href="{{ site_url }}/todo/">To do</a> | <a href="{{ site_url }}/admin/">Admin</a></p>
            <p>&copy; 2007-{{ "now"|date('y', "America/Chicago") }} William Parrott &amp; Chimeric Dream</p>
        </footer>
        <script src="{{ js_path }}/compiled/scripts.min.js"></script>
        <script>
            var analyticsFileTypes = ['ods','pdf','doc','txt'];
            var analyticsEventTracking = 'enabled';
        </script>
        <script>
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-9171471-2']);
            _gaq.push(['_trackPageview']);
            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </body>
</html>
