@extends('../site.app')
@section("style")
<style>

  </style>
@endsection

@section('header')
<header>
    <nav class="navbar navbar-expand-sm fixed-top">
        <a class="navbar-brand" href="index.html"><img style="height: 25px;" src="images/logo_.png" alt=""></a>
        <button class="navbar-toggler d-lg-none" style="outline: none; background-color: transparent;" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fa-solid fa-bars" style="color: white;cursor: pointer;"></span>
        </button>
        <div class="collapse menu navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0"   style="background-color:rgb(119, 119, 119);">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Services</a>
                </li>
                <li class="nav-item desactive">
                  <a class="nav-link" href="actualite.html">Actualité</a>
                </li>
                <li class="nav-item desactive">
                  <a class="nav-link" href="a-propos.html">à_propos</a>
                </li>
                <li class="nav-item desactive">
                  <a class="nav-link" href="portfolio.html">Réalisations</a>
                </li>
                                <li class="nav-item desactive">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>
            </ul>
            <a class="login" href="" style="margin-top: -15px;"><i style="color: white;" class="fas fa-sign-in-alt"></i></a>
        </div>
        <div id="indicator"></div>
    </nav>
    <div class="containere container">
        <svg class="loader" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 340">
            <circle cx="170" cy="170" r="160" stroke="rgba(255, 192, 75, 0.178)"/>
            <circle cx="170" cy="170" r="135" stroke="rgba(128, 128, 128, 0.247)"/>
            <circle cx="170" cy="170" r="110" stroke="rgba(255, 192, 75, 0.178)"/>
            <circle cx="170" cy="170" r="85" stroke="rgba(128, 128, 128, 0.247)"/>
        </svg>
    </div>
    <div class="conta">        
        <div style="width: 80px; height: 80px;opacity: 0.2; background-color: white;border-top: 5px solid white;border-right: 5px solid white;position: absolute;margin-left: -20px;border-radius: 20px;margin-top: 20px;"></div>
        <button><i class="fa fa-envelope"></i> <a href="contact.html">Contact us</a></button>
    </div>
    <div class="slider">
        <h1 class="actiff">DEVELOPPEMENT D'APPLICATION WEB ET MOBILE</h1>
        <h1>CRÉATION DE SITE VITRINE / E-COMMERCE</h1>
        <h1>REFONTE DE VOTRE SITE WEB</h1>
        <h1>CRÉATION DE VOTRE LOGO / RETOUCHE ET DÉTOURAGE</h1>
        <h1>SERVICES DE RÉFÉRENCEMENT</h1>     
        <h1>RÉDACTION DE VOS CONTENUE</h1>
    </div>
    <!-- <div class="reseaux" style="margin-left: -50px;margin-top: 5%">
        <a href="https://www.facebook.com/briqueweb/"target=_blank class="fb">
            <i class="fa-brands fa-facebook"></i>
        </a>
        <a href="https://www.linkedin.com/in/briqueweb/"target=_blank class="ins">
            <i class="fa-brands fa-instagram"></i>
        </a>
        <a href="https://www.linkedin.com/in/briqueweb/" target=_blank class="link">
          <i class="fa-brands fa-linkedin"></i>
        </a>
    </div> -->
    <div class="chat">
        <i class="fa-brands fa-facebook-messenger mess"></i>
    </div>
</header>
@endsection