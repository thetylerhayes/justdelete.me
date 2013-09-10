<?php
$sites = json_decode(file_get_contents('sites.json'));
usort($sites, function($a, $b) {
    list($a, $b) = array(strtolower($a->name), strtolower($b->name));
    if ($a < $b) return -1;
    if ($a > $b) return 1;
    return 0;
}); ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Medical Data Me | A directory of direct links to download your health record.</title>
    <meta charset="UTF-8">
    <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="A directory of direct links to delete your account from web services. Find out how to delete your Facebook, Twitter, LinkedIn accounts and more.">

    <!-- Icons -->
    <link rel="shortcut icon" href="inc/icons/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="inc/icons/apple-touch-icon-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="inc/icons/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="inc/icons/apple-touch-icon-120x120-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="inc/icons/apple-touch-icon-144x144-precomposed.png">

    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="inc/jquery.js"></script>
    <script src="inc/scripts.js"></script>

</head> 
<body>

    <!-- Facebook Like Button SDK -->
    <div id="fb-root"></div>

    <header>
        <h1>medical<span>data</span>.me</h1>
        <p class="tagline">A directory of direct links to download your health record.</p>
    </header>

    <div id="test">
    </div>
    <div class="search">
        <div class="search-container">
            <input type="text" id="search">
            <a href="#">search</a>
        </div>
    </div>
    <section class="main">      
        <section class="sites" id="sites">

            <p class="no-results">Can't find what you're looking for? <a href='http://github.com/thetylerhayes/medicaldata.me'>Help make medicaldata.me better</a>.</p>

            <!-- // FIRST FOR EACH -->

            <?php foreach ($sites as $site) : ?><section class="site-block <?php echo $site->format; ?>">
                    <a class="site-header" href="<?php echo $site->url; ?>">
                        <?php echo $site->name; ?>
                    </a>
                    <p class="site-format">
                        Format: <?php echo $site->format; ?>
                    </p>
                    <?php if (isset($site->notes)) : ?>
                        <div class="tooltip-content">
                            <?php echo $site->notes; ?> 
                        </div>
                        <a href="#" class="tooltip-toggle contains-info">Show Info...</a>
                    <?php else : ?>
                        <p class="tooltip-toggle">No Info Available</p>
                    <?php endif; ?>
                </section><?php endforeach; ?>

        </section>
    </section>
    <section class="info-block">
        <div class="info-container">

            <div class="info-block-half">
                <h2>What is this?</h2>
                <p>Health records made available to patients by health care providers are often difficult or impossible to download. MedicalData.me aims to be a directory of links to enable you to easily download your health record from your healthcare provider(s).</p>
                <p>Got a provider you think should be added? <a href="https://github.com/thetylerhayes/medicaldata.me">Fork the project on GitHub</a> or <A HREF="mailto:tyler@stayinyourprime.com">email Tyler</a>.</p>
                <ul>
                    <li><a href="https://hackpad.com/Can-you-download-your-health-record-DN76Z4LXgnB" target="_blank">Check out the original crowdsourced hackpad &raquo;</a></li>
                    <li><a href="http://chartbeat.com" target="_blank">See current site traffic &raquo;</a></li>
                </ul>
            </div><div class="info-block-half">
                <h2>Guide</h2>
                <p>The links above are color-coded to indicate not just the file format of health record but also the difficulty in downloading it:</p>
                <ul>
                    <li><span class="blue">Blue:</span> <strong>Blue Button</strong>. Easy to download and read. Fully transmittable between providers and apps. <a href="http://en.wikipedia.org/wiki/The_Blue_Button">Learn more &raquo;</a></li>
                    <li><span class="green">Green:</span> <strong>CCDA</strong>. Easy to moderately easy to download and read. <a href="http://en.wikipedia.org/wiki/Clinical_Document_Architecture">Learn more &raquo;</a></li>
                    <li><span class="yellow">Yellow:</span> <strong>Human-readable text or PDF</strong>. Moderately easy to moderately difficult to download and read.</li>
                    <li><span class="red">Red:</span> <strong>None</strong>. Unable to download or, if download is available, format is not human-readable.</li>
                    <li><span class="black">Black:</span> <strong>Unknown</strong>. Help us add information to the list.</li>
                </ul>
            </div>  
            
            <footer>
                <span>Project code originally written by <a href="http://robblewis.me">Robb Lewis</a> | Designed by <a href="http://edpoole.me">Ed Poole</a> | This site forked by from <a href="http://github.com/rmlewisuk/justdelete.me">GitHub</a> by <a href="http://madebytyler.com">Tyler Hayes</a></span>
                <div class="share-buttons" id="share buttons">
                <!-- Twitter -->
                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://medicaldata.me">Tweet</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                <!-- Facebook -->
                    <div class="fb-like" data-href="http://medicaldata.me" data-width="450" data-colorscheme="dark" data-layout="button_count" data-show-faces="false" data-send="false"></div>

                </div>
            </footer>
        </div>      
    </section>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-318582-30', 'medicaldata.me');
        ga('send', 'pageview');
    </script>
</body>
</html>