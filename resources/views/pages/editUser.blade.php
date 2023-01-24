@extends('home')

@section('content')


<div class="container-fluid">
<div class="row align-items-center my-5">
        <h1 id="headerh1">Edytuj swoje dane</h1>
        <form class="needs-validation"  method="POST" action="{{route('updateUser')}}">
            @csrf
            <!-- wybór kawy-->
            <div class="input-group mb-3">
              <span class="input-group-text">Imie: </span>
                @guest
                <input type="text" class="form-control" id="name" name="name" placeholder="abcde@fgh.xx">
                @else
                <input type="text" class="form-control" id="name" name="name" placeholder="abcde@fgh.xx" value="{{\Auth::user()->name}}">
                @endguest

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
                @guest
                <input type="text" class="form-control" id="mail" name="mail" placeholder="abcde@fgh.xx">
                @else
                <input type="text" class="form-control" id="mail" name="mail" placeholder="abcde@fgh.xx" value="{{\Auth::user()->email}}">
                @endguest

              <div class="invalid-feedback">Podany mail jest niepoprawny!</div>
          </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Ulica: </span>
                
                @guest
                <input id="street" type="text" name="street" class="form-control">
                @else
                <input id="street" type="text" name="street" class="form-control" value="{{\Auth::user()->street}}">
                @endguest
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Numer domu: </span>
                @guest
                <input type="number"  class="form-control" id="dom" name="dom" >
                @else
                <input type="number"  class="form-control" id="dom" name="dom" value="{{\Auth::user()->apartament}}">
                @endguest
                
                
                <span class="input-group-text">Numer mieszkania: </span>
                
                @guest
                <input type="number" class="form-control" id="mieszkanie" name="mieszkanie">
                @else
                <input type="number" class="form-control" id="mieszkanie" name="mieszkanie" value="{{\Auth::user()->suite}}">
                @endguest

            </div>



            <br>
            <br>
            <br>
            <br>
            <div class="text-center">
                <button class="btn btn-outline-secondary col-6" type="submit" id="zmien" >zmień</button>
              </div>
            
        </form>
    </div>
</div>

@endsection