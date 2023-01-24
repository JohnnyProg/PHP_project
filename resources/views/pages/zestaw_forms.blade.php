@extends('home')

@section('content')
<div class="container-fluid">
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row align-items-center my-5">
        <h1 id="headerh1">Złóż zamówienie</h1>
        <form class="needs-validation"  method="POST" action="{{route('store')}}">
            @csrf
            <!-- wybór kawy-->
            <div class="input-group mb-3">
                <span class="input-group-text ">Kawa</span>
                <select class="form-control" id="kawa" name="kawa" required>
                    <option value="">Wybierz kawę</option>
                    <option id="klas" value="klasyczna">Czarna klasyczna 5.50zł</option>
                    <option id="esp" value="espresso">Espresso 4zł</option>
                    <option id="cap" value="cappucion">Cappucion 7.80zł</option>
                    <option id="ame" value="americano">Americano 7.80zł</option>
                    <option id="fra" value="frappo">Frappo 10.50zł</option>
                    <option id="mac" value="macchiato">Macchiato 7.80zł</option>
                    <option id="moc" value="mocha">Mocha 5.40zł</option>
                    <option id="rom" value="romano">Romano 4.50zł</option>
                    <option id="wie" value="wiedeńska">Kawa wiedeńska 9.30zł</option>
                </select>
                <div class="invalid-feedback">
                    Proszę wybrać
                </div>
            </div>
            <!-- cukier-->
            <div class="input-group mb-3">
                <span class="input-group-text">Cukier: </span>
                

                <div class="input-group-text">
                    <input class="form-check-input mt-0" name="cukier" type="radio" value="Normalnie" required> Normalnie
                </div>
                
                <div class="input-group-text">
                    <input class="form-check-input mt-0" name="cukier" type="radio" value="Połowa"> Połowa
                </div>

                <div class="input-group-text">
                    <input class="form-check-input mt-0" name="cukier" type="radio" value="Bez"> Bez
                </div>

                <div class="invalid-feedback">
                    Proszę wybrać jedną opcję
                </div>

            </div>
            
            <!-- dodatkowe jedzenie-->
            <div class="input-group mb-3">
                <span class="input-group-text">Coś słodkiego: </span>
                <div class="input-group-text">
                    <input id="food_checker" class="form-check-input mt-0" name="foofChecker" type="checkbox">
                </div>
                <select class="form-control" id="foodChooser" name="food">
                    <option value="">Wybierz</option>
                    <option value="Babeczki">Babeczki 3.00zł</option>
                    <option value="Croissant">Croissant 2.20zł</option>
                    <option value="Ciasteczka">Ciasteczka 4.80zł</option>
                    <option value="Pączki">Pączki 4.20zł</option>
                    <option value="Dalgona">Dalgona 7.20zł</option>
                    <option value="Krem brule">Krem brule 9.50zł</option>
                    <option value="Tiramisu">Tiramisu 5.50zł</option>
                    <option value="Lody czekoladowe">Lody czekoladowe 5.20zł</option>
                </select>
                <div class="invalid-feedback">
                    Proszę wybrać opcję lub odznaczyć dodatek.
                </div>
            </div>
            <!--Adres-->

            <br>
            <h5>adres dostawy: </h5>
            
            <div class="input-group mb-3">
                <span class="input-group-text">Numer telefonu: </span>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="000-000-000"
                       required>
                <div class="invalid-feedback">Podany telefon jest niepoprawny!</div>
            </div>

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
                <input id="street" type="text" name="street" class="form-control" required>
                @else
                <input id="street" type="text" name="street" class="form-control" value="{{\Auth::user()->street}}"required>
                @endguest
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Numer domu: </span>
                @guest
                <input type="number"  class="form-control" id="dom" name="dom" required>
                @else
                <input type="number"  class="form-control" id="dom" name="dom" value="{{\Auth::user()->apartament}}" required>
                @endguest
                
                
                <span class="input-group-text">Numer mieszkania: </span>
                
                @guest
                <input type="number" class="form-control" id="mieszkanie" name="mieszkanie">
                @else
                <input type="number" class="form-control" id="mieszkanie" name="mieszkanie" value="{{\Auth::user()->suite}}">
                @endguest

            </div>
            <!--Reszta-->
            <div class="input-group">
                <span class="input-group-text">Dodatkowe uwagi <br> (opcjonalne, max. 250 znaków)</span>
                <textarea class="form-control" name="uwagi" id="uwagi" maxlength="2000" rows="3"></textarea>
            </div>


            <br>
            <br>
            <br>
            <br>
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary col-6" type="submit" id="zamow" onclick="validate()">zamów</button>
                <button class="btn btn-outline-secondary col-6" type="reset" id="reset">Reset</button>
              </div>
            
        </form>
    </div>
</div>
@endsection