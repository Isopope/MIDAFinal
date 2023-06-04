@extends('adminlayout.adminlayout')
@section('content')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Formulaire de creation de restaurant</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Acceui</a></li>
        <li class="breadcrumb-item">Restaurant</li>
      </ol>
    </div>

    <div class="row">
      <div class="col-lg-12 mb-4">
        <!-- Simple Tables -->
        <div class="card-body">
            <form method="POST" action="/restaurantUpload" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label for="resto_name">Nom du restaurant</label>
                    <input type="text" class="form-control" id="resto_name" name="resto_name" aria-describedby="emailHelp"
                      placeholder="Entrez le nom de votre restaurant">
                  </div>
              <div class="form-group">
                <label for="resto_email">Adresse Mail</label>
                <input type="email" class="form-control" id="resto_email" name="resto_email" aria-describedby="emailHelp"
                  placeholder="Entrez l'email de votre restaurant">
              </div>
              <div class="form-group">
                <label for="resto_phone">Contact du restaurant</label>
                <input type="text" class="form-control" id="resto_phone" name="resto_phone" aria-describedby="emailHelp"
                  placeholder="Entrez le nom de votre restaurant">
              </div>
              <div class="form-group">
                <label for="adresse">Adresse du restaurant</label>
                <input type="text" class="form-control" id="adresse" name="adresse" aria-describedby="emailHelp"
                  placeholder="Situez la localisation de votre restaurant">
              </div>
              
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="resto_affiche" name="resto_affiche">
                  <label class="custom-file-label" for="resto_affiche" name="resto_affiche">Photo d'affiche de votre restaurant</label>
                </div>
              </div>
              <div class="form-group">
                <label for="resto_price">Prix moyen</label>
                <input type="text" class="form-control" id="resto_price" aria-describedby="emailHelp"
                  placeholder="Entrez le prix moyen des repas" name="resto_price">
              </div>
              <div class="form-group">
                <label for="resto_desc">Description</label>
                <textarea class="form-control" id="resto_desc" rows="3" name="resto_desc"></textarea>
              </div>
              
              <div class="form-group">
                
              </div>
              <button type="submit" class="btn btn-primary">Enregistrer votre restaurant</button>
            </form>
          </div>
      </div>
    </div>
    <!--Row-->

    <!-- Modal Logout -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to logout?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
            <a href="login.html" class="btn btn-primary">Logout</a>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection