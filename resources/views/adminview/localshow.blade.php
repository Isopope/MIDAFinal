@extends('adminlayout.adminlayout')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($local as $item )
            <div class="col-md-4">
                <div class="card mb-4">
                  <div class="custom-img-container" style="width: 100%;height: 200px; overflow: hidden;">
                    <img src="{{url('local_photo/'.$item->local_photo)}}" class="card-img-top custom-card-img" style="width: 100%;height: 100%;object-fit: cover;" alt="Image 1">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">{{$item->resto_name}}</h5>
                      <form  action="{{route('localdelete',['id'=>$item->id])}}" id="deleteForm" method="GET">
                        @csrf
                            <button type="button" class="btn btn-danger" onclick="confirmDelete()">Supprimer</button>
                      </form>
                      
                  </div>
                </div>
              </div>
            @endforeach
        </div>
    </div>

@endsection