<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#2196F3">
    <title>EmprendeYA!</title>

    <!-- CSS  -->
    <link href="min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="min/custom-min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

</head>
<body id="top" class="scrollspy">

<!-- Pre Loader -->
<div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>

<!--Navigation-->
@include('partials.navbar')

<!--Hero-->
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <h1 class="text_h center header cd-headline letters type">
            <span>Me encanta</span>
            <span class="cd-words-wrapper waiting">
                <b class="is-visible">Innovar</b>
                <b>poner mi negocio</b>
                <b>Peñalolén</b>
                <b>EmprendeYA!</b>
            </span>
        </h1>
    </div>
</div>

<!--Intro and service-->
<div id="intro" class="section scrollspy">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h2 class="center header text_h2"> Con EmprendeYA! encontraras toda la <span
                            class="span_h2"> información</span> territorial que <span class="span_h2"> necesitas</span>
                    antes de <span class="span_h2"> comenzar </span> con tu negocio. </h2>
            </div>

            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-social-public"></i>
                    <h5 class="promo-caption">Información Sectorizada</h5>
                    <p class="light center">Obten la información por sectores de terreno. Nivel de competencia,
                        regulación actual, etc..</p>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-social-group"></i>
                    <h5 class="promo-caption"> Diseñado para emprendedores</h5>
                    <p class="light center">Nustro objetivo es darle a nuevos emprendedores con ganas de instalar algún
                        tipo de negocio toda la información importante que deberían saber antes de tomar alguna
                        decision..</p>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-hardware-desktop-windows"></i>
                    <h5 class="promo-caption">Totalmente Web</h5>
                    <p class="light center">Sin instalaciones de programas dificiles de usar. Diseñado para que el
                        usuario pueda usarlo sin ayuda de terceros.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Work-->
<div class="section scrollspy" id="work">
    <div class="container">
        <h2 class="header text_b">Mapa </h2>
        <div class="row">
            <h4 class="header text_b">Elige tu rubro</h4>

            <div class="input-field">
                <select class="browser-default" id="rubro">
                    <option value="" disabled selected>Elige una opción</option>
                    <option value="1">Taller automotriz</option>
                    <option value="2">Tienda de servicio</option>
                    <option value="3">Restaurante</option>
                </select>
            </div>

            <div class="card" style="height: 500px">
                    <div id="map" class="card-content" style="height: 500px"></div>
            </div>

        </div>
    </div>
</div>

<!--Parallax-->
<div class="parallax-container">
    <div class="parallax"><img src="img/parallax1.png"></div>
</div>

<!--Team-->
<div class="section scrollspy" id="team">
    <div class="container">
        <h2 class="header text_b"> Nuestro equipo </h2>
        <div class="row">
            <div class="col s12 m4">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/stark.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Tomás<br/>
                            <small><em><a class="red-text text-darken-1" href="#">CEO</a></em></small></span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/targaryen.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Feña<br/>
                            <small><em><a class="red-text text-darken-1" href="#">Designer</a></em></small>
                        </span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/michaelbolton.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">
                            Perro Bomba <br/>
                            <small><em><a class="red-text text-darken-1" href="#">CMO</a></em></small></span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m4">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/lannister.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Beltrán<br/>
                            <small><em><a class="red-text text-darken-1" href="#">Developer</a></em></small></span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/mallister.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Lusho<br/>
                            <small><em><a class="red-text text-darken-1" href="#">CEO</a></em></small></span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/martell.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">ALLAHU AKBAR!<br/>
                            <small><em><a class="red-text text-darken-1" href="#">CEO</a></em></small></span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Footer-->
@include('partials.footer')


<!--  Scripts-->
<script src="min/plugin-min.js"></script>
<script src="min/custom-min.js"></script>
<script src="js/gmaps.js"></script>

<script src="js/mapa.js"></script>
<script src="js/searchForPlaces.js"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDa8MJk2VV9QBkzjnEratB11lpuxkcxgyE&libraries=places&callback=initMap">
</script>

</body>
</html>