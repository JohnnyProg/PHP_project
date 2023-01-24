@extends('home')

@section('content')
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
            <div class="card h-100">
                <img alt="Czarna klasyczna" class="card-img-top" src="{{URL::asset('photos/coffes/czarna.jpg')}}">
                <div class="card-body">
                    <h2 class="card-title">Czarna klasyczna 5.50zł</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
            <div class="card h-100">
                <img alt="Espresso" class="card-img-top" src="{{URL::asset('photos/coffes/espresso.jpg')}}">
                <div class="card-body">
                    <h2 class="card-title">Espresso  4zł</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
            <div class="card h-100">
                <img alt="Cappucino" class="card-img-top" src="{{URL::asset('photos/coffes/cappucino.jpg')}}">
                <div class="card-body">
                    <h2 class="card-title">Cappucino 7.80zł</h2>
                </div>
            </div>
        </div>
    
    
        <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
            <div class="card h-100">
                <img alt="Americano" class="card-img-top" src="{{URL::asset('photos/coffes/americano.jpg')}}">
                <div class="card-body">
                    <h2 class="card-title">Americano 7.80zł</h2>
                </div>
            </div>
        </div>
    
        <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
            <div class="card h-100">
                <img alt="Frappo" class="card-img-top" src="{{URL::asset('photos/coffes/frappo.jpg')}}">
                <div class="card-body">
                    <h2 class="card-title">Frappo 10.50zł</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
            <div class="card h-100">
                <img alt="Macchiato" class="card-img-top" src="{{URL::asset('photos/coffes/macchiato.jpg')}}">
                <div class="card-body">
                    <h2 class="card-title">Macchiato 7.80zł</h2>
                </div>
            </div>
        </div>
    
        <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
            <div class="card h-100">
                <img alt="Mocha" class="card-img-top" src="{{URL::asset('photos/coffes/mocha.jpg')}}">
                <div class="card-body">
                    <h2 class="card-title">Mocha 5.40zł</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
            <div class="card h-100">
                <img alt="Romano" class="card-img-top" src="{{URL::asset('photos/coffes/romano.jpg')}}">
                <div class="card-body">
                    <h2 class="card-title">Romano 4.50z</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
            <div class="card h-100">
                <img alt="Kawa wiedeńska" class="card-img-top" src="{{URL::asset('photos/coffes/wiedenska.jpg')}}">
                <div class="card-body">
                    <h2 class="card-title">Kawa wiedeńska 9.30zł</h2>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection