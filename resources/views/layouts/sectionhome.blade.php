<section id="Home">

        @include('layouts.navbarconected')

    

     <div class="main">

        <div class="men_text">
             <h1>Découvrez et reserver le meilleur restaurant</h1>
             <div class="searchform">
                <form method="GET" action="{{url('search')}}" role="search">
                     
                    <div class="row">
                    <div class="col-sm-6 col-md-4">
                    <input type="search"  name="search" value="{{Request::get('search')}}" placeholder="Rechercher un restaurant" required style="margin-left: 50px; padding: 17px 90px;font-size:17px;background: #fff;overflow: hidden;box-shadow: none !important;; border: 1px rgba(141, 136, 136, 0.247) solid;border-radius: 10px; display: flex; align-items: center;">
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