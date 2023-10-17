@extends("app")
@section("style")
<style>
.singup {
  color: #000;
  text-transform: uppercase;
  letter-spacing: 2px;
  display: block;
  font-weight: bold;
  font-size: x-large;
  margin-top: 1.5em;
}

.card_contactform {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 350px;
  width: 300px;
  flex-direction: column;
  gap: 35px;
  border-radius: 15px;
  background: #e3e3e3;
  box-shadow: 16px 16px 32px #c8c8c8,
        -16px -16px 32px #fefefe;
  border-radius: 8px;
}


.inputBox1 {
  position: relative;

}
.inputBox {
  position: relative;
  width: 250px;
}

.inputBox input,
.inputBox1 input {
  width: 100%;
    padding: 10px;
    outline: none;
    border: none;
    color: #fff;
    font-size: 1em;
    background-color: rgba(48, 48, 48, 0.123);
    border-left: 2px solid cadetblue;
    border-bottom: 2px solid cadetblue;
    transition: 0.1s;
    border-bottom-left-radius: 8px;
}
.inputBox1 textarea{
    height: 200px;
    width: 100%;
    width: 100%;
    padding: 10px;
    outline: none;
    border: none;
    color: #fff;
    font-size: 1em;
    background: -webkit-linear-gradient(bottom, rgba(95, 158, 160, 0.342), rgba(95, 158, 160, 0.185), transparent, transparent, transparent);
    border-left: 2px solid cadetblue;
    border-bottom: 2px solid cadetblue;
    transition: 0.1s;
    border-bottom-left-radius: 8px;
}
.inputBox span,
.inputBox1 span {
  margin-top: 5px;
  position: absolute;
  left: 0;
  transform: translateY(-4px);
  margin-left: 10px;
  padding: 10px;
  pointer-events: none;
  font-size: 12px;
  color: grey;
  text-transform: uppercase;
  transition: 0.5s;
  letter-spacing: 3px;
  border-radius: 8px;
}

.inputBox input:valid~span,
.inputBox input:focus~span {
  transform: translateX(113px) translateY(-15px);
  font-size: 0.8em;
  padding: 5px 10px;
  background: orange;
  letter-spacing: 0.2em;
  color: white;
  border: 2px;
}

.inputBox1 textarea:valid~span,
.inputBox1 textarea:focus~span {
  transform: translateX(156px) translateY(-15px);
  font-size: 0.8em;
  padding: 5px 10px;
  background: orange;
  letter-spacing: 0.2em;
  color: white;
  border: 2px;
}
.inputBox1 input:valid~span,
.inputBox1 input:focus~span {
  transform: translateX(156px) translateY(-15px);
  font-size: 0.8em;
  padding: 5px 10px;
  background: orange;
  letter-spacing: 0.2em;
  color: white;
  border: 2px;
}
.inputBox1 textarea:valid,
.inputBox1 textarea:focus,
.inputBox input:valid,
.inputBox input:focus,
.inputBox1 input:valid,
.inputBox1 input:focus {
  border: 2px solid orange;
  border-radius: 8px;
}

.enter {
  height: 45px;
  width: 100px;
  border-radius: 5px;
  border: 2px solid #000;
  cursor: pointer;
  background-color: transparent;
  transition: 0.5s;
  text-transform: uppercase;
  font-size: 10px;
  letter-spacing: 2px;
  margin-bottom: 3em;
}

.enter:hover {
  background-color: rgb(0, 0, 0);
  color: white;
}
.body {
    padding-bottom: 80px;
}
.slider {
    position: relative;
}


</style>
@endsection

@section('slider')
@include('public.site.slide')
@endsection
@section("content")

    <div class="slider">
        <h1 class="">DEVELOPPEMENT D'APPLICATION WEB ET MOBILE</h1>
        <h1 class="">CRÉATION DE SITE VITRINE / E-COMMERCE</h1>
        <h1 class="">REFONTE DE VOTRE SITE WEB</h1>
        <h1 class="actiff">CRÉATION DE VOTRE LOGO / RETOUCHE ET DÉTOURAGE</h1>
        <h1 class="">SERVICES DE RÉFÉRENCEMENT</h1>
        <h1 class="">RÉDACTION DE VOS CONTENUE</h1>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 390 50">
  <path fill="cadetblue" d="M0,47.585c0,97.5,0,390,0,390H390C390,137.5,0,47.585,0,47.585z"/>
</svg>

