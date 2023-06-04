
  <!-- Favicons -->
  <link href="{{url('assetsfood/img/favicon.png')}}" rel="icon">
  <link href="{{url('assetsfood/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('assetsfood/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{url('assetsfood/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="{{url('assetsfood/css/style.css')}}" rel="stylesheet">

</head>

<body>
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style="text-align:center; font-size:50px;">Menu</h2>
          <p style="text-align:center;font-size:20px;">De magnifiques repas, rien que pour votre plaisir gourmet</p>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($repas as $food)
                <div class="col-lg-6 menu-item filter-specialty">
                    <img src="{{url('food_picture/'.$food->food_picture)}}" class="menu-img" alt="">
                    <div class="menu-content">
                    <a href="#">{{$food->food_name}}</a><span>{{$food->food_price}} FCFA</span>
                    </div>
                    <div class="menu-ingredients">
                    {{$food->food_desc}}
                    </div>
                </div>
            @endforeach

          

        </div>

      </div>
    </section><!-- End Menu Section -->

  <!-- Vendor JS Files -->
  <script src="{{url('assetsfood/vendor/aos/aos.js')}}"></script>
  <script src="{{url('assetsfood/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{url('assetsfood/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{url('assetsfood/js/main.js')}}"></script>
