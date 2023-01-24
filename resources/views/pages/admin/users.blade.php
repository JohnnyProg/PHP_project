@extends('home')

@section('content')

<h1 class='font-weight-light'>Przegląd użytkowników</h1>
</br> Wyświetlono {{$users->count()}} użytkowników</br></br>
<table class='table' id='datatablesSimple'>
<thead><tr><th>Imie</th><th>Email</th><th>Admin</th><th>Ulica</th><th>Dom</th><th>Mieszkanie</th><th>Data utworzenia</th><th>Szczegóły</th><th>Usuń</th></tr></thead><tbody>

@foreach ($users as $user)
<tr><th>{{$user->name}}</th><th>{{$user->email}}</th><th>{{$user->admin}}</th><th>{{$user->street}}</th><th>{{$user->apartament}}</th><th>{{$user->suite}}</th><th>{{$user->created_at}}</th><th><a href="../admin/users/{{$user->id}}" class="list-group-item list-group-item-action list-group-item-light p-2"  id="galllery">Pokaż szczegóły</a></th><th><a href="../admin/users/delete/{{$user->id}}" class="list-group-item list-group-item-action list-group-item-light p-2"  id="galllery">Usuń użytkownika</a></th></tr>


@endforeach
@endsection