<div id="contact" class="body container" style="height: 100vh;">
        <div class="contact_pub col-lg-6" style="color: white;margin-top: 15em;">
            <h3>
                N'hesiter pas à nous contacter <strong id="pendule" style="color: orange;">!</strong>
            </h3>
            <!-- <div class="chat">
              <a href="#contact"  title="Envoyez un email"> <i class="fa fa-envelope"  style="background-color:cadetblue;"></i></a>
            </div> -->
            <p>
               Envoyez-nous un message par Email,Facebook ou contactez-nous via Whatsapp.
            </p>
        </div>
        <div class="row" style="margin-left: 0; margin-right: 0;margin-top: 20px">
            <div class="col-lg-6" style="margin-top: 30px;">
                <b style="margin-left: 210px; color: cadetblue;">Map</b>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1887.1354417884581!2d47.527334453967285!3d-18.91940036265434!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f07fdfcf08652b%3A0xa76c749188ce1f31!2sBrique%20web%20-%20Agence%20de%20communication%20et%20Marketing%20digital%20%C3%A0%20Madagascar!5e0!3m2!1sfr!2smg!4v1663578917508!5m2!1sfr!2smg" width="100%" height="380" frameborder="0" style="border:0; border-radius: 20px;z-index: 2;position: relative;" allowfullscreen=""></iframe>
                <div class="cub" style="position: relative; width: 200px;height: 200px;border-top: 8px solid cadetblue;border-left: 8px solid cadetblue;border-radius: 20px 0 0 0;z-index: 1;margin-top: -399px;
    margin-left: -14px;">
              </div>
            </div>
            <div class="col-lg-6 form" style="margin-top: 50px;">
                @if (session('success'))
                    <p style="color: yellow">{{session('success')}}</p>
                @endif
                <form action="{{route('Public.contact.save')}}" method="POST" id="register" role="form">
                    @csrf
                    <div class="row"    style="gap: 35px; display: -ms-flexbox;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;">
                        <div class="col-lg-3">
                            <div class="inputBox">
                                <input type="text" required="required" name="name">
                                <span class="user">Nom</span>
                            </div>
                        </div>
                        <div class="col-lg-3"  >
                            <div class="inputBox" style="margin-left: 100px;">
                                <input type="text" required="required" name="email">
                                <span class="user">Email</span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="inputBox1">
                                <input type="number" id="tel" required="required" name="telephone">
                                <span class="telephone">Téléphone</span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="inputBox1">
                        <textarea class="inputBox1" id="message" name="message" required=""  style="letter-spacing: 2px;font-size: 13px;font-family: 'arial';"></textarea>
                        <span class="msg">Message</span>
                      </div>
                    <div class="bouton" style="">
                      <div class="popup" style="display:hidden;position: relative;display: inline-block;cursor: pointer;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;">
                        <span class="popuptext" id="myPopup" style="display:hidden;"><!--Message envoyé!--></span>
                      </div>
                        <button type="submit" style="width: 200px;height: 50px;float: right;outline: none;border: none;color: white;border-radius: 20px;margin-top: 25px;text-transform: uppercase;font-size: 13px;font-weight: bolder;border: 2px solid orange;
    background-color: transparent;cursor: pointer;">Envoyer <svg style="margin-left: 8px;" class="svg-inline--fa fa-paper-plane" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paper-plane" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L277.3 424.9l-40.1 74.5c-5.2 9.7-16.3 14.6-27 11.9S192 499 192 488V392c0-5.3 1.8-10.5 5.1-14.7L362.4 164.7c2.5-7.1-6.5-14.3-13-8.4L170.4 318.2l-32 28.9 0 0c-9.2 8.3-22.3 10.6-33.8 5.8l-85-35.4C8.4 312.8 .8 302.2 .1 290s5.5-23.7 16.1-29.8l448-256c10.7-6.1 23.9-5.5 34 1.4z"></path></svg><!-- <i style="margin-left: 8px;" class="fa-solid fa-paper-plane"></i> Font Awesome fontawesome.com --></button>
                        <!-- <input type="hidden" name="_captcha" value="false"-->
                    </div>

    </div>
                </form>
                <script type="text/javascript">
                  $(document).ready(function() {
                    $("#register").submit(function(e) {
                      e.preventDefault();
                      var popup = document.getElementById("myPopup");
                      var name = $('#name').val(),
                        email = $('#email').val(),
                        tel = $('#tel').val(),
                        message = $('#message').val();
                        $.ajax({
                          type: "POST",
                          url: "https://formsubmit.co/ajax/contact@briqueweb.com",
                          data: "name=" + name + "&email=" + email + "&tel=" + tel + "&message=" + message ,
                          success: function(html) {
                            console.log(html);
                            $("#register").get(0).reset();

                            popup.classList.toggle("show");
                              setTimeout(function() {
                              popup.classList.toggle("show");
                            }, 3000);
                          }
                        });
                      return false;
                    });
                  });
                </script>
            </div>
        </div>
        @endsection
