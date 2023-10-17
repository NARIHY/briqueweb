@extends("app")
@section("style")
<style>

.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}


.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}

p {
    font-family: 'SourceSansPro-Regular';
    font-size: 18px;
    font-weight: 300;
    line-height: 30px;
    color: #ffffff;
}
.content {
    background: rgba(13, 15, 22, 0.8);
    top: 0;
    padding: 75px 30px;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-radius: 2px;
}
.content {
    position: absolute;
    background: rgba(0, 0, 0, 0);
    padding: 20px;
    width: 100%;
    height: 100%;
    padding: 0px 15px 7px;
    top: 125px;
    text-align: center;
    -moz-transition-duration: 0.5s;
    -webkit-transition-duration: 0.5s;
    -o-transition-duration: 0.5s;
    transition-duration: 0.5s;
    -moz-transition-timing-function: cubic-bezier(0, 1, 0.5, 1);
    -webkit-transition-timing-function: cubic-bezier(0, 1, 0.5, 1);
    -o-transition-timing-function: cubic-bezier(0, 1, 0.5, 1);
    transition-timing-function: cubic-bezier(0, 1, 0.5, 1);
    -webkit-box-shadow: inset 0px -320px 60px -120px #12141c;
    box-shadow: inset 0px -320px 60px -120px #12141c;
}
a, a:hover, a:focus {
    color: inherit;
    text-decoration: none;
    outline: 0;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}
.content h3 {
    font-family: 'Quicksand-Bold';
    font-size: 18px;
    color: #ffffff;
    line-height: 29px;
    margin-bottom: 1px;
    -moz-transition-duration: 0.5s;
    -webkit-transition-duration: 0.5s;
    -o-transition-duration: 0.5s;
    transition-duration: 0.5s;
    -moz-transition-timing-function: cubic-bezier(0, 1, 0.5, 1);
    -webkit-transition-timing-function: cubic-bezier(0, 1, 0.5, 1);
    -o-transition-timing-function: cubic-bezier(0, 1, 0.5, 1);
    transition-timing-function: cubic-bezier(0, 1, 0.5, 1);
}

/*pusle*/
.crd {
  background-color: transparent;
  font-family: 'Source Sans Pro', sans-serif;
  font-size: 16px;
  margin: 10px;
  max-width: 315px;
  min-width: 230px;
  overflow: hidden;
  position: relative;
  text-align: left;
  width: 100%;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
}

.crd *,
.crd *:before,
.crd *:after {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.45s ease;
  transition: all 0.45s ease;
}

.crd img {
  backface-visibility: hidden;
  max-width: 100%;
  vertical-align: top;
}

.crd:before,
.crd:after {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  content: '';
  background-color: #000000;
  opacity: 0.3;
  -webkit-transition: all 0.45s ease;
  transition: all 0.45s ease;
}

.crd:before {
  -webkit-transform: skew(30deg) translateX(-80%);
  transform: skew(30deg) translateX(-80%);
}

.crd:after {
  -webkit-transform: skew(-30deg) translateX(-70%);
  transform: skew(-30deg) translateX(-70%);
}

.crd figcaption {
    position: absolute;
    top: 0px;
    bottom: 0px;
    left: -100px;
    right: 0px;
    z-index: 1;
    bottom: 0;
    padding: 100px 0% 0px 0px;
    /* margin-right: 60px; */
    /* margin: 10px 10px 10px 0px; */
}
.crd figcaption:before,
.crd figcaption:after {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #000000;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
  content: '';
  opacity: 0.3;
  z-index: -1;
}

.crd figcaption:before {
  -webkit-transform: skew(30deg) translateX(-100%);
  transform: skew(30deg) translateX(-100%);
}

.crd figcaption:after {
  -webkit-transform: skew(-30deg) translateX(-90%);
  transform: skew(-30deg) translateX(-90%);
}

.crd h3,
.crd p {
  margin: 0;
  opacity: 0;
  letter-spacing: 1px;
}

.crd h3 {
  font-family: 'Teko', sans-serif;
  font-size: 12px;
  font-weight: 700;
  line-height: 1em;
  text-transform: uppercase;
}

.crd p {
  font-size: 0.9em;
}

.crd a {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;
}

.crd:hover h3,
.crd.hover h3,
.crd:hover p,
.crd.hover p {
  -webkit-transform: translateY(0);
  transform: translateY(0);
  opacity: 0.9;
  -webkit-transition-delay: 0.2s;
  transition-delay: 0.2s;
}

