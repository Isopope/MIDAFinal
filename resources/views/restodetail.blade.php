<!DOCTYPE html>
<html lang="en">
<head>
        <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CNN9LT5GNB"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-CNN9LT5GNB');
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rest-place</title>
    <link rel="stylesheet" href="{{url('style2.css')}}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style type="text/css">
		.img_box {
			width: 100%;
			  height: 300px;
	}
	
	.img_box img {
	  width: 100%;
	  height: 100%;
	  object-fit: cover;
	}
	  </style>
</head>
<body>
	<section id="Home">
        @include('layouts.navbarconected')
		<div class="slider_containerr">
			<div class="containerr">
			  <div class="swiper card_slider">
				<div class="swiper-wrapper">
					@foreach ($locals as $local )
						<div class="swiper-slide">
							<div class="img_box">
							<img src="{{url('local_photo/'.$local->local_photo)}}">
							</div>
						</div>
					@endforeach
				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
				<div class="swiper-pagination"></div>
			  </div>
			</div>
		  </div>
 </section>

 <div class="row row-cols-1 row-cols-md-2 g-4" style="margin-top:50px; margin-left:50px; margin-right:50px;">
	<div class="col">
	  <div class="card h-100">
		<div class="card-body">
		  <h5 class="card-title">{{$restaurant->resto_name}}</h5>
		  <p class="card-text">Adresse:{{$restaurant->adresse}}</p>
		  <p class="card-text">Contact:{{$restaurant->resto_phone}}</p>
		  <p class="card-text">Email:{{$restaurant->resto_email}}</p>
		  <p class="card-text">Prix moyen des repas:{{$restaurant->resto_price}}</p>
		</div>
		
	  </div>
	</div>
	<div class="col">
	  <div class="card h-100">
		<div class="card-body">
		  <h5 class="card-title">Description</h5>
		  <p class="card-text">{{$restaurant->resto_desc}}</p>
		</div>
		
	  </div>
	</div>
  </div>
 @include('layouts.food')

@include('layouts.order')
@include('layouts.footer')

<!--script -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".card_slider", {
      slidesPerView: 3,
      spaceBetween: 0,
      loop:true,
      speed:400,
      autoplay:{
        delay:2000
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation:{
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</body>
</html>