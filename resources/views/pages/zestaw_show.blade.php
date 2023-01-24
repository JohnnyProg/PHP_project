@extends('home')

@section('content')

@if ($orders->count() === 0)
    <h1>Nie masz jeszcze żadnych zamówień, zachęcamy do skorzystania</h1>
@else
<h1 class='font-weight-light'>Historia zamówień</h1>
</br> Dokonałeś {{$orders->count()}} zamówień</br></br>
<table class='table' id='datatablesSimple'><thead><tr><th>Kawa</th><th>Cukier</th><th>jedzenie</th><th>ulica</th><th>dom</th><th>mieszkanie</th><th>uwagi</th><th>status</th></tr></thead><tbody>
@foreach($orders as $order)
    <tr><th>{{$order->coffe}}</th><th>{{$order->sugar}}</th><th>{{$order->food}}</th><th>{{$order->street}}</th><th>{{$order->apartament}}</th><th>{{$order->suite}}</th><th>{{$order->comments}}</th><th>{{$order->status}}</th></tr>
@endforeach
@endif
@endsection