<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
        <meta name="application-name" content="FIT4mfg"/> 
        <meta name="msapplication-TileColor" content="#222222"/> 
        <meta name="msapplication-TileImage" content="img/icon2.png"/>
        <title>Conociéndonos</title>

        <!-- Main Style -->
        <link href='https://fonts.googleapis.com/css?family=Signika+Negative:300,400,600,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Reenie+Beanie' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="fonts/fontAwesome/css/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" href="css/master.css" />
        <link rel="stylesheet" type="text/css" href="css/index.css" />
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
        <script type="text/javascript" src="js/waypoints/waypoints.min.js"></script>
        <!-- As iOS sucks in viewport scroll rendering, we need another plugin to replace Waypoints:
        ScrollBeacon -->
        <script type="text/javascript" src="js/scrollbeacon/jquery.scrollbeacon.js"></script>

        <!-- Slider -->
        <script type="text/javascript" src="js/iosSlider/jquery.easing-1.3.js"></script>
        <script type="text/javascript" src="js/iosSlider/jquery.iosslider.min.js"></script>

        <!-- DateJS -->
        <!--<script src="js/datejs/date.js"></script>-->
        <!-- Include es-AR CultureInfo -->
        <!--<script type="text/javascript" src="js/datejs/date-es-AR.js"></script>-->
    </head>
    <body>
        <div id="background-stripped-magenta"></div>
        <header id="siteHeader">
            <div id="mainLogo">
                <img src="img/logoConoc.png">
            </div>
            <nav id="mainNav" class="lined-paper-background">
                <ul>
                    <li id="goToStart">Conocenos</li>
                    <li id="goToTeam">El equipo</li>
                    <li id="goToContact">Contacto</li>
                    <!--<li id="goToBlog">Blog</li>-->
                </ul>
                <div id="menuToggle"><i class="fa fa-caret-down"></i></div>
            </nav>
        </header>
        
        <!--MAIN CONTAINER: Here we load content through ajax calls...-->
        <div id="content">
            <div id="main">

            </div>
            <section id="social">
                <article class="thirdWidth socialLink facebook" id="toFace">
                    <header>
                        <h1>Estamos en Facebook</h1>
                    </header>
                    <div class="content">
                        <i class="fa fa-facebook-square"></i> ConociendonosTV
                    </div>
                </article>
                <article class="thirdWidth socialLink twitter" id="toTwitter">
                    <header>
                        <h1>Seguinos en Twitter</h1>
                    </header>
                    <div class="content">
                        <i class="fa fa-twitter"></i> ConociendonosTV
                    </div>
                </article>
                <article class="thirdWidth socialLink youtube" id="toYouTube">
                    <header>
                        <h1>Miranos en YouTube</h1>
                    </header>
                    <div class="content">
                        <i class="fa fa-youtube-play"></i> TVConociendonos
                    </div>
                </article>
                <div class="clr"></div>
            </section>
        </div>
        
        
        <!-- If posible, keep JS files before </body> tag -->
        <script>
            
            var theArgs;
            
            function resizeIndex() {
                toggleMenu();
            }
            $(window).resize(resizeIndex);
            
            function slideUpMenu(){
                var ulHeight = $("#mainNav > ul").outerHeight(true);
                console.log(ulHeight);
                ulHeight = -ulHeight - 25;
                $("#mainNav").css("top",(ulHeight)+"px");
                $("#menuToggle > i").removeClass("fa-caret-up").addClass("fa-caret-down")
            }
            function slideDownMenu(){
                $("#mainNav").css("top","0px");
                $("#menuToggle > i").removeClass("fa-caret-down").addClass("fa-caret-up")
            }
            function toggleMenu(){
                if(window.innerWidth <= 480){
                    slideUpMenu()
                } else {
                    slideDownMenu()
                }
            }
            
            
            $(document).ready(function() {
                
                $("#mainNav > ul > li").click(function(){
                    $(this).addClass("selected");
                    $(this).siblings("li").removeClass("selected");
                });
                $("#goToStart").click(function(){
                    $("#main").load("start.php");
                });
                $("#goToTeam").click(function(){
                    $("#main").load("team.php");
                });
                $("#goToContact").click(function(){
                    $("#main").load("contact.php");
                });
                
                $("#menuToggle").click(function(){
                    if($(this).hasClass("open")){
                        $(this).removeClass("open");
                        slideUpMenu()
                    } else {
                        $(this).addClass("open");
                        slideDownMenu()
                    }
                });
                
                
                //SOCIAL
                $("#toFace").click(function(){
                    window.open("http://facebook.com/ConociendonosTV");
                });
                $("#toTwitter").click(function(){
                    window.open("http://twitter.com/ConociendonosTV");
                });
                $("#toYouTube").click(function(){
                    window.open("http://youtube.com/TVConociendonos");
                });
                
                //START!
                $("#goToStart").click();
                
                resizeIndex();
            });
            
            
        </script>
        <!--<script type='text/javascript' src='http://www.buildmypinnedsite.com/script/v1.0/634952335011239575.js'></script>-->
        
        <!--<article>
                <div id="teamPhoto">
                    <img src="http://lorempixel.com/500/300">
                </div>
                <div class="clr"></div>
            </article>-->
            <!--<article>
                <div class="folder-back-group">
                    <div class="folder-label">Título de la Etiqueta</div>
                    <div class="clr"></div>
                    <div class="folder-back"></div>
                </div>
                <div class="folder-front">
                    
                    
                    
                </div>
            </article>-->
        
    </body>
</html>
