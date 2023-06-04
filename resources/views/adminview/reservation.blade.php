@extends('adminlayout.adminlayout')
@section('content')

<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Table des réservations</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Acceuil</a></li>
        <li class="breadcrumb-item">Demandes de reservation</li>
      </ol>
    </div>

    <div class="row">
      <div class="col-lg-12 mb-4">
        <!-- Simple Tables -->
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Table des réservations</h6>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th>Id de reservation</th>
                  <th>Nom du client</th>
                  <th>Email du client</th>
                  <th>Nom du restaurant</th>
                  <th>Heure de reservation</th>
                  <th>Commentaire de reservation</th>
                  <th>Status</th>
                  <th>Accepter</th>
                  <th>Refuser</th>
                  
                </tr>
              </thead>
              <tbody>
              @foreach ($reservations as $reservation )
              <tr>
                <td><a href="#">{{$reservation->id_reservation}}</a></td>
                <td>{{$reservation->username}}</td>
                <td>{{$reservation->useremail}}</td>
                <td>{{$reservation->reservation_resto_name}}</td>
                <td>{{$reservation->reservation_date}}</td>
                <td>{{$reservation->reservation_comment}}</td>
                @if ($reservation->reservation_state==='EN ATTENTE')
                <td><span class="badge badge-warning" >{{$reservation->reservation_state}}</span></td>
                @elseif ($reservation->reservation_state==='ACCEPTER')
                <td><span class="badge badge-success">{{$reservation->reservation_state}}</span></td>

                @else
                <td><span class="badge badge-danger">{{$reservation->reservation_state}}</span></td>
                  
                @endif
                
                <td><a href="{{route('reservation.updateState',['id'=>$reservation->id_reservation])}}" class="btn btn-sm btn-primary">Accepter</a></td>
                <td><a href="{{route('reservation.updateStateR',['id'=>$reservation->id_reservation])}}" class="btn btn-sm btn-primary" style="background-color: #fc544b;">Refuser</a></td>
              </tr>
              @endforeach
              </tbody>
            </table>
          </div>
          <div class="card-footer"></div>
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