.crd:hover:before,
.crd.hover:before {
  -webkit-transform: skew(30deg) translateX(-20%);
  transform: skew(30deg) translateX(-20%);
  -webkit-transition-delay: 0.05s;
  transition-delay: 0.05s;
}

.crd:hover:after,
.crd.hover:after {
  -webkit-transform: skew(-30deg) translateX(-10%);
  transform: skew(-30deg) translateX(-10%);
}

.crd:hover figcaption:before,
.crd.hover figcaption:before {
  -webkit-transform: skew(30deg) translateX(-40%);
  transform: skew(30deg) translateX(-40%);
  -webkit-transition-delay: 0.15s;
  transition-delay: 0.15s;
}

.crd:hover figcaption:after,
.crd.hover figcaption:after {
  -webkit-transform: skew(-30deg) translateX(-30%);
  transform: skew(-30deg) translateX(-30%);
  -webkit-transition-delay: 0.1s;
  transition-delay: 0.1s;
}


/*essais*/

figcaption p {
	width: 65%;
	font-size: 68%;
	line-height: 1;
	letter-spacing: 1px;
	text-align: left;
	float: right;
	padding-left: 15px;
	border-left: 1px solid #fff;
	border-bottom: 1px solid #fff;
	transform: translate3d(40px, 0, 0);
	-webkit-transform: translate3d(40px, 0, 0);
	opacity: 0;
	transition: all .35s;
	font-family: "Open sans";
	padding-bottom: 5px
}

figcaption p:after,
figcaption p:before {
	width: 10px;
	height: 10px;
	background-color: rgba(255, 255, 255, 1);
	border-radius: 50px;
	content: "";
	position: absolute
}

figcaption p:after {
	top: -5px;
	left: -5px;
	-webkit-clip-path: polygon(50% 0, 100% 50%, 50% 100%, 0 50%);
	clip-path: polygon(50% 0, 100% 50%, 50% 100%, 0 50%)
}

figcaption p:before {
	right: 0;
	bottom: -6px;
	-webkit-clip-path: polygon(50% 0, 100% 50%, 50% 100%, 0 50%);
	clip-path: polygon(50% 0, 100% 50%, 50% 100%, 0 50%)
}


.effect-four:hover p {
	transform: translate3d(0, 0, 0);
	opacity: 1
}

/*text animation*/
.contente{
  position: absolute;
  top: 50%;
  left: 20%;
  transform: translate(-50%, -50%);
  height: 160px;
  overflow: hidden;
  font-family: 'Lato', sans-serif;
  font-size: 35px;
  line-height: 40px;
  color: #ecf0f1;
}
.contente__container {
  font-weight: 600;
  overflow: hidden;
  height: 40px;
  padding: 0 40px;
}
.contente__container:before {
  content: '[';
  left: 0;
}
.contente__container:after {
    content: ']';
    position: absolute;
    right: 50px;
}
.contente__container:after, .contente__container:before {
    position: absolute;
    top: 0;
    color: orange;
    font-size: 42px;
    line-height: 30px;
    -webkit-animation-name: opacity;
    -webkit-animation-duration: 2s;
    -webkit-animation-iteration-count: infinite;
    animation-name: opacity;
    animation-duration: 3.5s;
    animation-iteration-count: infinite;
}
.contente__container__text {
  display: inline;
  float: left;
  margin: 0;
}
.contente__container__list {
  margin-top: 0;
  padding-left: 110px;
  text-align: left;
  list-style: none;
  -webkit-animation-name: change;
  -webkit-animation-duration: 10s;
  -webkit-animation-iteration-count: infinite;
  animation-name: change;
  animation-duration: 10s;
  animation-iteration-count: infinite;
}
.contente__container__list__item {
  line-height: 40px;
  margin: 0;
}
@-webkit-keyframes opacity {
  0%, 100% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
}
@-webkit-keyframes change {
  0%, 12.66%, 100% {
    transform: translate3d(0, 0, 0);
  }
  16.66%, 29.32% {
    transform: translate3d(0, -25%, 0);
  }
  33.32%, 45.98% {
    transform: translate3d(0, -50%, 0);
  }
  49.98%, 62.64% {
    transform: translate3d(0, -75%, 0);
  }
  66.64%, 79.3% {
    transform: translate3d(0, -50%, 0);
  }
  83.3%, 95.96% {
    transform: translate3d(0, -25%, 0);
  }
}
@-o-keyframes opacity {
  0%, 100% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
}
@-o-keyframes change {
  0%, 12.66%, 100% {
    transform: translate3d(0, 0, 0);
  }
  16.66%, 29.32% {
    transform: translate3d(0, -25%, 0);
  }
  33.32%, 45.98% {
    transform: translate3d(0, -50%, 0);
  }
  49.98%, 62.64% {
    transform: translate3d(0, -75%, 0);
  }
  66.64%, 79.3% {
    transform: translate3d(0, -50%, 0);
  }
  83.3%, 95.96% {
    transform: translate3d(0, -25%, 0);
  }
}
@-moz-keyframes opacity {
  0%, 100% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
}
@-moz-keyframes change {
  0%, 12.66%, 100% {
    transform: translate3d(0, 0, 0);
  }
  16.66%, 29.32% {
    transform: translate3d(0, -25%, 0);
  }
  33.32%, 45.98% {
    transform: translate3d(0, -50%, 0);
  }
  49.98%, 62.64% {
    transform: translate3d(0, -75%, 0);
  }
  66.64%, 79.3% {
    transform: translate3d(0, -50%, 0);
  }
  83.3%, 95.96% {
    transform: translate3d(0, -25%, 0);
  }
}
@keyframes opacity {
  0%, 100% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
}
@keyframes change {
  0%, 12.66%, 100% {
    transform: translate3d(0, 0, 0);
  }
  16.66%, 29.32% {
    transform: translate3d(0, -25%, 0);
  }
  33.32%, 45.98% {
    transform: translate3d(0, -50%, 0);
  }
  49.98%, 62.64% {
    transform: translate3d(0, -75%, 0);
  }
  66.64%, 79.3% {
    transform: translate3d(0, -50%, 0);
  }
  83.3%, 95.96% {
    transform: translate3d(0, -25%, 0);
  }
}



