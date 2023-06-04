<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-CNN9LT5GNB"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-CNN9LT5GNB');
  </script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{url('img/logo/logo.png')}}" rel="icon">
  <title>Rest-place</title>
  <link href="{{url('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{url('css/ruang-admin.min.css')}}" rel="stylesheet">
  <link href="{{url('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
</head>

<body id="page-top">

            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Visualisez toutes vos reservations ici</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>Heure de demande de reservation</th>
                        <th>Restaurant</th>
                        <th>Description de reservation</th>
                        <th>Status</th>
                        <th>Retirer la demande</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reservation )
                        <tr>
                            <td>{{$reservation->reservation_date}}</td>
                            <td>{{$reservation->reservation_resto_name}}</td>
                            <td>{{$reservation->reservation_comment}}</td>
                            <td>{{$reservation->reservation_state}}</td>
                            <td><a href="{{route('reservations.deleteReservation',['id'=>$reservation->id_reservation])}}" class="btn btn-sm btn-danger">Supprimer</a></td>
                            
                           
                          </tr>
                            
                        @endforeach
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!--Row-->



  <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{url('js/ruang-admin.min.js')}}"></script>
  <!-- Page level plugins -->
  <script src="{{url('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{url('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>

</body>

</html>