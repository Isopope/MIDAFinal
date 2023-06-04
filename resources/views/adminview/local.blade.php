@extends('adminlayout.adminlayout')
@section('content')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Ajouter des photos des locaux de votre restaurant</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Acceuil</a></li>
        <li class="breadcrumb-item">Local</li>
      </ol>
    </div>

    <div class="row">
      <div class="col-lg-12 mb-4">
        <!-- Simple Tables -->
        <div class="card-body">
            <form method="POST" action="/localUpload" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="local_photo" name="local_photo">
                  <label class="custom-file-label" for="local_photo" name="local_photo">Choisissez une photo du local</label>
                </div>
              </div>
              <div class="form-group">
                <label for="select2Single">Choisissez le restaurant</label>
                <select class="select2-single form-control" name="restaurant_id" id="restaurant_id">
                  <option value="">Choisir</option>
                  @foreach ($restaurants as $restaurant )
                  <option value="{{$restaurant->resto_id}}">{{$restaurant->resto_name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                
              </div>
              <button type="submit" class="btn btn-primary">Enregistrer la photo</button>
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