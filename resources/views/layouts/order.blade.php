<div class="order" id="Order">
    <h1><span>Reservez maintenant</span></h1>

    <div class="order_main">

        <div class="order_image">
            <img src="{{url('image/order_image.png')}}">
        </div>

        <form method="POST" action="{{route('makeReservation',['id'=>$restaurant->id])}}">
            @csrf
            <div class="input">
                <p>Date de reservation</p>
                <input type="date" id="reservation_date" name="reservation_date" required>
            </div>

            <div class="input">
                <p>Commentaire de réservation</p>
                <input type="text" id="reservation_comment" name="reservation_comment" required>
            </div>
            <button type="submit" class="btn btn-warning">Reservez maintenant</button>

        </form>

    </div>

</div>