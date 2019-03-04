<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
        <title>Contact us > FIT4mfg</title>

        <!-- Main Style -->
        <link href='https://fonts.googleapis.com/css?family=Signika+Negative:300,400,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="fonts/fontAwesome/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" href="css/master.css" />
        <link rel="stylesheet" type="text/css" href="css/topBar.css" />
        <link rel="stylesheet" type="text/css" href="css/page.css" />
        <link rel="stylesheet" type="text/css" href="css/contact.css" />

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
        <? include "topBar.php" ?>

        <section id="mainContent">
            <header>
                <h1>Contact us</h1>
            </header>
            <article id="contact">
                <header>
                    <h2>Leave a message</h2>
                </header>
                <div class="body">
                    <form name="contact" action="" method="post" id="contactForm" onsubmit="validateMail(); return false">
                        <div class="leftGroup left">
                            <input id="firstName" name="firstName" type="text" title="First Name" value="" size="30" maxlength="2048" placeholder="First Name">
                            <div class="clr"></div>

                            <input id="lastName" name="lastName" type="text" title="Last Name" value="" size="30" maxlength="2048" placeholder="Last Name">
                            <div class="clr"></div>

                            <input id="email" name="email" type="email" title="Email" value="" size="30" maxlength="2048" placeholder="Email">
                            <div class="clr"></div>

                            <input id="phone" name="phone" type="tel" title="Phone" value="" size="30" maxlength="2048" placeholder="Phone">
                            <div class="clr"></div>
                        </div>
                        <div class="rightGroup right">
                            <textarea id="message" name="message" placeholder="Message..."></textarea>
                            <div class="clr"></div>
                        </div>
                        <div class="clr"></div>
                        <div class="fullWidthGroup">
                            <button class="m-btn rnd black right no-margin" type="submit">Send <i class="icon-share-alt icon-white"></i></button>
                            <div class="result right"></div>
                        </div>
                    </form>
                </div>
                <div class="clr"></div>
            </article>

            <article id="offices">
                <header>
                    <h2>Where we are?</h2>
                </header>
                <div>                
                    <div class="thirdWidth">
                        <header>
                            <h3>North America</h3>
                        </header>
                        <p>Frugally Innovative Technologies</p>
                        <p>Fairfield, Ohio 45011</p>
                        <p>+1 (513) 341 8347</p>
                    </div>
                    <div class="thirdWidth">
                        <header>
                            <h3>Latin America</h3>
                        </header>
                        <p>Frugally Innovative Technologies</p>
                        <p>Villa Mercedes (San Luis), Argentina</p>
                        <p>+54 2657 430897</p>
                    </div>
                    <div class="thirdWidth social">
                        <a href="https://facebook.com/fit4mfg" target="_blank" class="socialLink facebook">
                            <i class="icon-facebook-sign"></i><span>Visit our <span class="bold">Facebook Page</span></span>
                        </a>
                        <a href="https://twitter.com/fit4mfg" target="_blank" class="socialLink twitter">
                            <i class="icon-twitter"></i><span>Follow us on <span class="bold">Twitter</span></span>
                        </a>
                        <a href="mailto:info@fit4mfg.com?Subject=Contact from fit4mfg.com" class="socialLink mail">
                            <i class="icon-envelope-alt"></i><span><span class="bold">info@fit4mfg.com</span></span>
                        </a>
                    </div>
                    <div class="clr"></div>
                </div>
            </article>

        </section>

        <? include "footer.php" ?>

        <script>
            function validateMail(){
                hasError = false;
                emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                
                firstName = $("#firstName").val();
                lastName = $("#lastName").val();
                email = $("#email").val();
                phone = $("#phone").val();
                message = $("#message").val();
                
                if(firstName != "" && lastName != "" && email != "" && emailReg.test(email) && message != ""){ 
                    $.ajax({
                        type: "POST",
                        url: "php/sendMail.php",
                        data:{
                            sfn: firstName,
                            sln: lastName,
                            sm: email,
                            sp: phone,
                            msg: message
                        },
                        success: function(data){
                            $("#contactForm .result").removeClass("warning success").addClass("success");
                            $("#contactForm .result").html('<i class="icon-ok-sign"></i> Your message has been sent');
                            $("#contactForm input, #contactForm textarea").each(function(){
                                $(this).val("");
                            })
                        },
                        error: function(data){
                            $("#contactForm .result").removeClass("warning success").addClass("warning");
                            $("#contactForm .result").html('<i class="icon-exclamation-sign"></i> We can\'t send the message. Try later!');
                        }
                    });
                }else{
                    $("#contactForm .result").removeClass("warning success").addClass("warning");
                    $("#contactForm .result").html('<i class="icon-exclamation-sign"></i> Please fill required fields');
                }
                
                /*
                console.log(firstName);
                console.log(lastName);
                console.log(email);
                console.log(phone);
                console.log(message);
                 */
            }
        </script>
    </body>
</html>
