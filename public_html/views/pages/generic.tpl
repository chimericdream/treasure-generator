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
            $('#ruleset').change(function(){
                showHideRulesetInfo();
            });
            $('#DnD_edition').change(function(){
                showHideDnDEditionInfo();
            });

            function showHideRulesetInfo() {
                var val = $('#ruleset').val();
                if (val == 'Pannotia') {
                    $('.Pathfinder, .DnD').hide();
                    $('.Pannotia').show();
                    $('#generate-treasure').show();
                } else if (val == 'Pathfinder') {
                    $('.Pannotia, .DnD').hide();
                    $('.Pathfinder').show();
                    $('#generate-treasure').hide();
                } else if (val == 'DnD') {
                    $('.Pannotia, .Pathfinder').hide();
                    $('.DnD').show();
                } else {
                    $('.Pannotia, .DnD, .Pathfinder').hide();
                    $('#generate-treasure').hide();
                }
            }

            function showHideDnDEditionInfo() {
                var val = $('#DnD_edition').val();
                if (val == '30') {
                    $('.DnD_35_DMG, .DnD_35_MIC, .DnD_40').hide();
                    $('.DnD_30').show();
                    $('#generate-treasure').hide();
                } else if (val == '35_DMG') {
                    $('.DnD_30, .DnD_35_MIC, .DnD_40').hide();
                    $('.DnD_35_DMG').show();
                    $('#generate-treasure').show();
                } else if (val == '35_MIC') {
                    $('.DnD_30, .DnD_35_DMG, .DnD_40').hide();
                    $('.DnD_35_MIC').show();
                    $('#generate-treasure').show();
                } else if (val == '40') {
                    $('.DnD_30, .DnD_35_DMG, .DnD_35_MIC').hide();
                    $('.DnD_40').show();
                    $('#generate-treasure').hide();
                } else {
                    $('.DnD_30, .DnD_35_DMG, .DnD_35_MIC, .DnD_40').hide();
                    $('#generate-treasure').hide();
                }
            }

            $(document).ready(function(){
                showHideRulesetInfo();
                showHideDnDEditionInfo();
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