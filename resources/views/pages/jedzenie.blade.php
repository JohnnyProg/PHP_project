<!-- Page content-->
@extends('home')

@section('content')
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
            <div class="card h-100">
                <img alt="Babeczki" class="card-img-top" src="{{URL::asset('photos/foods/babeczka.jpg')}}">
                <div class="card-body">
                    <h2 class="card-title">Babeczki 3zł</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
            <div class="card h-100">
                <img alt="Croissant" class="card-img-top" src="{{URL::asset('photos/foods/crosant.jpg')}}">
                <div class="card-body">
                    <h2 class="card-title">Croissant 2.20zł</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
            <div class="card h-100">
                <img alt="Ciasteczka" class="card-img-top" src="{{URL::asset('photos/foods/ciastka.jpg')}}">
                <div class="card-body">
                    <h2 class="card-title">Ciasteczka 4.80zł</h2>
                </div>
            </div>
        </div>
    
    
        <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
            <div class="card h-100">
                <img alt="Pączki" class="card-img-top" src="{{URL::asset('photos/foods/pączki.jpg')}}">
                <div class="card-body">
                    <h2 class="card-title">Pączki 4.20zł</h2>
                </div>
            </div>
        </div>
    
        <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
            <div class="card h-100">
                <img alt="Dalgona" class="card-img-top" src="{{URL::asset('photos/foods/dalgona.jpg')}}">
                <div class="card-body">
                    <h2 class="card-title">Dalgona 7.20zł</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
            <div class="card h-100">
                <img alt="Krem brule" class="card-img-top" src="{{URL::asset('photos/foods/krembrule.jpg')}}">
                <div class="card-body">
                    <h2 class="card-title">Krem brule 9.50zł</h2>
                </div>
            </div>
        </div>
    
        <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
            <div class="card h-100">
                <img alt="Mocha" class="card-img-top" src="{{URL::asset('photos/foods/tiramisu.jpg')}}">
                <div class="card-body">
                    <h2 class="card-title">Tiramisu 5.50zł</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
            <div class="card h-100">
                <img alt="Romano" class="card-img-top" src="{{URL::asset('photos/foods/lody.jpg')}}">
                <div class="card-body">
                    <h2 class="card-title">Lody 5.20zł</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection