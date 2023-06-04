<div class="menu" id="Menu">
    <h1>Nos<span>restaurant</span></h1>

    <div class="menu_box">
        @foreach ($restaurants as $restaurant )
        <div class="menu_card">

            <div class="menu_image">
                <img src="{{url('resto_affiche/'.$restaurant->resto_affiche)}}">
            </div>

            <div class="small_card">
                <i class="fa-solid fa-heart"></i>
            </div>

            <div class="menu_info">
                <h2>{{$restaurant->resto_name}}</h2>
                <p>
                    {{$restaurant->resto_desc}}
                </p>
                <h3>Prix moyen {{$restaurant->resto_price}} FCFA</h3>
                <div class="menu_icon">
                    <p>{{$restaurant->adresse}}</p>
                </div>
                <a href="{{route('reservation.detailView',['id'=>$restaurant->id])}}" class="menu_btn">Reservez</a>
                
            </div>

        </div> 
        @endforeach    
    </div>
</div>