/*ess*/
.gallery {
  display: flex;
  flex-wrap: wrap;
}

.image {
  position: relative;
  margin: 10px;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: rgba(0, 0, 0, 0.5);
  opacity: 0;
  transition: opacity 0.3s;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
}

.overlay:hover {
  opacity: 1;
}

.icon {
  display: inline-block;
  width: 50px;
  height: 50px;
  background-image: url('icon.png');
  background-size: cover;
  /* Ajoutez d'autres styles à l'icône transparent */
}

.modal {
  display: none;
  position: fixed;
  z-index: 999;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.9);
  overflow: auto;
}

.modal-content {
  display: block;
  max-width: 80%;
  max-height: 80%;
  margin: auto;
}

.close {
  color: #fff;
  position: absolute;
  top: 10px;
  right: 20px;
  font-size: 30px;
  font-weight: bold;
  cursor: pointer;
}

.close:hover {
  color: #ccc;
}


/*logo*/
.gallery {
  display: flex;
  flex-wrap: wrap;
}

.image1 {
  position: relative;
  margin: 10px;
}

.overlay1 {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: rgba(0, 0, 0, 0.5);
  opacity: 0;
  transition: opacity 0.3s;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
}

.overlay1:hover {
  opacity: 1;
}

.icon1 {
  border-radius: 20px;
    left: 50px;
    top: 35px;
    width: 10px;
    height: 10px;
    background-color: rgba(255, 255, 255, 0.7);
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
}

.icon1::before,
.icon1::after {
  content: "";
  position: absolute;
  height: 2px;
  width: 20px;
  background-color: #343f52;
}

.icon1::before {
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.icon1::after {
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) rotate(90deg);
}

.modal {
  display: none;
  position: fixed;
  z-index: 999;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.9);
  overflow: auto;
}

.modal-content {
  display: block;
  max-width: 80%;
  max-height: 80%;
  margin: auto;
}

.close {
  color: #fff;
  position: absolute;
  top: 10px;
  right: 20px;
  font-size: 30px;
  font-weight: bold;
  cursor: pointer;
}

.close:hover {
  color: #ccc;
}
.imgs{
  width:100px;
  height: 100px;
}
.card_ {
    width: 100px;
    border-radius: 20px;
    border-radius: 20px;
    margin-bottom: 15px;
    padding-top: 10px;
    background-color: rgba(128, 128, 128, 0.075);
}


/*logo*/
/*logo slider*/
/* Logo Slider */
.logo-slider {
	background: #343a40;
	-webkit-box-shadow: 0 0px 0px 0px rgba(0, 0, 0, 0.125);
	box-shadow: 0 0px 0px 0px rgba(0, 0, 0, 0.125);
	margin: auto;
	overflow: hidden;
	position: relative;
	width: 100%;
}

