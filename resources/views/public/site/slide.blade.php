<style type="text/css">
	.bw-actives li{
		color: #3a7982;
		border-bottom: 3px solid #ddd;
		list-style-type: circle;
		padding: 14px
	}

	ul li:hover{
		color: #e9b216;
	}

	.btn:hover{
		background: #e9b216;

	}
	.btn{
		margin-bottom: 12px;
		margin-left: 57px;
		font-size: 20px;
	}
	.bw-image-slider img:hover{
		filter:  blur(0px) brightness(137%) contrast(100%) grayscale(9%) hue-rotate(0deg) opacity(96%) saturate(140%);
	}
::marker {
    color: black;
}

</style>
<div class="container">
	<div class="row">
		<div class="col-md-7 bw-image-slider" style="margin-top: 16%">
			<img src="{{asset('images/slide.webp')}}" style="width: 90%; margin-left: 90px">
		</div>
		<div class="col-md-5 " style="margin-top: 11%">
			<h2 style="color:#e9b216; font-family: Aladin !imporatant; margin-left: 52px ">Nos Activités.</h2>
			<ul class="bw-actives mt-5">
				<li>Developpement Web</li>
				<li>Création de logo</li>
				<li>Refonte et detourage</li>
				<li>Rédaction</li>
				<li>Réferencement</li>
			</ul>
			<button  class="btn mt-5" type="button">Nos contact</button>
		</div>
	</div>
</div>
