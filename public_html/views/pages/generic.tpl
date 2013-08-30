<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Treasure Generator &bull; World of Pannotia</title>
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
            {% include 'elements/form.tpl' %}
            {% if treasure %}
            {% include 'elements/treasure.tpl' %}
            {% endif %}
            </section>
        </section>
        <footer id="page-foot" class="container">
            <p><a href="{{ site_url }}/todo/">To do</a> | <a href="{{ site_url }}/admin/">Admin</a></p>
            <p>&copy; 2007-{{ "now"|date('y', "America/Chicago") }} William Parrott &amp; Chimeric Dream</p>
        </footer>
        <script src="{{ js_path }}/compiled/scripts.min.js"></script>
        <script>
            $('#edition').change(function(){
                showHideEditionInfo();
            });

            function showHideEditionInfo() {
                var val = $('#edition').val();
                if (val == 'Pannotia') {
                    $('.Pathfinder, .DnD30, .DnD35, .DnD40').hide();
                    $('.Pannotia').show();
                } else if (val == 'Pathfinder') {
                    $('.Pannotia, .DnD30, .DnD35, .DnD40').hide();
                    $('.Pathfinder').show();
                } else if (val == 'DnD35' || val == '35') {
                    $('.Pannotia, .DnD30, .Pathfinder, .DnD40').hide();
                    $('.DnD35').show();
                } else {
                    $('.Pannotia, .DnD30, .DnD35, .Pathfinder, .DnD40').hide();
                }
            }
            $(document).ready(function(){
                showHideEditionInfo();
            });
        </script>
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