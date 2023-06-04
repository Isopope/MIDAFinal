<nav>
    <div class="logo">
        <img src="{{url('image/logo.png')}}">
    </div>
    @if(Route::has('login'))
        @auth
        <ul>
            <li><a href="{{route('RedirigerVers')}}">Acceuil</a></li>
            <li><a href="#About">A propos de nous</a></li>
            <li><a href="/reservations">Vos reservations</a></li>
            <li><a href="#"> Bienvenue {{ Auth::User()->name }}</a></li>
            
        </ul>
        <div class="logo">
            <li style="list-style: none">Bienvenue {{ Auth::User()->name }}</li>
            <form method="POST" action="{{route('logout')}}">
                @csrf
                
                <input type="submit" class="btn" value="Se deconnecter" style="background: rgb(160, 21, 21); color:white ; width:150px; padding:12px 25px;" />
            </form>
        </div>

        @else
        <ul>
            <li><a href="/">Acceuil</a></li>
            <li><a href="#About">A propos de nous</a></li>
            <li><a href="{{ route('login') }}">Se connecter</a></li>
            <li><a href="{{ route('register') }}">Inscription</a></li>
        </ul>
        @endauth
    
    
    @endif
    
    

</nav>