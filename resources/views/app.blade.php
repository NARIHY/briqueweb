<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="bootstrap4/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styles/index.css">
<link rel="stylesheet" type="text/css" href="styles/index2.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" href="styles/fontawesome-web/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


@yield("style")
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
<title>BriqueWeb - Agence de communication digitale</title>
<meta content="Brique Web est une agence web qui propose des services tels que la création de site internet,creation des application, le référencement organique, le design et le graphisme" name="description">
  <meta content="" name="keywords">
  <style>
    ul li{
      margin: 0 32px 0 32px !important;
    }
    .bw-image-slider{
      margin-top: 24%;
    }
    .bw-btn-slider{
      margin: 180px 0px 0px 180px;
    }
    .bw-reseau{
      transform: rotate(90deg);
    position: relative;
    left: 55%;
    top: 74px;
    }
    .bw-square{
      width: 43%;
    border: solid #ffc107;
    height: 90%;
    position: absolute;
    left: 63%;
    top: -29%;
    }
    #bw-titre{
      color: #de9f32;
    font-size: 84px;
    position: relative;
    left: 81px;
    top: 85px;
    }
    .bw-mt{
      margin-top: 26px !important;
    }
    #footer{
      background-color: #3C3C3C;
      width: 100%;
      color: #fff;
      bottom: 0;
      padding: 5%
    }

    #footer li{
      list-style: none
    }

  </style>
</head>
<body>
@yield("header")

<header>
  <nav class="navbar navbar-expand-sm fixed-top">

    <button class="navbar-toggler d-lg-none" style="outline: none; background-color: transparent;" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon fa-solid fa-bars" style="color: white;cursor: pointer;"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavId">
      <ul class="navbar-nav">
        <li>
          <a class="navbar-brand mx-auto" href="{{route('Public.home')}}"><img style="height: 78px;" src="images/logo_.png" alt=""></a>
        </li>
        <li class="nav-item active bw-mt">
          <a class="nav-link" href="{{route('Public.home')}}">Service</a>
        </li>
        <li class="nav-item desactive bw-mt">
          <a class="nav-link" href="{{route('Public.propos')}}">A-propos</a>
        </li>
        <!--li class="nav-item desactive bw-mt">
          <a class="nav-link" href="{{route('Public.service')}}">Service</a>
        </li-->
        <li class="nav-item desactive bw-mt">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item desactive bw-mt">
          <a class="nav-link" href="{{route('Public.contact')}}">Contact</a>
        </li>
        <li class="nav-item desactive bw-mt">
          <a class="nav-link" href="{{route('Public.realisation')}}">Nos realisation</a>
        </li>
        <li class="nav-item desactive bw-mt">
          <a class="nav-link" href="contact.html"><i class="fa-solid fa-phone fa-2x"></i></a>
        </li>
        <li class="nav-item desactive bw-mt">
          <a class="nav-link" href="contact.html"><i class="fa-solid fa-cart-shopping fa-2x" ></i></a>
        </li>
      </ul>
      {{-- <a class="login" href="" style="margin-top: -15px;"><i style="color: white;" class="fas fa-sign-in-alt"></i></a> --}}
    </div>
  </nav>
  <div class="chat">
      <i class="fa-brands fa-facebook-messenger mess"></i>
  </div>
</header>
@yield('slider')
<div class="">
  @yield('content')
</div>


{{--//footer--}}
<div class="container-fluid" id="footer">
  <div class="row">
    <div class="col-md-6">
       <h2>Contact Nous</h2>

          <h6><i class="fa-solid fa-envelope"></i> contact@briqueweb.com</h6>
          <h6><i class="fa-solid fa-phone"></i> +261340589197</h6>
          <h6><i class="fa-solid fa-location-dot"></i> Lot III A 97A Mahamasina Antananarivo 101, Madagascar</h6>

    </div>
    <div class="col-md-6">
      <h2>Suivez Nous</h2>
          <h6><i class="fab fa-facebook"></i> Facebook</h6>
          <h6><i class="fab fa-instagram"></i> Instagram</h6>
          <h6><i class="fab fa-pinterest"></i> Pinterest</h6>

    </div>

  </div>
  <p style="text-align: center; border-top:  1px dashed #a9a9a9; margin-top: 2%; font-weight: bold; font-size: 18px">© 2023 Briqueweb</p>
</div>

{{--<footer style="padding: 10px 0 0px 0;width: 100%;height: 100%; background-color: rgba(0, 0, 0, 0.555);">--}}
  {{--<div class="container" style="padding-bottom: 50px;">--}}
    {{--<div class="row container" style="padding-top: 25px;">--}}
      {{--<div class="col-lg-4">--}}
        {{--<h3 style="color: white;">--}}
          {{--Brique<strong style="color: orange">Web</strong>--}}
        {{--</h3>--}}
        {{--<p style="color: grey; font-size: 14px; line-height: 20px; word-spacing: 1.9px;">--}}
          {{--Nous proposons également des services de parrainage qui améliorent le positionnement et la visibilité de votre site Web sur les pages de résultats des moteurs de recherche ou des annuaires. Il augmente non seulement le nombre de visites sur votre site, mais augmente également sa popularité et sa visibilité, et communique en ligne avec de nouveaux groupes cibles d'internautes.--}}
        {{--</p>--}}
        {{--<div style="margin-left: 30px;" class="row">--}}
          {{--<h6 style="margin-right: 30px;">--}}
             {{--<a href="https://www.facebook.com/briqueweb/" target=_blank class="fb"style="color: white;font-size: 30px;">--}}
            {{--<i class="fa-brands fa-facebook"style="color: #3b5998"></i>--}}
        {{--</a>--}}
          {{--<h6 style="margin-right: 30px;">--}}
            {{--<a href="https://www.linkedin.com/in/briqueweb/" target=_blank class="link"style="color: white;font-size: 30px;">--}}
          {{--<i class="fa-brands fa-linkedin"style="color: #0072b1"></i>--}}
        {{--</a>--}}
          {{--</h6>--}}
        {{--</div>--}}
      {{--</div>--}}
      {{--<div class="col-lg-3">--}}
        {{--<h3 style="color: white;">Contact us<strong style="color: orange;">.</strong></h3>--}}
        {{--<div style="margin-top: -5px;width: 40px; height: 4px;background-color: orange;"></div>--}}
        {{--<div class="count" style="margin-top: 10px;">--}}
          {{--<h6>--}}
            {{--<span class="fa-solid fa-envelope span"></span>contact@briqueweb.com--}}
          {{--</h6>--}}
          {{--<h6>--}}
            {{--<span class="fa-solid fa-phone span"></span>+261 34 05 891 97--}}
          {{--</h6>--}}
          {{--<h6>--}}
            {{--<span class="fa-brands fa-skype span"></span>Brique Web--}}
          {{--</h6>--}}
        {{--</div>--}}
      {{--</div>--}}
      {{--<div class="col-lg-3">--}}
        {{--<h3 style="color: white;">A propos<strong style="color: orange;">.</strong></h3>--}}
        {{--<div style="margin-top: -5px;width: 40px; height: 4px;background-color: orange;"></div>--}}
        {{--<style>--}}
          {{--.footer_l{--}}
            {{--margin-top: 10px;--}}
          {{--}--}}
          {{--.footer_l a{--}}
            {{--color: grey;--}}
          {{--}--}}
          {{--.footer_l a:hover{--}}
            {{--text-decoration: none;--}}
            {{--color: grey;--}}
          {{--}--}}
        {{--</style>--}}
        {{--<div class="footer_l">--}}
          {{--<a href="#Nous_sommes">Qui somme nous</a><br>--}}
          {{--<a href="a-propos.html">Notre équipe</a><br>--}}
          {{--<a href="legal.html">Mention légal</a>--}}
        {{--</div>--}}
      {{--</div>--}}
      {{--<div class="col-lg-2">--}}
        {{--<h3 style="color: white;">S'abonnez<strong style="color: orange;">.</strong></h3>--}}
        {{--<div style="margin-top: -5px;width: 40px; height: 4px;background-color: orange;"></div>--}}
        {{--<form method="" action="">--}}
        {{--<input type="email" name="" style="background-color: transparent;border: 1px solid grey;border-radius: 10px; margin-top: 15px;outline: none;color: white;height: 40px;padding-left: 8px">--}}
        {{--<input type="submit" name="" value="Envoyer" style="background-color: white; color: grey;font-weight: 900;border-radius: 10px;margin-top: 10px;outline: none;">--}}
      {{--</form>--}}
      {{--</div>--}}
    {{--</div>--}}
  {{--</div>--}}
  {{--<div style="height: 28px; width: 100%; background-color: rgb(29, 29, 29)">--}}
    {{--<div class="footer_" style="text-align: center;">--}}
      {{--<p style="color: grey;font-size: 13px;padding-top: 5px;">--}}
        {{--©2022 Briqueweb tous droits reserves <a href="legal.html" style="color: cyan;">Contact Mentions legal CGU</a>--}}
      {{--</p>--}}
    {{--</div>--}}
  {{--</div>--}}
{{--</footer>--}}

  <!-- Modal -->
  <div class="modal fade " style="top: 15%;bottom: 15%; "id="exampleModal3" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="false">
    <div class="modal-dialog col-lg-12 mod2" style="opacity:0.9;">
        <div >
          <div class="single-services">
              <div class="border shadow col-lg-12 col-md-12 col-sm-12" style="border-radius: 15px;">
                <div style="margin-top:3%;border-radius: 5px;"class="border-titre shadow col-md-12 col-sm-12 col-xs-12">
                  <div class="section-headline services-head text-center">
                    <h6>DEVELOPPEMENT D'APPLICATION MOBILE</h6>
                  </div>
                </div>
                  <div class=" about-move">
                    <div class="services-details">
                      <div class="single-services">
                        <p  style="text-align: justify">
                          <div class="single-services" data-toggle="modal" data-target="#exampleModal3">
                            <a class="services-icon" href="#">
                            <!-- WINDOWS MOBILE APPLICATIONS -->
                              <div class="grid--cell">
                                <div class="animation-wrapper animation-wrapper--win-mobile-app-bg">
                                  <!-- Device BG -->
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300" class="absolute win-mobile">
                                    <path stroke="#000" stroke-width="10" stroke-miterlimit="10" d="M100 50h100v200H100z" stroke-linejoin="round" />
                                    <path d="M100 50h100v200H100z" />
                                    <path fill="#333" d="M134.28 143.18l32.53 32.53-5.6 5.7-32.5-32.5zm-8.48 8.48l26.86 26.87-5.65 5.66-26.8-26.9zm11.3-11.3l36.78-36.78 2.83 2.83-36.7 36.8zm5.67 5.64l45.25-45.24 2.83 2.83-45.25 45.2zm5.65 5.67l13.43-13.43 2.83 2.83-13.44 13.43zm5.66 5.65l18.38-18.38 2.83 2.83-18.4 18.38z"/>
                                    <path fill="#7F807F" d="M122.13 146.9c.6.6.22.9-.23 1.35l-1.9 1.9-3.2 3.2c-.4.4-1.12-.44-1.22-.78-.1-.33.33-.6.53-.8l1.8-1.8-8.1-8.15-.8 3.3c-.3 1-1.4-.12-1.3-.78 0-.35.2-.76.3-1.1.2-1 .44-1.97.65-2.95.05-.4 1.07-1.6 1.44-1.2.26.2.5.4.7.7l3.3 3.3 5.4 5.4 1.96-2c.27-.3.68.1.88.3.1.1-.1-.1 0 0zm4.1-13.76c2.56 2.55 4.8 6.27 1.73 9.36-3.08 3.1-6.6.6-9.1-1.9-2.53-2.53-4.8-6.27-1.72-9.35 3.1-3.1 6.6-.6 9.1 1.9.82.8-.9-.9 0 0zm-1.35 1.56c-1.6-1.6-4.44-4.4-6.66-2.2-2.15 2.16.42 4.96 2 6.55 1.42 1.4 4 4.1 6.17 2.6 2.9-2 .2-5.2-1.6-6.95zm4-6.68c.62.62.72 1.16.07 1.8-.66.67-1.2.57-1.82-.06-.64-.64-.77-1.17-.1-1.84.67-.67 1.2-.54 1.84.1.18.18-.2-.2 0 0zm5.74 5.75c.63.63.74 1.17.1 1.82-.68.6-1.2.5-1.84-.1-.63-.7-.75-1.2-.1-1.9.67-.7 1.22-.6 1.84.1.2.1-.18-.2 0 0zm6.64-11c2.37 2.36 1.2 5.56-1.1 7.5-.66.55-2.4 1.9-3.33 1.4-.32-.18-.8-.57-.9-.93-.16-.47 1.06-.63 1.35-.74 2.23-.9 5.22-4.1 2.18-6.04-2.05-1.3-4 .88-5.35 2.22-.4.47-1.6-.64-1.1-1.1.2-.34.7-.7 1-.95.9-.88 1.5-2.13 1-3.36-.4-1.24-1.8-2.1-3.1-1.52-1.2.54-1.8 1.8-2.1 3-.05.25-.1 1.2-.53 1.04-.47-.2-.97-.8-.97-1.3-.05-2.3 2.6-5 4.8-5.1 1.46-.1 2.8 1 3.46 2.2.63 1.2.4 2.4-.2 3.5 1.5-1.2 3.64-1.4 5.05 0 .5.5-.32-.36 0 0zm6.72-11.37c2.55 2.55 4.8 6.27 1.72 9.36-3.08 3.08-6.6.6-9.1-1.9-2.53-2.54-4.8-6.28-1.72-9.35 3.1-3 6.6-.6 9.1 1.9zm-1.36 1.55c-1.6-1.6-4.44-4.4-6.65-2.2-2.16 2.16.42 4.97 2 6.56 1.4 1.4 4 4.1 6.16 2.7 2.93-2 .23-5.2-1.5-6.9-.54-.5.4.4 0 0z"/>
                                  </svg>

                                  <!-- Home screen -->
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300" class="absolute win-mobile win-mobile--home">

                                    <!-- BG -->
                                    <path d="M100 50h100v200H100z" class="absolute win-mobile win-mobile--home-bg" />

                                    <!-- 1st row -->
                                    <g class="absolute win-mobile win-mobile--home-row-01">
                                      <path fill="#0056A7" d="M100 61h32v32h-32zm0 34h66v32h-66z" />
                                      <path fill="#7A3293" d="M100 129h32v32h-32z" />
                                      <path fill="#399743" d="M100 163h15v15h-15zm17 0h15v15h-15zm-17 17h15v15h-15zm17 0h15v15h-15z" />
                                      <path fill="#0056A7" d="M100 197h66v32h-66zm0 34h15v15h-15zm17 0h15v15h-15z" />
                                    </g>

                                    <!-- 2nd row -->
                                    <g class="absolute win-mobile win-mobile--home-row-02">
                                      <path fill="#7A3293" d="M134 61h32v32h-32z" />
                                      <path d="M134 129h32v32h-32z" class="win-mobile--home-shortcut" />
                                      <path fill="#0056A7" d="M134 163h32v32h-32zm0 68h15v15h-15zm17 0h15v15h-15z" />
                                    </g>

                                    <!-- 3rd row -->
                                    <g class="absolute win-mobile win-mobile--home-row-03">
                                      <path fill="#7A3293" d="M168 61h32v32h-32z" />
                                      <path fill="#F57929" d="M168 95h32v32h-32z" />
                                      <path fill="#0056A7" d="M168 163h32v32h-32zm0 34h32v32h-32zm0 34h32v15h-32z" />
                                      <path fill="#399743" d="M168 129h15v15h-15zm17 0h15v15h-15zm-17 17h15v15h-15zm17 0h15v15h-15z" />
                                    </g>
                                  </svg>

                                  <!-- Mobile app -->
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300" class="absolute win-mobile win-mobile--app-01">
                                    <!-- BG -->
                                    <path d="M100 50h100v200H100z" class="win-mobile--app-01--bg" />

                                    <!-- App screen 01 icons -->
                                    <g class="absolute win-mobile win-mobile--app-01-icons">
                                      <path d="M108 94h22v22h-22z" class="win-mobile--app-01--icons--shortcut-01" />
                                      <path d="M108 184h22v22h-22z" class="win-mobile--app-01--icons--shortcut-02" />

                                      <g fill="#fff" opacity="0.2">
                                        <path d="M108 64h22v22h-22z" />
                                        <path d="M138 64h54v7h-54z" />
                                        <path d="M138 75h54v4h-54zM138 82h54v4h-54z" />

                                        <path d="M138 94h54v7h-54z" />
                                        <path d="M138 105h54v4h-54zM138 112h54v4h-54z" />

                                        <path d="M108 124h22v22h-22z" />
                                        <path d="M138 124h54v7h-54z" />
                                        <path d="M138 135h54v4h-54zM138 142h54v4h-54z" />

                                        <path d="M108 154h22v22h-22z" />
                                        <path d="M138 154h54v7h-54z" />
                                        <path d="M138 165h54v4h-54zM138 172h54v4h-54z" />

                                        <path d="M138 184h54v7h-54z" />
                                        <path d="M138 195h54v4h-54zM138 202h54v4h-54z" />

                                        <path d="M108 214h22v22h-22z" />
                                        <path d="M138 214h54v7h-54z" />
                                        <path d="M138 225h54v4h-54z" />
                                      </g>
                                    </g>
                                  </svg>

                                  <!-- App screen 02 icons -->
                                  <div class="absolute win-mobile win-mobile--app-02">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                                      <rect width="100" height="200" x="100" y="50" fill="#000000" />
                                      <g fill="#4D4D4D">
                                        <rect width="22" height="22" x="139" y="64" />
                                        <rect width="22" height="22" x="170" y="64" class="win-mobile--app-02--button_03" />
                                        <rect width="22" height="22" x="108" y="64" />
                                        <rect width="22" height="22" x="139" y="94" class="win-mobile--app-02--button_04" />
                                        <rect width="22" height="22" x="170" y="94" />
                                        <rect width="22" height="22" x="108" y="94" class="win-mobile--app-02--button_01" />
                                        <rect width="22" height="22" x="139" y="124" />
                                        <rect width="22" height="22" x="170" y="124" />
                                        <rect width="22" height="22" x="108" y="124" />
                                        <rect width="22" height="22" x="139" y="154" />
                                        <rect width="22" height="22" x="170" y="154" />
                                        <rect width="22" height="22" x="108" y="154" class="win-mobile--app-02--button_05" />
                                        <rect width="22" height="22" x="139" y="184" class="win-mobile--app-02--button_02" />
                                        <rect width="22" height="22" x="170" y="184" class="win-mobile--app-02--button_06" />
                                        <rect width="22" height="22" x="108" y="184" />
                                      </g>
                                    </svg>
                                  </div>

                                  <!-- Device decoration -->
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300" class="absolute win-mobile">
                                    <path d="M100 50h100v11H100zm0 182h100v18H100z" />
                                    <rect width="8" height="5" x="104" y="53" fill="#333" />
                                    <rect width="8" height="5" x="188" y="53" fill="#333" />
                                    <!-- Back button -->
                                    <rect width="8" height="8" x="104" y="237" class="win-mobile--home-back" />
                                    <rect width="8" height="8" x="188" y="237" fill="#333" />
                                    <path fill="#FFF" d="M154 241v-4l-4 .74V241m0 1v3.26l4 .74v-4m-5-1v-3.17l-3 .6V241m0 1v2.57l3 .6V242" />
                                  </svg>

                                  <!-- Screen shine -->
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300" class="absolute win-mobile">
                                    <linearGradient id="a" x1="203.29" x2="97.8" y1="76.29" y2="181.78" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" stop-color="#FFF" stop-opacity=".3" />
                                      <stop offset="1" stop-color="#FFF" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="b" x1="175" x2="84.49" y1="25" y2="115.51" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" stop-color="#FFF" stop-opacity=".5" />
                                      <stop offset="1" stop-color="#FFF" stop-opacity="0" />
                                    </linearGradient>
                                    <path fill="url(#a)" d="M100 162.26v21.72L200 96.9V73" />
                                    <path fill="url(#b)" d="M100 50v81.02L200 50" />
                                  </svg>
                                </div>
                              </div>
                            </a>
                            <p style="color: black; margin-top: 10px">
                              Que ce soit pour développer votre commerce en ligne ou utiliser une technologie basée sur un CMS, nous sommes experts dans tous les domaines du développement informatique. Si vous recherchez la création d'applications mobiles natives (Android) ou hybrides (Xamarin et React Native), notre équipe polyvalente de développeurs de logiciels sur mesure est là pour vous accompagner.
                            </p>
                          </div>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <div class="modal fade " style="top: 15%;bottom: 15%; "id="exampleModal4" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="false">
    <div class="modal-dialog col-lg-12 mod2" style="opacity:0.9;">
        <div >
          <div class="single-services">
              <div class="border shadow col-lg-12 col-md-12 col-sm-12" style="border-radius: 15px;">
                <div style="margin-top:3%;border-radius: 5px;"class="border-titre shadow col-md-12 col-sm-12 col-xs-12">
                  <div class="section-headline services-head text-center">
                      <h6>CREATION DE SITE VITRINE / E-COMMERCE</h6>
                  </div>
                  </div>
                    <div class=" about-move">
                      <div class="services-details">
                        <div class="single-services">
                          <p  style="text-align: justify">
                            <div class="single-services" data-toggle="modal" data-target="#exampleModal3">
                              <a class="services-icon" href="#">
                              <!-- WINDOWS DESKTOP APPLICATIONS -->

                                  <div class="grid--cell">
                                    <div class="animation-wrapper animation-wrapper--win-app-bg">

                                      <!-- Monitor and desktop chrome -->
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300" class="absolute win-desktop">

                                        <!-- Desktop colour -->
                                        <path fill="#FCC000" d="M30 240c-2.76 0-5-2.24-5-5V65c0-2.76 2.24-5 5-5h240c2.76 0 5 2.24 5 5v170c0 2.76-2.24 5-5 5H30z" />

                                        <!-- Device -->
                                        <g fill="#333">
                                          <circle cx="60" cy="245" r="10" />
                                          <circle cx="240" cy="245" r="10" />
                                          <path d="M270 65v170H30V65h240m0-10H30c-5.52 0-10 4.48-10 10v170c0 5.52 4.48 10 10 10h240c5.52 0 10-4.48 10-10V65c0-5.52-4.48-10-10-10z" />
                                        </g>

                                        <!-- Taskbar -->
                                        <path fill="#E48109" d="M30 224h240v11H30z" />

                                        <!-- Taskbar inactive buttons and systray -->
                                        <path fill="#ED9E48" d="M91 226h40v7H91zm45 0h40v7h-40zm112 1h20v5h-20z" />

                                        <!-- Desktop inactive shortcuts -->
                                        <path fill="#F4D387" d="M40 105h20v20H40zm0 30h20v20H40zm0 30h20v20H40z" />

                                        <g fill="#FFF">

                                          <!-- Windows button -->
                                          <path d="M32 226h3v3h-3zm0 4h3v3h-3zm4-4h3v3h-3zM36 230h3v3h-3z" />

                                          <!-- Desktop wallpaper graphic -->
                                          <path d="M210 142V85l-62 8.9V142m0 6v48.08l62 8.92v-57m-72-6V94.94l-48 7.2V142m0 6v39.86l48 7.2V148" opacity=".15" />
                                        </g>
                                      </svg>

                                      <!-- App shortcuts -->
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300" class="absolute win-desktop">

                                        <!-- Desktop shortcut -->
                                        <path fill="#F4D387" d="M40 75h20v20H40z" class="win-desktop--shortcut-icon-01" />

                                        <!-- Taskbar shortcut button -->
                                        <path fill="#ED9E48" d="M46 226h40v7H46z" class="win-desktop--shortcut-icon-02" />
                                      </svg>

                                      <!-- App window -->
                                      <div class="win-desktop--window">

                                        <!-- App chrome -->
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300" class="absolute win-desktop win-desktop--app-window">
                                          <path fill="#E48109" d="M50 72h200v143H50z" />
                                          <path fill="#FFF" d="M50 91h200v117H50z" />
                                          <path fill="#E5E5E5" d="M50 91h40v117H50z" />
                                          <path fill="#CCC" d="M55 106.5h30v4H55zm0 10h30v4H55zm0 10h30v4H55zm0 10h30v4H55zm0 10h30v4H55zm0 10h30v4H55zm0 10h30v4H55zM50 81h200v10H50z" />
                                          <path fill="#7F4506" d="M52 75h86v4H52z" />
                                          <path fill="#7F4506" d="M232 73h7v7h-7zm-10 0h7v7h-7z" />

                                          <!-- Close X button -->
                                          <path d="M242 73h7v7h-7z" class="win-desktop--app-window--close-button" />

                                          <!-- Sidebar link -->
                                          <path fill="#CCC" d="M55 96.5h30v4H55z" class="win-desktop--app-link" />

                                          <!-- In-app screen -->
                                          <g fill="#E5E5E5" class="win-desktop-chrome">
                                            <rect width="40" height="20" x="100" y="100" />
                                            <rect width="40" height="20" x="150" y="100" />

                                            <!-- Button 01 -->
                                            <rect width="40" height="20" x="200" y="100" class="win-desktop--button win-desktop--button-01" />

                                            <!-- Button 02 -->
                                            <rect width="40" height="20" x="100" y="130" class="win-desktop--button win-desktop--button-02" />
                                            <rect width="40" height="20" x="150" y="130" />
                                            <rect width="40" height="20" x="200" y="130" />

                                            <rect width="40" height="10" x="100" y="160" />
                                            <rect width="90" height="10" x="150" y="160" />

                                            <!-- Ok button-->
                                            <rect width="40" height="10" x="200" y="180" class="win-desktop--button win-desktop--button-03" />
                                          </g>
                                        </svg>

                                        <!-- Modal window -->
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300" class="absolute win-desktop win-desktop-chrome--modal">

                                          <!-- Modal BG -->
                                          <path d="M50 81h200v127H50z" opacity=".7" />

                                          <!-- Modal dialog -->
                                          <path fill="#FFF" d="M100 114.5h100v70H100z" />
                                          <path fill="#E5E5E5" d="M110 124h80v6h-80zm0 12h80v6h-80zm0 12h60v6h-60zm5 16h30v10h-30z" />

                                          <!-- Modal button -->
                                          <path d="M155 164h30v10h-30z" class="win-desktop--button win-desktop--modal-button" />
                                        </svg>

                                        <!-- Tick overlay -->
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300" class="absolute win-desktop win-desktop--tick">
                                          <rect width="200" height="127" x="50" y="81" fill="#FFF" opacity=".75" />
                                          <circle cx="150" cy="145" r="35" fill="#91D329" />
                                          <g fill="#FFF">
                                            <rect width="40" height="10" x="135.3" y="140" transform="rotate(-45 155.307 145.005)" />
                                            <rect width="25" height="10" x="126.89" y="145.3" transform="rotate(45 139.396 150.303)" />
                                          </g>
                                        </svg>
                                      </div>

                                      <!-- Mouse cursor -->
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300" class="absolute win-desktop win-desktop--cursor">
                                        <g stroke="#000" stroke-miterlimit="10">
                                          <path d="M153.7 152.66l-7.2-7v10l2.45-.97 1.56 3.63 2.57-1-1.56-3.7z" opacity=".4" />
                                          <path fill="#FFF" d="M153.7 149.66l-7.2-7v10l2.45-.97 1.56 3.63 2.57-1-1.56-3.7z" />
                                        </g>
                                      </svg>

                                      <!-- Screen shine -->
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300" class="absolute win-desktop">
                                        <linearGradient id="a" x1="210" x2="21" y1="5" y2="194" gradientUnits="userSpaceOnUse">
                                          <stop offset="0" stop-color="#FFF" stop-opacity=".5" />
                                          <stop offset="1" stop-color="#FFF" stop-opacity="0" />
                                        </linearGradient>
                                        <linearGradient id="b" x1="272.22" x2="139.69" y1="90.22" y2="222.74" gradientUnits="userSpaceOnUse">
                                          <stop offset="0" stop-color="#FFF" stop-opacity=".3" />
                                          <stop offset="1" stop-color="#FFF" stop-opacity="0" />
                                        </linearGradient>
                                        <path fill="url(#a)" d="M270 65H30v138h69.68" />
                                        <path fill="url(#b)" d="M270 111.9V88L129.95 213h23.95" />
                                      </svg>
                                    </div>

                                    <h1 class="title title--win-app">Windows Desktop Applications</h1>
                                  </div>
                              </a>
                              <p style="color: black; margin-top: 10px">
                              Vous recherchez des experts prêts à évaluer vos besoins sans engagement, à vous conseiller et à vous proposer des solutions sur mesure qui surpassent vos attentes ? Ne laissez pas vos concurrents vous surpasser ! Présentez votre entreprise, vos produits et services de manière percutante, communiquez directement avec vos clients, écoutez attentivement leurs avis, et boostez votre visibilité en vendant en ligne et en offrant des services innovants. Avec notre aide, vous pouvez construire un site vitrine ou un site e-commerce qui fera sensation et vous démarquera dans votre domaine.
                              </p>
                            </div>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
          </div>
        </div>
    </div>
</div>
<div class="modal fade " style="top: 15%;bottom: 15%; "id="exampleModal5" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="false">
  <div class="modal-dialog col-lg-12 mod2" style="opacity:0.9;">
      <div >
        <div class="single-services">
            <div class="border shadow col-lg-12 col-md-12 col-sm-12" style="border-radius: 15px;">
              <div style="margin-top:3%;border-radius: 5px;"class="border-titre shadow col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline services-head text-center">
                  <h6>REFONTE DE VOTRE SITE</h6>
                </div>
            </div>
              <div class=" about-move">
                <div class="services-details">
                  <div class="single-services">
                    <p  style="text-align: justify">
                      <div class="single-services" data-toggle="modal" data-target="#exampleModal3">
                        <a class="services-icon" href="#">
                          <!-- WEBAPP DEVELOPMENT -->
                                <div class="grid--cell">
                                  <div class="animation-wrapper animation-wrapper--webapp-bg">

                                    <!-- Desktop screen -->
                                    <div class="absolute web-hardware web-hardware--desktop">

                                      <!-- Animated DIV BG for simple scrolling through site GFX -->
                                      <div class="web-screen web-screen--webapp-desktop">

                                        <!-- Screen shine set to DIV BG because background-size: cover is magical -->
                                        <div class="screen-shine"></div>
                                      </div>
                                    </div>

                                    <!-- Mobile screen -->
                                    <div class="absolute web-hardware web-hardware--mobile">

                                      <!-- Animated DIV BG for simple scrolling through site GFX -->
                                      <div class="web-screen web-screen--webapp-mobile">

                                        <!-- Screen shine set to DIV BG because background-size: cover is magical -->
                                        <div class="screen-shine"></div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </a>
                        <p style="color: black; margin-top: 10px">
                        Vous débutez ? Profitez de notre expérience. Des experts sont là pour évaluer vos besoins sans engagement, vous conseiller et vous proposer les solutions répondant au mieux à vos attentes.
                        </p>
                      </div>
                    </p>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
  </div>
</div>

<div class="modal fade " style="top: 15%;bottom: 15%; "id="exampleModal6" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="false">
<div class="modal-dialog col-lg-12 mod2" style="opacity:0.9;">
    <div >
      <div class="single-services">
          <div class="border shadow col-lg-12 col-md-12 col-sm-12" style="border-radius: 15px;">
            <div style="margin-top:3%;border-radius: 5px;"class="border-titre shadow col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline services-head text-center">
                <h6>CREATION DE VOTRE LOGO / RETOUCHE ET DETOURAGE</h6>
              </div>
          </div>
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                    <div class="single-services">
                        <div class="services-icon" style="padding-left: 15%;margin-bottom: -70px;">
                          <div class="ssection_1" style="max-width:250px;height:250px;margin:0px;">
                            <div class="" class="img-right">
                              <div class="sliderr slider--tokyo">
                                <div class="slider__before"></div>
                                <div class="slider__separator"></div>
                                <div class="slider__after"></div>
                                <input class="slider__range" type="range" min="0" max="100" value="50"/>
                              </div>
                            </div>
                          </div>
                        </div>
                      <p style="color: black; margin-top: 10px">
                      Démarquez-vous avec un logo personnalisé et original qui reflète l'identité unique de votre marque. Notre service de création de logos vous propose des designs sur mesure et des retouches professionnelles pour vous aider à vous démarquer et à créer une image distinctive et mémorable.
                    </p>
                    </div>
                  </p>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
</div>
</div>
<div class="modal fade " style="top: 15%;bottom: 15%; "id="exampleModal7" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="false">
<div class="modal-dialog col-lg-12 mod2" style="opacity:0.9;">
    <div >
      <div class="single-services">
          <div class="border shadow col-lg-12 col-md-12 col-sm-12" style="border-radius: 15px;">
            <div style="margin-top:3%;border-radius: 5px;"class="border-titre shadow col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline services-head text-center">
                <h6 >SERVICES DE RÉFÉRENCEMENT</h6>
              </div>
          </div>
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <p  style="text-align: justify">
                    <div class="single-services" data-toggle="modal" data-target="#exampleModal3">
                      <a class="services-icon" href="#">
                          <div class="grid--cell">
                                  <div class="animation-wrapper animation-wrapper--website-bg">

                                    <!-- Desktop screen -->
                                    <div class="absolute web-hardware web-hardware--desktop">

                                      <!-- Animated DIV BG for simple scrolling through site GFX -->
                                      <div class="web-screen web-screen--website-desktop">
                                        <div class="screen-shine"></div>
                                      </div>
                                    </div>

                                    <!-- Mobile screen -->
                                    <div class="absolute web-hardware web-hardware--mobile">

                                      <!-- Animated DIV BG for simple scrolling through site GFX -->
                                      <div class="web-screen web-screen--website-mobile">
                                        <div class="screen-shine"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                      </a>
                      <p style="color: black; margin-top: 10px">
                        Nous proposons également des services de parrainage qui améliorent le positionnement et la visibilité de votre site Web sur les pages de résultats des moteurs de recherche ou des annuaires. Il augmente non seulement le nombre de visites sur votre site, mais augmente également sa popularité et sa visibilité, et communique en ligne avec de nouveaux groupes cibles d'internautes.
                      </p>
                    </div>
                  </p>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
</div>
</div>
<div class="modal fade " style="top: 15%;bottom: 15%; "id="exampleModal8" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="false">
<div class="modal-dialog col-lg-12 mod2" style="opacity:0.9;">
    <div >
      <div class="single-services">
          <div class="border shadow col-lg-12 col-md-12 col-sm-12" style="border-radius: 15px;">
            <div style="margin-top:3%;border-radius: 5px;"class="border-titre shadow col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline services-head text-center">
                <h6>REDACTION DE VOS CONTENUE</h6>
              </div>
          </div>
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <p  style="text-align: justify">
                    <div class="single-services" data-toggle="modal" data-target="#exampleModal3">
                      <a class="services-icon" href="#">
                      <!-- SOFTWARE DEVELOPMENT -->
                            <div class="grid--cell">
                              <div class="animation-wrapper animation-wrapper--software-bg">

                                <div class="absolute software-monitor">

                                  <!-- Monitor hardware + screen chrome/UI -->
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300" class="absolute software-screen software-screen--bg">

                                    <!-- Monitor feet -->
                                    <g fill="#333">
                                      <circle cx="80" cy="152" r="4" />
                                      <circle cx="220" cy="152" r="4" />
                                    </g>

                                    <!-- Browser chrome BG -->
                                    <path fill="#A6A6A6" d="M60 149.5c-1.38 0-2.5-1.12-2.5-2.5V19c0-1.38 1.12-2.5 2.5-2.5h180c1.38 0 2.5 1.12 2.5 2.5v128c0 1.38-1.12 2.5-2.5 2.5H60z" />

                                    <!-- Monitor Bezel -->
                                    <path fill="#333" d="M240 19v128H60V19h180m0-5H60c-2.76 0-5 2.24-5 5v128c0 2.76 2.24 5 5 5h180c2.76 0 5-2.24 5-5V19c0-2.76-2.24-5-5-5z" />

                                    <!-- Browser page BG -->
                                    <path fill="#E5E5E5" d="M60 26h180v116H60z" />

                                    <!-- Sidebar BG -->
                                    <path fill="#D1D1D1" d="M80 26h30v116H80z" />

                                    <!-- Browser buttons -->
                                    <path fill="#191919" d="M218 20h5v5h-5zm7.5 0h5v5h-5z" />

                                    <!-- Line numbers -->
                                    <path fill="#D60000" d="M233 20h5v5h-5zM96.02 26.33h-1.85c-1.02 0-1.84.82-1.84 1.84 0 1 .82 1.83 1.84 1.83h1.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84zm0 7.4h-1.85c-1.02 0-1.84.83-1.84 1.84 0 1 .82 1.83 1.84 1.83h1.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84zm0 7.4h-1.85c-1.02 0-1.84.83-1.84 1.84 0 1 .82 1.83 1.84 1.83h1.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84zm0 7.4h-1.85c-1.02 0-1.84.82-1.84 1.84 0 1 .82 1.83 1.84 1.83h1.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84zm0 7.47h-1.85c-1.02 0-1.84.82-1.84 1.83 0 1.02.82 1.84 1.84 1.84h1.85c1.02 0 1.84-.82 1.84-1.84 0-1-.82-1.83-1.84-1.83zm0 7.33h-1.85c-1.02 0-1.84.82-1.84 1.84 0 1 .82 1.83 1.84 1.83h1.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84zm0 7.4h-1.85c-1.02 0-1.84.83-1.84 1.84 0 1 .82 1.83 1.84 1.83h1.85c1.02 0 1.84-.82 1.84-1.83 0-1-.82-1.84-1.84-1.84zm0 7.27h-1.85c-1.02 0-1.84.82-1.84 1.83 0 1.02.82 1.84 1.84 1.84h1.85c1.02 0 1.84-.82 1.84-1.84 0-1-.82-1.83-1.84-1.83zm0 7.53h-1.85c-1.02 0-1.84.82-1.84 1.84 0 1 .82 1.83 1.84 1.83h1.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84zm0 7.4h-1.85c-1.02 0-1.84.82-1.84 1.84 0 1 .82 1.83 1.84 1.83h1.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84zm0 7.4h-1.85c-1.02 0-1.84.82-1.84 1.84 0 1 .82 1.83 1.84 1.83h1.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84zm0 7.4h-1.85c-1.02 0-1.84.83-1.84 1.84 0 1 .82 1.83 1.84 1.83h1.85c1.02 0 1.84-.82 1.84-1.83 0-1-.82-1.84-1.84-1.84zm0 7.27h-1.85c-1.02 0-1.84.82-1.84 1.83 0 1.02.82 1.84 1.84 1.84h1.85c1.02 0 1.84-.82 1.84-1.84 0-1-.82-1.83-1.84-1.83zm0 7.53h-1.85c-1.02 0-1.84.82-1.84 1.84 0 1 .82 1.83 1.84 1.83h1.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84zm0 7.4h-1.85c-1.02 0-1.84.82-1.84 1.84 0 1 .82 1.83 1.84 1.83h1.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84zm0 7.4h-1.85c-1.02 0-1.84.82-1.84 1.84 0 1 .82 1.83 1.84 1.83h1.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84z"
                                    />
                                  </svg>

                                  <!-- Monitor screen mask - Height is animated for R "code reveal" -->
                                  <div class="absolute software-screen software-screen--fg-mask">

                                    <!-- Monitor screen R graphic - Translates upwards for R "code scroll" -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300" class="absolute software-screen software-screen--fg">
                                      <path fill="#D60000" d="M130.02 33.73h-3.85c-1.02 0-1.84.83-1.84 1.84 0 1 .82 1.83 1.84 1.83h3.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84zm18 0h-10.85c-1.02 0-1.84.83-1.84 1.84 0 1 .82 1.83 1.84 1.83h10.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84zM170.02 41.13h-21.85c-1.02 0-1.84.83-1.84 1.84 0 1 .82 1.83 1.84 1.83h21.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84zm-29 7.4h-14.85c-1.02 0-1.84.82-1.84 1.84 0 1 .82 1.83 1.84 1.83h14.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84zM177.02 56h-6.85c-1.02 0-1.84.82-1.84 1.83 0 1.02.82 1.84 1.84 1.84h6.85c1.02 0 1.84-.82 1.84-1.84 0-1-.82-1.83-1.84-1.83zm1 7.33h-28.85c-1.02 0-1.84.82-1.84 1.84 0 1 .82 1.83 1.84 1.83h28.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84zm-24 7.4h-13.85c-1.02 0-1.84.83-1.84 1.84 0 1 .82 1.83 1.84 1.83h13.85c1.02 0 1.84-.82 1.84-1.83 0-1-.82-1.84-1.84-1.84zM176.02 78h-9.85c-1.02 0-1.84.82-1.84 1.83 0 1.02.82 1.84 1.84 1.84h9.85c1.02 0 1.84-.82 1.84-1.84 0-1-.82-1.83-1.84-1.83zm-32 7.53h-17.85c-1.02 0-1.84.82-1.84 1.84 0 1 .82 1.83 1.84 1.83h17.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84zM169.02 92.93h-29.85c-1.02 0-1.84.82-1.84 1.84 0 1 .82 1.83 1.84 1.83h29.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84zM157.02 100.33h-2.85c-1.02 0-1.84.82-1.84 1.84 0 1 .82 1.83 1.84 1.83h2.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84zm-16 7.4h-2.85c-1.02 0-1.84.83-1.84 1.84 0 1 .82 1.83 1.84 1.83h2.85c1.02 0 1.84-.82 1.84-1.83 0-1-.82-1.84-1.84-1.84zM168.02 115h-25.85c-1.02 0-1.84.82-1.84 1.83 0 1.02.82 1.84 1.84 1.84h25.85c1.02 0 1.84-.82 1.84-1.84 0-1-.82-1.83-1.84-1.83zM159.02 129.93h-6.85c-1.02 0-1.84.82-1.84 1.84 0 1 .82 1.83 1.84 1.83h6.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84zm19 0h-11.85c-1.02 0-1.84.82-1.84 1.84 0 1 .82 1.83 1.84 1.83h11.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84z"
                                      />

                                      <path fill="#bbb" d="M161.02 33.73h-5.85c-1.02 0-1.84.83-1.84 1.84 0 1 .82 1.83 1.84 1.83h5.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84zm-20 7.4h-10.85c-1.02 0-1.84.83-1.84 1.84 0 1 .82 1.83 1.84 1.83h10.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84zM159.02 48.53h-10.85c-1.02 0-1.84.82-1.84 1.84 0 1 .82 1.83 1.84 1.83h10.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84zM159.02 78h-14.85c-1.02 0-1.84.82-1.84 1.83 0 1.02.82 1.84 1.84 1.84h14.85c1.02 0 1.84-.82 1.84-1.84 0-1-.82-1.83-1.84-1.83zM132.02 92.93h-5.85c-1.02 0-1.84.82-1.84 1.84 0 1 .82 1.83 1.84 1.83h5.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84zM162.02 107.73h-13.85c-1.02 0-1.84.83-1.84 1.84 0 1 .82 1.83 1.84 1.83h13.85c1.02 0 1.84-.82 1.84-1.83 0-1-.82-1.84-1.84-1.84zM163.02 122.53h-15.85c-1.02 0-1.84.82-1.84 1.84 0 1 .82 1.83 1.84 1.83h15.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84z"
                                      />

                                      <path fill="#888" d="M175.02 48.53h-8.85c-1.02 0-1.84.82-1.84 1.84 0 1 .82 1.83 1.84 1.83h8.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84zm-12 7.47h-22.85c-1.02 0-1.84.82-1.84 1.83 0 1.02.82 1.84 1.84 1.84h22.85c1.02 0 1.84-.82 1.84-1.84 0-1-.82-1.83-1.84-1.83zM178.02 70.73h-16.85c-1.02 0-1.84.83-1.84 1.84 0 1 .82 1.83 1.84 1.83h16.85c1.02 0 1.84-.82 1.84-1.83 0-1-.82-1.84-1.84-1.84zm-41 7.27h-10.85c-1.02 0-1.84.82-1.84 1.83 0 1.02.82 1.84 1.84 1.84h10.85c1.02 0 1.84-.82 1.84-1.84 0-1-.82-1.83-1.84-1.83zM175.02 85.53h-22.85c-1.02 0-1.84.82-1.84 1.84 0 1 .82 1.83 1.84 1.83h22.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84zM146.02 100.33h-11.85c-1.02 0-1.84.82-1.84 1.84 0 1 .82 1.83 1.84 1.83h11.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84zM173.02 122.53h-2.85c-1.02 0-1.84.82-1.84 1.84 0 1 .82 1.83 1.84 1.83h2.85c1.02 0 1.84-.82 1.84-1.83 0-1.02-.82-1.84-1.84-1.84z"
                                      />
                                    </svg>
                                  </div>

                                  <!-- Monitor screen shine overlay -->
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300" class="absolute software-screen software-screen--shine">
                                    <linearGradient id="a" x1="195" x2="41" y1="-26" y2="128" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" stop-color="#FFF" stop-opacity=".75" />
                                      <stop offset="1" stop-color="#FFF" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="b" x1="244.5" x2="138.5" y1="45.5" y2="151.5" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" stop-color="#FFF" stop-opacity=".55" />
                                      <stop offset="1" stop-color="#FFF" stop-opacity="0" />
                                    </linearGradient>

                                    <path fill="url(#a)" d="M240 19H60v128h52" />
                                    <path fill="url(#b)" d="M240 59V41L134 147h18" />
                                  </svg>
                                </div>

                                <!-- Keyboard -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300" class="absolute software-keyboard">
                                  <path fill="#E0E0E0" d="M70 166h160v58H70z" />
                                  <g fill="#FFF">
                                    <path d="M73 169h11v7H73zm13 0h11v7H86zm26 0h11v7h-11zm-13 0h11v7H99zm26 0h11v7h-11zm13 0h11v7h-11zm13 0h11v7h-11zm13 0h11v7h-11zm13 0h11v7h-11zm13 0h11v7h-11zm-98 9h11v7H92zm13 0h11v7h-11zm13 0h11v7h-11zm13 0h11v7h-11zm13 0h11v7h-11zm13 0h11v7h-11zm13 0h11v7h-11zm13 0h11v7h-11zm13 0h11v7h-11zm13 0h18v7h-18zm-123 9h11v7H86zm13 0h11v7H99zm13 0h11v7h-11zm13 0h11v7h-11zm13 0h11v7h-11zm13 0h11v7h-11zm13 0h11v7h-11zm13 0h11v7h-11zm13 0h11v7h-11zm-96 9h11v7H94zm13 0h11v7h-11zm13 0h11v7h-11zm13 0h11v7h-11zm13 0h11v7h-11zm13 0h11v7h-11zm13 0h11v7h-11zm13 0h11v7h-11zm13 0h11v7h-11zm-99 9h11v7H99zm13 0h11v7h-11zm13 0h11v7h-11zm13 0h11v7h-11zm13 0h11v7h-11zm13 0h11v7h-11zm13 0h11v7h-11zm13 0h11v7h-11zm13 0h24v7h-24zm-13 9h16v7h-16zm18 0h19v7h-19zm-5-27h11v7h-11zm0-18h11v7h-11zm13 0h11v7h-11zm-143 9h17v7H73zm0 9h11v7H73zm0 9h19v7H73zm0 9h24v7H73zm0 9h19v7H73zm21 0h16v7H94zm18 0h76v7h-76zM216 187v9h-5v7h16v-16"
                                    />
                                  </g>
                                </svg>

                                <!-- Left & right hands - Have to be done with DIV BG's as we need to animate the BG position for switching sprites -->
                                <div class="absolute software-hand software-hand--left"></div>
                                <div class="absolute software-hand software-hand--right"></div>
                              </div>
                            </div>
                      </a>
                      <p style="color: black; margin-top: 10px">
                      Encouragez les lecteurs à parcourir l'intégralité du contenu en utilisant une introduction accrocheuse qui suscite l'intérêt et engage le lecteur. Optez pour des phrases courtes, concises et positives, qui captent immédiatement l'attention du lecteur. N'hésitez pas à tirer parti des connaissances de notre équipe et de l'expertise de nos rédacteurs professionnels pour créer un impact significatif.
                      </p>
                    </div>
                  </p>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
</div>
</div>
</footer>
<script src="j-Query/jquery-3.5.1.min.js"></script>
<script src="js1/bootstrap.js"></script>
<script src="styles/fontawesome-web/js/all.js"></script>
<script src="js1/index.js"></script>
<script src="js1/main.js"></script>

</body>
</html>
