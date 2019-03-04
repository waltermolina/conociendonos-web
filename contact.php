<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
        <title>Inicio</title>

        <!-- Main Style -->
        <link rel="stylesheet" type="text/css" href="css/contact.css" />

    </head>
    <body>
        <section id="contact" class="lined-paper-background">
            <header>
                <h1>¿Consultas? ¿Sugerencias?</h1>
            </header>
            
            <div class="text">
                <p>Puedes enviarnos un mensaje utilizando el formulario que está a continuación. ¡Te responderemos a la brevedad!</p>
            </div>
            
            <form name="contact" action="" method="post" id="contactForm" onsubmit="validateMail();
                    return false;">
                <div class="leftGroup left">
                    <input id="firstName" name="firstName" type="text" title="First Name" value="" size="30" maxlength="2048" placeholder="Tu nombre">
                    <div class="clr"></div>

                    <input id="lastName" name="lastName" type="text" title="Last Name" value="" size="30" maxlength="2048" placeholder="Tu apellido">
                    <div class="clr"></div>

                    <input id="email" name="email" type="email" title="Email" value="" size="30" maxlength="2048" placeholder="Tu correo">
                    <div class="clr"></div>

                    <input id="phone" name="phone" type="tel" title="Phone" value="" size="30" maxlength="2048" placeholder="Tu teléfono">
                    <div class="clr"></div>
                </div>
                <div class="rightGroup right">
                    <textarea id="message" name="message" placeholder="Tu mensaje"></textarea>
                    <div class="clr"></div>
                </div>
                <div class="clr"></div>
                <div class="fullWidthGroup">
                    <button class="m-btn black right no-margin" type="submit">Enviar Mensaje <i class="icon-share-alt icon-white"></i></button>
                    <div class="result right"></div>
                    <div class="clr"></div>
                </div>
            </form>
            <div class="clr"></div>
            <div id="byMail">
                <p>¿Prefieres utilizar tu correo para contactarnos? Escribenos a <a href="mailto:contacto@conociendonostv.com">contacto@conociendonostv.com</a></p>
            </div>

            <div class="clr"></div>
        </section>
        
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
                            $("#contactForm .result").html('<i class="fa fa-check-circle"></i> Tu mensaje has sido enviado correctamente');
                            $("#contactForm input, #contactForm textarea").each(function(){
                                $(this).val("");
                            })
                        },
                        error: function(data){
                            $("#contactForm .result").removeClass("warning success").addClass("warning");
                            $("#contactForm .result").html('<i class="fa fa-times-circle"></i> Ups! No podemos enviar el mensaje, intenta más tarde.');
                        }
                    });
                }else{
                    $("#contactForm .result").removeClass("warning success").addClass("warning");
                    $("#contactForm .result").html('<i class="fa fa-exclamation-circle"></i> Completa los campos requeridos');
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