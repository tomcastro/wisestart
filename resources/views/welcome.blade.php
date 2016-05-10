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
            <div class="col s12 m12">
                <h4 class="header text_b">Elige tu rubro</h4>
                <div class="input-field">
                    <select class="browser-default" id="type">
                        <option disabled selected>Elige una opción</option>
                        <option value="bank">Banco</option>
                        <option value="store">Tienda de servicio</option>
                        <option value="car_rental">Car Rental</option>
                        <option value="gym">Gym</option>
                        <option value="pharmacy">Farmacia</option>
                    </select>
                </div>
                <h4>Comuna</h4>
                <select class="browser-default" id="comuna">
                    <option disabled selected>Elige una opción</option>
                    <option>Peñalolen</option>
                </select>
            </div>
            <div class="col s12 m12">
                <div class="card" style="height: 400px">
                    <div id="map" class="card-content" style="height: 400px"></div>
                </div>
            </div>

            
           

        </div>
    </div>
</div>



<!--Parallax-->
<div class="parallax-container">
    <div class="parallax"><img src="img/parallax1.png"></div>
</div>

@include('partials.team')

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