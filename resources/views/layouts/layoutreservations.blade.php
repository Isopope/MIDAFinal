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
    <title>Food Website</title>
    <link rel="stylesheet" href="{{url('style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <section id="Home">
       @include('layouts.layoutnav')
        <div class="main">

            <div class="men_text">
                <h1>Découvrez et reserver le meilleur restaurant</h1>
                <div class="searchform">
                    <form method="GET" action="#">
                        @csrf
  <div class="row">
    <div class="col-sm-6 col-md-4">
      <input type="text" id="searchbar" name="searchbar" placeholder="Rechercher un restaurant" required style="margin-left: 50px; padding: 17px 90px;font-size:17px;background: #fff;overflow: hidden;box-shadow: none !important;; border: 1px rgba(141, 136, 136, 0.247) solid;border-radius: 10px; display: flex; align-items: center;">
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12" style="margin-left: 50px; margin-top:15px;">
      <button type="submit" class="button-primary" style=" padding: 15px 145px; background-color:#fac031; border:none;box-shadow: none !important; border-radius:10px;color:white;font-size:17px;">Rechercher  <i class="fa-solid fa-magnifying-glass"></i></button>
    </div>
  </div>
</form>

                </div>
            </div>
            

            <div class="main_image">
                <img src="{{url('image/cote.webp')}}">
            </div>
            

        </div>
       

    </section>



   


    <!--Menu-->

        @yield('reservationtable')
    <!--Order-->

    


  


    <!--Footer-->

    <footer>
        <div class="footer_main">

            <div class="footer_tag">
                <h2>Location</h2>
                <p>Sri Lanka</p>
                <p>USA</p>
                <p>India</p>
                <p>Japan</p>
                <p>Italy</p>
            </div>

            <div class="footer_tag">
                <h2>Quick Link</h2>
                <p>Home</p>
                <p>About</p>
                <p>Menu</p>
                <p>Gallary</p>
                <p>Order</p>
            </div>

            <div class="footer_tag">
                <h2>Contact</h2>
                <p>+94 12 3456 789</p>
                <p>+94 25 5568456</p>
                <p>johndeo123@gmail.com</p>
                <p>foodshop123@gmail.com</p>
            </div>

            <div class="footer_tag">
                <h2>Our Service</h2>
                <p>Fast Delivery</p>
                <p>Easy Payments</p>
                <p>24 x 7 Service</p>
            </div>

            <div class="footer_tag">
                <h2>Follows</h2>
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>

        </div>

        <p class="end">Design by<span><i class="fa-solid fa-face-grin"></i> WT Master Code</span></p>

    </footer>



    
</body>
</html>