.logo-slider::before, .logo-slider::after {
	background: -webkit-gradient(linear, left top, right top, from(#343a40), to(rgba(255, 255, 255, 0)));
	background: linear-gradient(to right, #343a40 0%, rgba(255, 255, 255, 0) 100%);
	content: "";
	height: 175px;
	position: absolute;
	width: 200px;
	z-index: 2;
}

.logo-slider::after {
	right: 0;
	top: 0;
	-webkit-transform: rotateZ(180deg);
	transform: rotateZ(180deg);
}

.logo-slider::before {
	left: 0;
	top: 0;
}

.logo-slider .logo-slide-track {
	-webkit-animation: logo-scroll 5s linear infinite;
	animation: logo-scroll 5s linear infinite;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	width: calc(250px * 5);
  animation-duration: 50s;
  animation-iteration-count: infinite;
}

.logo-slider .slide {
	height: 150px;
	width: 250px;
	padding: 20px;
}

@-webkit-keyframes logo-scroll {
	0% {
		-webkit-transform: translateX(0);
		transform: translateX(0);
	}

	100% {
		-webkit-transform: translateX(calc(-250px * 5));
		transform: translateX(calc(-250px * 5));
	}
}

@keyframes logo-scroll {
  0% {
     transform: translateX(0);
  }
   100% {
     transform: translateX(calc(-30em * 1));
  }
}
	/*0% {
		-webkit-transform: translateX(0);
		transform: translateX(0);
	}

	100% {
		-webkit-transform: translateX(calc(-250px * 5));
		transform: translateX(calc(-250px * 5));
	}
}
*/
.imgslide{
  width:100px;
  height:100px;
}
/*loader_img*/

/*text animation*//*titrelogo*/
.contente_logo{
  position: absolute;
    top: 50%;
    width: 12em;
    left: 16%;
    transform: translate(-50%, -50%);
    height: 160px;
    overflow: hidden;
    font-family: 'Lato', sans-serif;
    font-size: 35px;
    line-height: 40px;
    color: #ecf0f1;
}
.contente_logo__container {
  font-weight: 600;
  overflow: hidden;
  height: 40px;
  padding: 0 40px;
}
.contente_logo__container:before {
  content: '[';
  left: 0;
}
.contente_logo__container:after {
     content: ']';
    position: absolute;
    right: -1px;
}
.contente_logo__container:after, .contente_logo__container:before {
    position: absolute;
    top: 0;
    color: orange;
    font-size: 42px;
    line-height: 30px;
    -webkit-animation-name: opacity;
    -webkit-animation-duration: 2s;
    -webkit-animation-iteration-count: infinite;
    animation-name: opacity;
    animation-duration: 3.5s;
    animation-iteration-count: infinite;
}
.contente_logo__container__text {
  display: inline;
  float: left;
  margin: 0;
}
.contente_logo__container__list {
  margin-top: 0;
  padding-left: 110px;
  text-align: left;
  list-style: none;
  -webkit-animation-name: change;
  -webkit-animation-duration: 10s;
  -webkit-animation-iteration-count: infinite;
  animation-name: change;
  animation-duration: 10s;
  animation-iteration-count: infinite;
}
.contente_logo__container__list__item {
  line-height: 40px;
  margin: 0;
}
@-webkit-keyframes opacity {
  0%, 100% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
}
@-webkit-keyframes change {
  0%, 12.66%, 100% {
    transform: translate3d(0, 0, 0);
  }
  16.66%, 29.32% {
    transform: translate3d(0, -25%, 0);
  }
  33.32%, 45.98% {
    transform: translate3d(0, -50%, 0);
  }
  49.98%, 62.64% {
    transform: translate3d(0, -75%, 0);
  }
  66.64%, 79.3% {
    transform: translate3d(0, -50%, 0);
  }
  83.3%, 95.96% {
    transform: translate3d(0, -25%, 0);
  }
}
@-o-keyframes opacity {
  0%, 100% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
}
@-o-keyframes change {
  0%, 12.66%, 100% {
    transform: translate3d(0, 0, 0);
  }
  16.66%, 29.32% {
    transform: translate3d(0, -25%, 0);
  }
  33.32%, 45.98% {
    transform: translate3d(0, -50%, 0);
  }
  49.98%, 62.64% {
    transform: translate3d(0, -75%, 0);
  }
  66.64%, 79.3% {
    transform: translate3d(0, -50%, 0);
  }
  83.3%, 95.96% {
    transform: translate3d(0, -25%, 0);
  }
}
@-moz-keyframes opacity {
  0%, 100% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
}
@-moz-keyframes change {
  0%, 12.66%, 100% {
    transform: translate3d(0, 0, 0);
  }
  16.66%, 29.32% {
    transform: translate3d(0, -25%, 0);
  }
  33.32%, 45.98% {
    transform: translate3d(0, -50%, 0);
  }
  49.98%, 62.64% {
    transform: translate3d(0, -75%, 0);
  }
  66.64%, 79.3% {
    transform: translate3d(0, -50%, 0);
  }
  83.3%, 95.96% {
    transform: translate3d(0, -25%, 0);
  }
}
@keyframes opacity {
  0%, 100% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
}
@keyframes change {
  0%, 12.66%, 100% {
    transform: translate3d(0, 0, 0);
  }
  16.66%, 29.32% {
    transform: translate3d(0, -25%, 0);
  }
  33.32%, 45.98% {
    transform: translate3d(0, -50%, 0);
  }
  49.98%, 62.64% {
    transform: translate3d(0, -75%, 0);
  }
  66.64%, 79.3% {
    transform: translate3d(0, -50%, 0);
  }
  83.3%, 95.96% {
    transform: translate3d(0, -25%, 0);
  }
}

/*loader_img*/
.loader_img {
    left: 285px;
    top: 1em;
    width: 64px;
    height: 64px;
    position: relative;
    background: #FFF;
    border-radius: 4px;
    overflow: hidden;
    z-index: 5;
}

.loader_img:before {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  width: 40px;
  height: 40px;
  transform: rotate(45deg) translate(30%, 40%);
  background: #ff9371;
  box-shadow: 32px -34px 0 5px cadetblue;
  animation: slide 2s infinite ease-in-out alternate;
  z-index:5;
}

.loader_img:after {
  content: "";
  position: absolute;
  left: 10px;
  top: 10px;
  width: 16px;
  height: 16px;
  border-radius: 50%;
  background: #ff3d00;
  transform: rotate(0deg);
  transform-origin: 35px 145px;
  animation: rotate 2s infinite ease-in-out;
  z-index:5;
}

@keyframes slide {
  0% , 100% {
    bottom: -35px
  }

  25% , 75% {
    bottom: -2px
  }

  20% , 80% {
    bottom: 2px
  }
}

@keyframes rotate {
  0% {
    transform: rotate(-15deg)
  }

  25% , 75% {
    transform: rotate(0deg)
  }

  100% {
    transform: rotate(25deg)
  }
}

img.grille{
    transform: rotate(45deg);
    opacity: 0.4;
    margin-left: -15em;
    left: 5em;
    margin-top: -8em;
}
img.grille2{
  transform: rotate(30deg);
    opacity: 0.4;
    margin-top: -55em;
    margin-left: 10em;
    width: 100px;
}
img.grille3{
  transform: rotate(30deg);
    opacity: 0.4;
    margin-top: -40em;
    margin-left: 10em;
    width: 100px;
}
div#porfolio {
    margin-top: 0em;
}
/*loadeer anim bas*/
.loader_anim-cont {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-left: 150em;
  margin-top: -15em;
}

.loader_anim {
  margin-right: 90em;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    transform: rotate(45deg);
}

.anim-inner {
  position: fixed;
  width: 0.5rem;
  height: 0.5rem;
  border-radius: 50%;
  background-color: orange;
  animation: loader_05101 1.2s linear infinite;
}

.anim-inner:nth-child(1) {
  top: 0;
  left: 0;
  animation-delay: 0s;
}

.anim-inner:nth-child(2) {
  top: 0;
  left: 1.5rem;
  animation-delay: 0.1s;
}

.anim-inner:nth-child(3) {
  top: 0;
  left: 3rem;
  animation-delay: 0.2s;
}

.anim-inner:nth-child(4) {
  top: 1.5rem;
  left: 0;
  animation-delay: 0.3s;
}

.anim-inner:nth-child(5) {
  top: 1.5rem;
  left: 1.5rem;
  animation-delay: 0.4s;
}

.anim-inner:nth-child(6) {
  top: 1.5rem;
  left: 3rem;
  animation-delay: 0.5s;
}

.anim-inner:nth-child(7) {
  top: 3rem;
  left: 0;
  animation-delay: 0.6s;
}

.anim-inner:nth-child(8) {
  top: 3rem;
  left: 1.5rem;
  animation-delay: 0.7s;
}

.anim-inner:nth-child(9) {
  top: 3rem;
  left: 3rem;
  animation-delay: 0.8s;
}

@keyframes loader_05101 {
  0% {
    transform: scale(0);
  }

  100% {
    transform: scale(2);
    opacity: 0;
  }
}
/*loadeer anim bas*/
.loader_anim-cont2 {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-left: 10em;

}

/*arrow logo-partenaire*/
/*.arrow {
  transform: rotate(90deg);

}*/

.arrow span {
  display: block;
  width: 15px;
  height: 15px;
  border-bottom: 5px solid orange;
  border-right: 5px solid orange;
  transform: rotate(45deg);
  margin: -15px;
  animation: animate28797 2s infinite;
}

.arrow span:nth-child(2) {
  animation-delay: -0.2s;
}

.arrow span:nth-child(3) {
  animation-delay: -0.4s;
}

@keyframes animate28797 {
  0% {
    opacity: 0;
    transform: rotate(45deg) translate(-20px, -20px);
  }

  50% {
    opacity: 1;
  }

  100% {
    opacity: 0;
    transform: rotate(45deg) translate(20px, 20px);
  }
}

/*text color change*/
span.title-word {
  animation: color-animation 4s linear infinite;
}

span.title-word-1 {
  --color-1: #DF8453;
  --color-2: #75b0b2;
  --color-3: #FF8433;
}

span.title-word-2 {
  --color-1: orange;
  --color-2: #ACCFCB;
  --color-3: cadetblue;
}

span.title-word-3 {
  --color-1: #acc6c7;
  --color-2: #FFC199;
  --color-3: #c3d3d4;
}

span.title-word-4 {
  --color-1: cadetblue;
  --color-2: #DF8453;
  --color-3: #ffcb60 ;
}

@keyframes color-animation {
  0%    {color: var(--color-1)}
  32%   {color: var(--color-1)}
  33%   {color: var(--color-2)}
  65%   {color: var(--color-2)}
  66%   {color: var(--color-3)}
  99%   {color: var(--color-3)}
  100%  {color: var(--color-1)}
}


h4.titre{
  font-family: "Montserrat", sans-serif;
  font-weight: 800;
  font-size: 20px;
  text-transform: uppercase;
}

/*insight-row animated*/
.insight-row {
    text-align: center;
    opacity: 0;
    -webkit-transform: translate(0px, 5rem);
    -webkit-transition: -webkit-transform 0.8s, opacity 0.8s;
    transform: translate(0px, 5rem);
    transition: transform 0.8s, opacity 0.8s;
    position: relative;
    z-index: 7;
}

.animated {
    -webkit-transform: translate(0,0)!important;
    transform: translate(0,0)!important;
    opacity: 1!important;
}
</style>
@endsection

@section('slider')
@include('public.site.slide')
@endsection
@section("content")
<section class="bw-nos=porfolio bg-dark " style="padding: 120px 0;">
<div class="loader_anim-cont2">
        <div class="loader_anim">
          <div class="anim-inner"></div>
          <div class="anim-inner"></div>
          <div class="anim-inner"></div>
          <div class="anim-inner"></div>
          <div class="anim-inner"></div>
          <div class="anim-inner"></div>
          <div class="anim-inner"></div>
          <div class="anim-inner"></div>
        </div>
      </div>
  <div class="container">
    <div id="porfolio" class="container containE porfolio-area area-padding">
      <div class="row" style="margin-left: 0; margin-right: 0">
          <div style="margin-top: 50px;right: -20em;" class="title1 col-12">
              <div class="contente">
                <div class="contente__container">
                  <p class="contente__container__text" style="font-size: 50px;font-family: 'Lato', sans-serif; text-shadow: 0 0 7px rgba(255,255,255,.3), 0 0 3px rgba(255,255,255,.3);">
                    Nos &nbsp;
                  </p>
                  <ul class="contente__container__list">
                    <li class="contente__container__list__item">Portfolio !</li>
                    <li class="contente__container__list__item">Projets en cours!</li>
                    <li class="contente__container__list__item">Portfolio  !</li>
                    <li class="contente__container__list__item">Projets en cours !</li>
                  </ul>
                </div>
              </div>
              <p style="color:#878787;text-align:center; margin-left: -40em;padding-bottom: 25px; margin-top: 3em;">Confiez-nous vos projets et découvrez une approche unique et innovante pour les réaliser.</br> Notre équipe passionnée et créative est prête à dépasser vos attentes et à transformer vos idées en réalité.</p>
					</div>
<!--loader1-->
          <div class="img_grilles">
              <img class="grille" src="images/Grille-cercle.webp" style=""alt="" />
          </div>
          <!--list1-->
          <!--div class="card_ car_s col-lg-4 col-md-6 col-sm-12">
              <div class="about-move">
                <figure class="crd">
                  <img src="images/agos.png" alt="sample108" />
                  <figcaption>
                    <p>Amasing Gospel Spirit</br>https://www.agospelspirit.com</p>
                  </figcaption>
                  <a href="https://www.agospelspirit.com/"></a>
                </figure>
              </div>
            </div>
            <div class="card_ car_s col-lg-4 col-md-6 col-sm-12">
              <div class="about-move">
                <figure class="crd">
                  <img src="images/agos.png" alt="sample108" />
                  <figcaption>
                  <p>Amasing Gospel Spirit</br>https://www.agospelspirit.com</p>
                  </figcaption>
                  <a href="https://www.agospelspirit.com/"></a>
                </figure>
              </div>
            </div>
            <div class="card_ car_s col-lg-4 col-md-6 col-sm-12">
              <div class="about-move">
                <figure class="crd">
                  <img src="images/agos.png" alt="sample108" />
                  <figcaption>
                  <p>Amasing Gospel Spirit</br>https://www.agospelspirit.com</p>
                  </figcaption>
                  <a href="https://www.agospelspirit.com/"></a>
                </figure>
              </div>
            </div-->

            <div class="card_ car_s col-lg-4 col-md-6 col-sm-12">
              <div class="about-move">
                <figure class="crd">
                  <img src="images/port1.jpg" alt="sample108" />
                  <figcaption>
                    <p>Lorem ipsum</br>https://www.agospelspirit.com</p>
                  </figcaption>
                  <a href="https://www.agospelspirit.com/"></a>
                </figure>
              </div>
            </div>
            <div class="card_ car_s col-lg-4 col-md-6 col-sm-12">
              <div class="about-move">
                <figure class="crd">
                  <img src="images/port2.jpg" alt="sample108" />
                  <figcaption>
                  <p>Lorem ipsum</br>https://www.agospelspirit.com</p>
                  </figcaption>
                  <a href="https://www.agospelspirit.com/"></a>
                </figure>
              </div>
            </div>
            <div class="card_ car_s col-lg-4 col-md-6 col-sm-12">
              <div class="about-move">
                <figure class="crd">
                  <img src="images/port3.jpg" alt="sample108" />
                  <figcaption>
                  <p>Lorem ipsum</br>https://www.agospelspirit.com</p>
                  </figcaption>
                  <a href="https://www.agospelspirit.com/"></a>
                </figure>
              </div>
            </div>
          </div>
          </div>
      </div>
      <div class="loader_anim-cont">
        <div class="loader_anim">
          <div class="anim-inner"></div>
          <div class="anim-inner"></div>
          <div class="anim-inner"></div>
          <div class="anim-inner"></div>
          <div class="anim-inner"></div>
          <div class="anim-inner"></div>
          <div class="anim-inner"></div>
          <div class="anim-inner"></div>
        </div>
      </div>


</section>

<!--s> logo<-->
<section class="bw-nos=logo bg-dark " style="">
  <div class="container">
    <div id="logo" class="container containE ogo-area area-padding">
      <div class="row" style="margin-left: 0; margin-right: 0">
      <div style="margin-top:5em;right:-19em;" class="title1 col-lg-12">
              <div class="contente_logo">
                <div class="contente_logo__container">
                  <p class="contente_logo__container__text" style="font-size: 50px;font-family: 'Lato', sans-serif; text-shadow: 0 0 7px rgba(255,255,255,.3), 0 0 3px rgba(255,255,255,.3);">
                    Nos &nbsp;
                  </p>
                  <ul class="contente_logo__container__list">
                    <li class="contente_logo__container__list__item">Logos !</li>
                    <li class="contente_logo__container__list__item">Carterie</li>
                    <li class="contente_logo__container__list__item">Flyers</li>
                    <li class="contente_logo__container__list__item">Logos</li>
                    </ul>
                </div>
              </div>
              <div class="loader_img"></div>
              <p style="color:#878787;text-align:center; margin-left: -40em;padding-bottom: 25px; margin-top: 3em;">
              Découvrez des créations visuelles saisissantes mettant en valeur l'expertise en design graphique et la capacité à transmettre </br>des messages percutants.
              Explorez ces créations inspirantes alliant créativité, professionnalisme et charme, et imaginez </br>les possibilités infinies qu'elles permettent pour votre entreprise ou projet.</p>
					</div>

          <div class="gallery col-lg-12 pb-contenu">
              <div  class="card_ car_s col-lg-2 pb">
                  <div class="image1">
                      <img src="{{asset('images/logo.png')}}" class="imgs" alt="Image 2">
                          <div class="overlay1">
                              <div class="icon1"></div>
                          </div>
                      </div>
                </div>
              <div  class="card_ car_s col-lg-2 pb">
                  <div class="image1">
                          <img src="{{asset('images/logo.png')}}" class="imgs" alt="Image 2">
                              <div class="overlay1">
                                  <div class="icon1"></div>
                              </div>
                          </div>
                    </div>
                <div  class="card_ car_s col-lg-2 pb2">
                  <div class="image1">
                        <img src="{{asset('images/logo.png')}}" class="imgs" alt="Image 2">
                            <div class="overlay1">
                                <div class="icon1"></div>
                            </div>
                        </div>
                </div>
                <div  class="card_ car_s col-lg-2 pb">
                  <div class="image1">
                        <img src="{{asset('images/logo.png')}}" class="imgs" alt="Image 2">
                            <div class="overlay1">
                                <div class="icon1"></div>
                            </div>
                        </div>
                </div>
                <div  class="card_ car_s col-lg-2 pb">
                  <div class="image1">
                        <img src="{{asset('images/logo.png')}}" class="imgs" alt="Image 2">
                            <div class="overlay1">
                                <div class="icon1"></div>
                            </div>
                        </div>
                </div>
                <div  class="card_ car_s col-lg-2 pb">
                  <div class="image1">
                        <img src="{{asset('images/logo.png')}}" class="imgs" alt="Image 2">
                            <div class="overlay1">
                                <div class="icon1"></div>
                            </div>
                        </div>
                </div>
            </div>
      </div>
    </div>
  </div>
</section>

<!--logo partenaires-->
<section class="bw-nos=logo bg-dark " style="">
  <div class="container">
    <div id="logo" class="container containE ogo-area area-padding">
      <div class="row insight-row animated" style="margin-left: 0; margin-right: 0">
          <div style="margin-top: 0;padding-bottom: 25px; margin-top: 3em;" class="title1 col-12">
                <div class="arrow">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                    <div class="cont-titr">
                        <h4 class="titre">
                          <span class="title-word title-word-1">&nbsp;&nbsp;Symboles</span>
                          <span class="title-word title-word-2">de</span>
                          <span class="title-word title-word-3">collaboration</span>
                          <span class="title-word title-word-4">fructueuse</span>
                        </h4>
                    </div>
                <p style="color:#ffffff;text-align:center;margin-right: 30em;font-size:22px;"> Découvrez les logos de nos clients partenaires</p>
          </div>

          <div class="gallery col-lg-12 pb-contenu">
              <div  class=" col-lg-2 pb">
                  <div class="image1">
                      <img src="{{asset('images/logo-ags.jpg')}}" class="imgs" alt="Image 2">
                      </div>
                </div>
              <div  class=" col-lg-2 pb">
                  <div class="image1">
                          <img src="{{asset('images/logo-fmc.webp')}}" class="imgs" alt="Image 2">
                          </div>
                    </div>
                <div  class=" col-lg-2 pb2">
                  <div class="image1">
                        <img src="{{asset('images/logo-fusion.webp')}}" class="imgs" alt="Image 2">
                        </div>
                </div>
                <div  class="col-lg-2 pb">
                  <div class="image1">
                        <img src="{{asset('images/logo-minvop.png')}}" class="imgs" alt="Image 2">
                        </div>
                </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('scripts')
    <!-- JavaScript Bundle with Popper -->
    <script type="text/javascript">
const images = document.querySelectorAll('.gallery .image');
const modal = document.querySelector('.modal');
const modalImg = document.querySelector('.modal-content');

images.forEach((image) => {
  const overlay = image.querySelector('.overlay');
  const img = image.querySelector('img');

  overlay.addEventListener('click', () => {
    console.log("ok");
    modal.style.display = 'block';
    modalImg.src = img.src;
  });
});

const closeBtn = document.querySelector('.close');
closeBtn.addEventListener('click', () => {
  modal.style.display = 'none';
});
    </script>
@endsection

