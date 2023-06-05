@extends('adminlayout.adminlayout')
@section('content')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Modifier un repas</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Acceuil</a></li>
        <li class="breadcrumb-item">Repas</li>
        <li class="breadcrumb-item">Modifier un repas</li>
      </ol>
    </div>

    <div class="row">
      <div class="col-lg-12 mb-4">
        <!-- Simple Tables -->
        <div class="card-body">
            <form method="POST" action="{{route('foodupdate',['id'=>$data->id])}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="food_name">Nom du repas</label>
                    <input type="text" class="form-control" id="food_name" name="food_name" aria-describedby="emailHelp"
                      placeholder="Entrez le nom du repas" value="{{$data->food_name}}">
                </div>
              <div class="form-group">
                <label for="food_price">Prix du repas</label>
                <input type="text" class="form-control" id="food_price" name="food_price" aria-describedby="emailHelp"
                  placeholder="Entrez le prix du repas" value="{{$data->food_price}}">
              </div>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="food_picture" name="food_picture">
                  <label class="custom-file-label" for="food_picture" name="food_picture" value="{{$data->food_picture}}">Choisissez une photo du repas</label>
                </div>
              </div>
              <div class="form-group">
                <label for="resto_desc">Entrez une description</label>
                <textarea class="form-control" id="food_desc" rows="3" name="food_desc">{{$data->food_desc}}</textarea>
              </div>
              
              <div class="form-group">
                
              </div>
              <button type="submit" class="btn btn-primary">Modifier le repas</button>
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