@extends('home')

@section('content')

<h1 class='font-weight-light'>Historia zamówień</h1>
</br> Dokonałeś {{$orders->count()}} zamówień</br></br>
<table class='table' id='datatablesSimple'><thead><tr><th>Kawa</th><th>Cukier</th><th>jedzenie</th><th>ulica</th><th>dom</th><th>mieszkanie</th><th>uwagi</th><th>status</th><th>użytkownik</th></tr></thead><tbody>
@foreach($orders as $order)
    <tr><th>{{$order->coffe}}</th><th>{{$order->sugar}}</th><th>{{$order->food}}</th><th>{{$order->street}}</th><th>{{$order->apartament}}</th><th>{{$order->suite}}</th><th>{{$order->comments}}</th><th>{{$order->status}}</th><th><a href="../admin/users/{{$order->user_id}}" class="list-group-item list-group-item-action list-group-item-light p-2"  id="galllery">{{$order->user_id}}</a></th></tr>
@endforeach
@endsection