@extends("app")


@section("style")
<style>
   /*typing*/
   .typing{
  position: relative;
  width: 17ch;
  font-weight: bold;
  /*animation: type 5s steps(43), blink 0.5s step-end infinite alternate;*/
  animation: maquina 4s infinite alternate steps(31);
  white-space: nowrap;
  overflow: hidden;
  border-right: 3px solid;
}
@keyframes maquina {
  0% {
    width: 23%;
}

100% {
    width: 0;
}
}
/*
@keyframes type {
  0% {
    width: 0;
  }
}

@keyframes blink {
  50% {
    border-color: transparent;
  }
}

/*fin typing*/
.img-aboutus{
    height: 300px;
    width: 70%;
    top: 10%;
    left: 30%;
    margin-left: -100px;
    margin-top: 70px;
    background-image: url(../images/about_us.png);
    background-size: cover;
    position: absolute;
    border-radius: 20px;
    box-shadow: 0 0 20px 5px rgba(128, 128, 128, 0.089);
}

.approch h2 {
    font-family: 'arial';
    color: grey;
    padding-left: 5px;
}

.pb-contenu{
  display: flex;
  justify-content: space-between;
}
.title-item{
    color:cadetblue;
}

/*arrow*/
.horizontal-arrow1{
  margin-right: -1em;
  position: absolute;
  width: 20px;
  right: 25px;
  top: 3%;
  padding: 0;
  content: "\f087";
  font-size: 18px;
  line-height: 24px;
  letter-spacing: -1px;
  color: orange;
  border-radius: 4px;
  border-left: 20px solid orange;
  border-top: 20px solid transparent;
  border-bottom: 20px solid transparent;
  animation: indicate 1s linear infinite;
}
.horizontal-arrow {
  margin-right: 0em;
}
.horizontal-arrow  {
  position: absolute;
  width: 20px;
  right: 25px;
  top: 3%;
  padding: 0;
  content: "\f087";
  font-size: 18px;
  line-height: 24px;
  letter-spacing: -1px;
  color: orange;
  border-radius: 4px;
  border-left: 20px solid orange;
  border-top: 20px solid transparent;
  border-bottom: 20px solid transparent;
  animation: indicate 1s linear infinite;
}
.horizontal-arrow:before {
  width: 150px;
  opacity: 1;
  display: block;
  position: absolute;
  text-align: left;
  color: orange;
  font-weight: 600;
  font-family: "Droid Sans", sans-serif;
  content: "";
  padding: 0;
  top: -10px;
  right: 0;
}
@keyframes indicate {
  0% {
    right: 15%;
  }
  100% {
    right: 0%;
    opacity: 0;
  }
}
/*fin*/
/*boundance*/
.icon-container {
    width: 100px;
    /* height: 100px; */
    position: relative;
    margin-top: -2em;
}

.animated-icon {
  position: absolute;
  top: 0;
  left: 0;
  animation-name: bounce; /* Animation name */
  animation-duration: 1s; /* Animation duration */
  animation-timing-function: ease-in-out; /* Animation timing function */
  animation-iteration-count: infinite; /* Infinite animation repetition */
}

@keyframes bounce {
  0%, 100% {
    transform: translateY(0); /* Initial and final state of the icon */
  }
  50% {
    transform: translateY(-20px); /* Midway state of the icon */
  }
}
/*fin*/


/*card*/

.crd {
  width: 190px;
  height: 300px;
  transition: all 0.2s;
  position: relative;
  cursor: pointer;
}

.card-inner {
  padding: 12px;
  width: inherit;
  height: inherit;
  background: rgba(255,255,255,.05);
  box-shadow: 0 0 10px rgba(0,0,0,0.25);
  backdrop-filter: blur(10px);
  border-radius: 8px;
  animation: move-up6 2s ease-in infinite alternate-reverse;
}

.crd:hover {
  transform: scale(1.04) rotate(1deg);
}

