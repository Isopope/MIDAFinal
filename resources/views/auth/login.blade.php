<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{url('style1.css')}}" />
    <title>Authentification</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="POST" action="{{route('login')}}" class="sign-in-form">
            @csrf
            <h2 class="title">Se connecter</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="email" type="email" name="email" :value="old('email')" required autofocus placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password" name="password" type="password" required autocomplete="current-password" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Suivez nous, sur nos différents réseaux sociaux</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form method="POST" action="{{ route('register') }}" class="sign-up-form">
            @csrf
            <h2 class="title">Créer un compte</h2>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="name" type="text" name="name" :value="old('name')" required autofocus placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input  id="email" type="email" name="email" :value="old('email')" required placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password" type="password" name="password"  required autocomplete="new-password" placeholder="Password" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="password_confirmation" id="password_confirmation" type="password" placeholder="Confirm password" required />
            </div>
            
            <div class="input-field" style="background: none;">
              <input type="radio" id="admin" name="radio-group" value="admin">
              <label for="option1">Etes-vous propriétaire de restaurant?</label>
            
              <input type="radio" id="client" name="radio-group" value="client">
              <label for="option2">Etes-vous un client?</label>
            </div>
            
            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">Suivez nous, sur nos différents réseaux sociaux</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Vous etes nouveau ici?</h3>
            <p>
              Créer un compte et donner à votre restaurant la visibilité qu'elle mérite.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Créer un compte
            </button>
          </div>
          <img src="{{url('image/Food-Plate.png')}}" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Déja un des notres ?</h3>
            <p>
              Cliquez sur le bouttons en dessous pour vous connecter.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Se connecter
            </button>
          </div>
          <img src="{{url('image/bell-pepper-1297918_640.png')}}" class="image" alt="" />
        </div>
      </div>
    </div>

    <script>
                const sign_in_btn = document.querySelector("#sign-in-btn");
          const sign_up_btn = document.querySelector("#sign-up-btn");
          const container = document.querySelector(".container");

          sign_up_btn.addEventListener("click", () => {
            container.classList.add("sign-up-mode");
          });

          sign_in_btn.addEventListener("click", () => {
            container.classList.remove("sign-up-mode");
          });
    </script>
  </body>
</html>
