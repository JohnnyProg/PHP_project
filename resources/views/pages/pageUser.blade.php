@extends('home')

@section('content')


<div class="container-fluid">
<div class="row align-items-center my-5">
        <h1 id="headerh1">Twój profil</h1>
        <!-- wybór kawy-->
        <div class="input-group mb-3">
            <span class="input-group-text">Imie: </span>
            
            <span  class="form-control" >{{$user->name}}</span>
        </div>
        <!--Adres-->

        <br>
        <h5>adres dostawy: </h5>
        
        <!-- <div class="input-group mb-3">
            <span class="input-group-text">Numer telefonu: </span>
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="000-000-000"
                    required>
            <div class="invalid-feedback">Podany telefon jest niepoprawny!</div>
        </div> -->

        <div class="input-group mb-3">
            <span class="input-group-text">Email: </span>
            <span  class="form-control" >{{$user->email}}</span>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Ulica: </span>
            
            <span  class="form-control" >{{$user->street}}</span>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Numer domu: </span>
            <span  class="form-control" >{{$user->apartament}}</span>
            
            
            <span class="input-group-text">Numer mieszkania: </span>
            <span  class="form-control" >{{$user->suite}}</span>

        </div>



        <br>
        <br>
        <br>
        <br>
        <div class="text-center">
            </div>
        
    
    </div>
</div>

@endsection