.circle {
  width: 100px;
  height: 100px;
  background: radial-gradient(#b0e633, #53ef7d);
  border-radius: 50%;
  position: absolute;

}

.circle:nth-child(1) {
  top: -25px;
  left: -25px;
}

.circle:nth-child(2) {
  bottom: -25px;
  right: -25px;
  animation-name: move-down1;
}

@keyframes move-up6 {
  to {
    transform: translateY(-10px);
  }
}

@keyframes move-down1 {
  to {
    transform: translateY(20px);
  }
}
p.desc {
    color: #ffffff;
    font-size: 14px;
    text-align: center;
}


/*bar animation*/
.title{
  color:orange;
}
div.gch{
    color: #ffffff;
    font: 20px Raleway;
    position: relative;
    cursor: pointer;
}
div.section-title:before {
    position: absolute;
    width: 2px;
    height: 100%;
    left: 0px;
    top: 0px;
    content: '';
    background: #FFF;
    opacity: 0.3;
    transition: all 0.3s;
}
/*b border*/
.b {
  color:cadetblue;
  background:transparent;
  border-width:2px;
  border-style: solid;
  border-color: #454545;
  position:relative;
  margin:1em;
  display:inline-block;
  padding:0.5em 1em;
  transition:all 0.3s ease-in-out;
  text-align:center;
font-family:comfortaa;
font-weight:bold}
.b:before, .b:after {
  content:'';
  display:block;
  position:absolute;
  border-color:orange;
  box-sizing:border-box;
  border-style:solid;
  width:1em;
  height:1em;
  transition:all 0.3s ease-in-out
}
.b:before {
  top:-6px;
  left:-6px;
  border-width:2px 0 0 2px;
  z-index:5;
}
.b:after {
  bottom:-6px;
  right:-6px;
  border-width:0 2px 2px 0;
}

.b:hover:before, .b:hover:after {
  width:calc(100% + 12px);
  height:calc(100% + 12px);
  border-color:orange;}
/*fin b*/
/*svg loader1*/
circle {
    fill: none;
    stroke-width: 3.5;
    -webkit-animation-name: preloader;
    animation-name: preloader;
    -webkit-animation-duration: 10s;
    animation-duration: 10s;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
    transform-origin: 170px 170px;
    will-change: transform;
}
/*.container svg {
    padding-top: 150px;
}*/
.loader {
    max-width: 15rem;
    width: 100%;
    height: auto;
    stroke-linecap: round;
}
circle:nth-of-type(1) {
    -webkit-animation-delay: -0.8s;
    animation-delay: -0.8s;
}

circle:nth-of-type(1) {
    stroke-dasharray: 550px;
}
circle:nth-of-type(1) {
    -webkit-animation-delay: -0.8s;
    animation-delay: -0.8s;
}

circle:nth-of-type(1) {
    stroke-dasharray: 550px;
}
circle:nth-of-type(3) {
    -webkit-animation-delay: -0.38s;
    animation-delay: -0.38s;
}

circle:nth-of-type(3) {
    stroke-dasharray: 450px;
}
circle:nth-of-type(4) {
    -webkit-animation-delay: 1s;
    animation-delay: 1s;
}

circle:nth-of-type(4) {
    stroke-dasharray: 300px;
}/*fin loader1*/
/*loader4*/
.containere-loader4  {
    position: fixed;
    top: 50%;
    left: 50%;
    margin-top: -50px;
    margin-left: -100px;
}
.loader4 {
    max-width: 6rem;
    height: auto;
    position: fixed;
    top: 20em;
    right: 20em;

}


/*loader_resp table-phone*/
.loader_resp {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 10;
  width: 160px;
  height: 100px;
  margin-left: -80px;
  margin-top: -50px;
  border-radius: 5px;
  background: #1e3f57;
  animation: dot1_ 3s cubic-bezier(0.55,0.3,0.24,0.99) infinite;
}

.loader_resp:nth-child(2) {
  z-index: 11;
  width: 150px;
  height: 90px;
  margin-top: -45px;
  margin-left: -75px;
  border-radius: 3px;
  background: #3c517d;
  animation-name: dot2_;
}

.loader_resp:nth-child(3) {
  z-index: 12;
  width: 40px;
  height: 20px;
  margin-top: 50px;
  margin-left: -20px;
  border-radius: 0 0 5px 5px;
  background: #6bb2cd;
  animation-name: dot3_;
}

.overlay-icon{
  font-size: 50px
}

@keyframes dot1_ {
  3%,97% {
    width: 160px;
    height: 100px;
    margin-top: -50px;
    margin-left: -80px;
  }

  30%,36% {
    width: 80px;
    height: 120px;
    margin-top: -60px;
    margin-left: -40px;
  }

  63%,69% {
    width: 40px;
    height: 80px;
    margin-top: -40px;
    margin-left: -20px;
  }
}

@keyframes dot2_ {
  3%,97% {
    height: 90px;
    width: 150px;
    margin-left: -75px;
    margin-top: -45px;
  }

  30%,36% {
    width: 70px;
    height: 96px;
    margin-left: -35px;
    margin-top: -48px;
  }

  63%,69% {
    width: 32px;
    height: 60px;
    margin-left: -16px;
    margin-top: -30px;
  }
}

@keyframes dot3_ {
  3%,97% {
    height: 20px;
    width: 40px;
    margin-left: -20px;
    margin-top: 50px;
  }

  30%,36% {
    width: 8px;
    height: 8px;
    margin-left: -5px;
    margin-top: 49px;
    border-radius: 8px;
  }

  63%,69% {
    width: 16px;
    height: 4px;
    margin-left: -8px;
    margin-top: -37px;
    border-radius: 10px;
  }
}
/*typescript*/


</style>
@endsection

@section('slider')
@include('public.site.slide')
@endsection
@section("content")

<section class="bw-nos=about bg-dark " style="padding: 120px 0;">
    <div class="container">
    <svg class="loader"  viewBox="0 0 340 340">
            <circle cx="170" cy="170" r="160" stroke="rgba(255, 192, 75, 0.178)"></circle>
            <circle cx="170" cy="170" r="135" stroke="rgba(128, 128, 128, 0.247)"></circle>
            <circle cx="170" cy="170" r="110" stroke="rgba(255, 192, 75, 0.178)"></circle>
            <circle cx="170" cy="170" r="85" stroke="rgba(128, 128, 128, 0.247)"></circle>
        </svg>
        <div id="about" class="container containE about-area area-padding" style="margin-top: -15em;">
            <div class="row" style="margin-left: 0; margin-right: 0">
                <div style=";right: -20em;" class="title1 col-12">
                    <h4 class="typing" style="color:orange;font-size:26px;text-align: center;">Qui sommes-nous?</h4>
                </div>
                <div class="offer container col-lg-12">
                    <h2 id="Nous_sommes"><img src="images/gestion-dequipe.png" style="width: 50px;" alt="sample108" />&nbsp;Brique Web Agence</h2>
                    <div style="margin-top: -20px;width: 40px; height: 4px;background-color: orange;margin-left:70px"></div>
                    <p style="color:#ffffff;font-size:16px;text-align: justify;margin-left: 100px;margin-top: 5em;">Notre objectif est de devenir un acteur majeur dans la conception de sites web innovants et sur mesure pour les entreprises et les particuliers.</br>
                    Notre expertise ne se limite pas à nos formations académiques, mais repose principalement sur les expériences professionnelles enrichissantes que chacun de nous a acquises tout au long de nos parcours au sein d'entreprises renommées.</p>
                </div>
            </div>
            </div>
        </div>


</section>

<section class="bw-nos=about bg-dark " >
    <div class="container">
        <div id="about" class="container containE about-area area-padding">
            <div class="row" style="margin-left: 0; margin-right: 0">
            <div class="approch container col-lg-12" style="top: -5em;">
                    <h2 id=""><img src="images/intervention.png" style="width: 50px;font-family: 'arial';" alt="appr">&nbsp;NOTRE APPROCHE DE TRAVAIL</h2>
                    <div style=";width: 40px; height: 4px;background-color: orange;margin-left:70px;margin-top: -12px;"></div>
                    <p style="color:#ffffff;font-size:16px;text-align: justify;margin-left: 100px;margin-top:3em;">Notre processus d'intervention vise à fournir une approche personnalisée et efficace pour répondre à vos besoins.</br>
                     Nous mettons l'accent sur la compréhension approfondie de votre projet, la collaboration étroite avec vous et</br> la livraison de résultats exceptionnels.</p>
                </div>
            </div>
            <div class="row" style="margin-left: 0; margin-right: 0;margin-top: 0;">
              <div class="col-lg-12 pb-contenu" >
                  <div class="col-lg-2 pb" >
                      <div class="contenus" style="display: flex;justify-content: center;">
                        <img src="images/idea.png" style="width: 50px;font-family: 'arial'; margin: auto;" alt="" />
                      </div>
                      <h3 class="title-item">Expertise</h3>
                      <h4 class="detail" style="color: #fff;font-size: 13px;line-height: 25px;text-align: left;">-Analyse des besoins</br>-Étude conformément au cahier des charges</br>-Étude de propositions </br>-Architecture d'implémentation et de conception</h4>
                      <div class="horizontal-arrow"></div>
                    </div>
                  <div class="col-lg-2 pb">
                      <div class="contenus" style="display: flex;justify-content: left;">
                        <img src="images/graphic-design.png" style="width: 50px;font-family: 'arial';" alt="" />
                      </div>
                      <h3 class="title-item">Design</h3>
                      <h4 class="detail" style="color: #fff;font-size: 13px;line-height: 25px;text-align: left;">-Ergonomie des interfaces </br>-Style visuel de l'entreprise </br>-Maquettes</h4>
                      <div class="horizontal-arrow1"></div>
                  </div>
                  <div class="col-lg-2 pb">
                      <div class="contenus" style="display: flex;justify-content: center;">
                        <img src="images/project-management.png" style="width: 50px;font-family: 'arial';" alt="" />
                      </div>
                      <h3 class="title-item">Conception</h3>
                      <h4 class="detail" style="color: #fff;font-size: 13px;line-height: 25px;text-align: left;">-Interface utilisateur ergonomique </br>-Configuration sur mesure selon les besoins </br> </h4>
                      <div class="horizontal-arrow"></div>
                  </div>
                  <div class="col-lg-2 pb">
                     <div class="contenus" style="display: flex;justify-content: center;">
                      <img src="images/coding.png" style="width: 50px;font-family: 'arial';" alt="" />
                    </div>
                     <h3 class="title-item">Réalisation</h3>
                     <h4 class="detail" style="color: #fff;font-size: 13px;line-height: 25px;text-align: left;">-Réalisations concrètes de sites web et d'applications </br>-Livraison en accord avec les attentes spécifiées</h4>
                     <div class="horizontal-arrow"></div>
                  </div>
                  <div class="col-lg-2 pb">
                      <div class="contenus" style="display: flex;justify-content: left;">
                        <img src="images/tools.png" style="width: 50px;font-family: 'arial';" alt="" />
                      </div>
                      <h3 class="title-item">Suivi et entretien</h3>
                      <h4 class="detail" style="color: #fff;font-size: 13px;line-height: 25px;text-align: left;">-Amélioration sur mesure </br>-Actualisation selon les nouvelles technologies</h4>
                  </div></div>
            </div>
            </div>
        </div>
</section>

<section class="bw-nos=about bg-dark " style="padding: 120px 0;">
    <div class="container">
        <div id="acc" class="container containE about-area area-padding">
            <div class="row eds-on-scroll eds-scroll-visible animated slideInRight duration2">
                <div class="gch col-lg-6 order-lg-2 ">
                <div class="containere-loader4 ">
                  <svg class="loader4"  viewBox="0 0 340 340">
                    <circle cx="170" cy="170" r="160" stroke="grey"></circle>
                    <circle cx="170" cy="170" r="135" stroke="whitesmoke"></circle>
                    <circle cx="170" cy="170" r="110" stroke="grey"></circle>
                    <circle cx="170" cy="170" r="85" stroke="whitesmoke"></circle>
                  </svg>
                </div>
                  <div class="section-title" style="margin-top: 10em;">
                      <h4 class="" style="color:cadetblue;font-size:26px;text-align: center;">
                        <div class="icon-container">
                            <img  src="images/favicon.png" class="animated-icon " style="width: 50px;margin-left: 10em;margin-top: -2em;" alt="" />
                        </div>
                        <b class="b" style="margin-left: 80px">
                        Notre agence web vous accompagne dans votre démarche digitale
                        </b>
                    </h4>
                    <p     style="margin-left: 60px;"> Notre approche se distingue par notre engagement total à surpasser vos attentes. En combinant notre expertise inégalée et notre passion pour l'excellence,
                     nous créons une expérience exceptionnelle qui génère une réelle valeur ajoutée à chaque étape de votre projet.</p>
                  </div>
                </div>
              <div class="col-lg-6 " Grille-cercle.webp>
                  <div class="row row-valeurs">
                      <div class="crd col-sm-6">
                            <div class="crd" style="margin-left:0em;" >
                                <div class="card-inner">
                                      <img  src="images/ok.png" alt="Disponibilité" style="width: 50px;margin: auto;">
                                      <h4 class="title">Disponibilité :</h4>
                                      <p class="desc">Nos collaborateurs sont essentiellement des enthousiastes. Vous pouvez vous fier à leur savoir-faire, leur dévouement et leur investissement dans votre projet.</p>
                                </div>
                            </div>
                      </div>
                      <div class="crd col-sm-6">
                            <div class="crd"  style="margin-left:-2em" >
                                <div class="card-inner">
                                      <img class="icon" src="images/com.png" alt="Communication" style="width: 50px;margin: auto;">
                                      <h4 class="title">Communication ouverte :</h4>
                                      <p class="desc">Tout est communiqué de manière transparente et au moment approprié : vous êtes informé et engagé à toutes les étapes cruciales de votre projet.</p>
                                </div>
                            </div>
                      </div>
                      <div class="crd col-sm-6">
                            <div class="crd"  style="margin-left:3em;margin-top:2em;" >
                                <div class="card-inner">
                                      <img class="icon" src="images/inventory.png" alt="Exigence" style="width: 50px;margin: auto;">
                                      <h4 class="title">Exigence :</h4>
                                      <p class="desc">Notre méthodologie de gestion de projet itérative, étape par étape, nous permet d'assurer à la fois la qualité et le respect des délais avec rigueur.</p>
                           </div>
                          </div>
                      </div>
                      <div class="crd col-sm-6">
                            <div class="crd" style="margin-left:-1em;margin-top:2em;">
                                <div class="card-inner">
                                      <img class="icon" src="images/authenticity.png" alt="Exigence" style="width: 50px;margin: auto;">
                                <h4 class="title">Authenticité</h4>
                                <p class="desc">C'est en restant fidèle à soi-même que l'on exprime sa créativité </p>
                            </div>
                          </div>
                      </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>


<section class="bw-nos=about bg-dark " style="padding: 120px 0;">
    <div class="container">
        <div id="acc" class="container containE about-area area-padding">
            <div class="row eds-on-scroll eds-scroll-visible animated slideInRight duration2">
                <div class="gch col-lg-9 ">
                  <div class="section-title-resp" style="margin-top: -6em;">
                  <h4 class="responsive" style="color: Cadetblue;">Découvrez notre site web adapté à tous les écrans</h4>
                    <p style="margin-left: 60px;">Profitez d'une expérience utilisateur optimale où que vous soyez.</br> Notre site web est conçu pour s'adapter de manière fluide à tous les types d'écrans, que ce soit sur votre ordinateur, votre téléphone ou votre tablette.</p>
                  </div>
                </div>
                <div class="col-lg-3 " style="margin-top: -8em;">
                    <div class="container_resp">
                      <div class="loader_resp"></div>
                      <div class="loader_resp"></div>
                      <div class="loader_resp"></div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>


<section class="bw-nos=about bg-dark " style="padding: 120px 0;">
  <div class="container">
    <div style="right: -20em;" class="title1 col-12">
      <h4 class="typing" style="color:orange;font-size:26px;text-align: center;">Nos Equipes</h4>
    </div>
    <div class="row">
      <div class="col-md-3">
        <i class="overlay-icon far fa-address-card"></i>
      </div>
        <div class="col-md-3">
        <i class="overlay-icon far fa-address-card"></i>
      </div>
        <div class="col-md-3">
        <i class="overlay-icon far fa-address-card"></i>
      </div>
        <div class="col-md-3">
        <i class="overlay-icon far fa-address-card"></i>
      </div>
        <div class="col-md-3">

      </div>
        <div class="col-md-3">

      </div>
        <div class="col-md-3">

      </div>
    </div>
  </div>

</section>

@endsection


