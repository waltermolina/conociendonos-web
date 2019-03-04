<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
        <title>About us > FIT4mfg</title>

        <!-- Main Style -->
        <link href='https://fonts.googleapis.com/css?family=Signika+Negative:300,400,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="fonts/fontAwesome/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" href="css/master.css" />
        <link rel="stylesheet" type="text/css" href="css/topBar.css" />
        <link rel="stylesheet" type="text/css" href="css/page.css" />

        <!-- jQuery Core -->
        <script type="text/javascript" src="js/jquery.min.js"></script>

        <!-- Device Testing -->
        <script type="text/javascript" src="js/deviceQueries.js"></script>

        <!-- MS Modern Buttons -->
        <link rel="stylesheet" type="text/css" href="modernButtons/css/m-styles.min.css" >
        <link rel="stylesheet" type="text/css" href="modernButtons/css/m-custom.css" >

        <!-- KENDO -->
        <!--
        <script src="kendo/js/kendo.all.min.js"></script>
        <link href="kendo/styles/kendo.common.min.css" rel="stylesheet" />
        <link href="kendo/styles/kendo.default.min.css" rel="stylesheet" />
        -->

        <!-- Waypoints -->
        <!--<script type="text/javascript" src="js/waypoints/waypoints.min.js"></script>-->
        <!-- As iOS sucks in viewport scroll rendering, we need another plugin to replace Waypoints:
        ScrollBeacon -->
        <!--<script type="text/javascript" src="js/scrollbeacon/jquery.scrollbeacon.js"></script>-->

        <!-- Slider -->
        <script type="text/javascript" src="js/iosSlider/jquery.easing-1.3.js"></script>
        <script type="text/javascript" src="js/iosSlider/jquery.iosslider.min.js"></script>

        <!-- DateJS -->
        <!--<script src="js/datejs/date.js"></script>-->
        <!-- Include es-AR CultureInfo -->
        <!--<script type="text/javascript" src="js/datejs/date-es-AR.js"></script>-->
    </head>
    <body>
        <? include "topBar.php" ?>
        
        <section id="mainContent">
            <header>
                <h1>About Us</h1>
            </header>
            <article id="company">
                <header>
                    <h2>Company Description</h2>
                </header>
                <div class="body">
                    <p>Frugally Innovative Technologies LLC creates, distributes, and 
                        supports a unique set of manufacturing operations management 
                        software tools via a <span class="bold">SaaS</span> “Software as a Service” or “cloud” delivery 
                        model coupled with industry standard methodologies that <span class="italic">provide 
                        manufacturers the tools and techniques to significantly improve 
                        production performance and optimize routine plant floor activities</span>.</p>
                </div>

                <div id="goals">
                    <header>Our goal</header>
                    <p>Help our customers <span class="italic">increase revenue and market share</span> in an increasingly 
                        competitive global economy through a combination of consulting services, 
                        training, and the use of the FIT4MFG™ software applications.</p>
                </div>
                <div class="clr"></div>
            </article>
            <article id="strengths">
                <header>
                    <h2>Our Strengths</h2>
                </header>
                <div class="fullWidth">
                    <header>
                        <h3>Experience</h3>
                    </header>
                    <ul class="people">
                        <li>
                            <figure>
                                <img src="img/content/danMurphy.jpg"/>
                                <div class="clr"></div>
                            </figure>
                            <div class="description">
                                <h4><span class="bold">Daniel Murphy</span> &middot; <span class="italic chair">President & CEO</span></h4>
                                <p>Has over 20 years of experience in consulting  
                                    and developing manufacturing operations software 
                                    solutions for the largest consumers packaged goods 
                                    manufacturer in the world.</p>
                                <a href="http://www.linkedin.com/in/danielmurphy321" target="_blank" class="m-btn rnd blue linkedInProfile"><i class="icon-linkedin-sign fixIcon"></i> LinkedIn Profile</a>
                            </div>
                            <div class="clr"></div>
                        </li>
                        <li>
                            <figure>
                                <img src="img/content/fernandoRio.jpg"/>
                                <div class="clr"></div>
                            </figure>
                            <div class="description">
                                <h4><span class="bold">Fernando Rio</span> &middot; <span class="italic chair">Vice-President & CTO</span></h4>
                                <p>Has over 15 years of experience in consulting and 
                                    developing manufacturing operations software 
                                    solutions for multiple companies around the world.</p>
                                <a href="http://www.linkedin.com/pub/fernando-rio/12/b28/208" class="m-btn rnd blue linkedInProfile" target="_blank" ><i class="icon-linkedin-sign fixIcon"></i> LinkedIn Profile</a>
                            </div>
                            <div class="clr"></div>
                        </li>
                        <div class="clr"></div>
                    </ul>
                </div>
                <!--
                <div class="middleWidth">
                    <header>
                        <h3>Rapid Return on Investment</h3>
                    </header>
                    <p>
                        Customers can begin using FIT4MFG™ software within minutes 
                        of their purchase. Unlike traditional manufacturing software, 
                        which take several months before a customer can start as they 
                        wait for the actual software to be delivered, and the hardware 
                        and software to be configured. Their Return on Investment is 
                        much faster than standard manufacturing software.
                    </p>

                </div>
                <div class="middleWidth">
                    <header>
                        <h3>No Capital Required</h3>
                    </header>
                    <p>
                        Because the FIT4MFG™ software use cloud technologies, 
                        our customers avoid large upfront capital costs and what 
                        they purchase is only what they actually use. 
                    </p>
                </div>-->
                <div class="clr"></div>
            </article>
        </section>
        
        <? include "footer.php" ?>

    </body>
</html>
