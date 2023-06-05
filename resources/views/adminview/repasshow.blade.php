@extends('adminlayout.adminlayout')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($food as $item )
                <div class="col-md-4">
                    <div class="card mb-4">
                    <div class="custom-img-container" style="width: 100%;height: 200px; overflow: hidden;">
                        <img src="{{url('food_picture/'.$item->food_picture)}}" class="card-img-top custom-card-img" style="width: 100%;height: 100%;object-fit: cover;" alt="Image 1">
                    </div>
                    <div class="card-body">
                        <h6 class="card-title" style="font-style:oblique;">{{$item->resto_name}}</h6>
                        <h5 class="card-title">Nourriture:{{$item->food_name}}  Prix:{{$item->food_price}}</h5>
                        <p class="card-text">{{$item->food_desc}}</p>
                        <div class="d-flex justify-content-between">
                            <form action="{{route('foodupdateview',['id'=>$item->id])}}" method="GET" enctype="multipart/form-data>
                                @csrf
                                <button type="submit" class="btn btn-warning">Modifier</button>
                            </form>
                        
                        <form  action="{{route('fooddelete',['id'=>$item->id])}}" id="deleteForm" method="GET">
                                @csrf
                                <button type="button" class="btn btn-danger" onclick="confirmDelete()">Supprimer</button>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection