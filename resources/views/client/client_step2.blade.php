@extends('client/client')

@section('content')
    <div class="centersec">
        <div class="centercon w-container">
            <h1 class="centerh1">étape 2 - forme de votre toiture</h1>
            <p class="p">Afin de simplifier notre outils, nous nous sommes concentré sur 3 types de toitures<br>parmis les plus répandues sur le marché.</p>
            <ul class="ul w-list-unstyled">
                <li class="li">Toiture rectangulaire</li>
                <li class="li">Toiture en L</li>
                <li class="li">Toiture en U</li>
            </ul>
        </div>
    </div>
    <div class="centersec">
        <div class="centercon w-container">
            <h1 class="centerh2">choisissez une forme de toiture</h1>
            <div class="photorow w-row">
                <div class="photocol w-col w-col-4">
                    <h3 class="centerh3">CARRé</h3><img src="{{ asset('design/images/forme-carre.png') }}" class="photophoto"><a href="#" class="cta4 w-button">Choisir</a></div>
                <div class="photocol w-col w-col-4">
                    <h3 class="centerh3">EN &quot;L&quot;</h3><img src="{{ asset('design/images/forme-l.png') }}" class="photophoto off"><a href="#" class="cta4 off w-button">CHOISIR</a></div>
                <div class="photocol w-col w-col-4">
                    <h3 class="centerh3">EN &#x27;U&#x27;</h3><img src="{{ asset('design/images/forme-u.png') }}" class="photophoto off"><a href="#" class="cta4 off w-button">CHOISIR</a></div>
            </div>
        </div>
    </div>
    <div class="centersec">
        <div class="centercon w-container">
            <p class="p">Excellent !<br>A vos mètres maintenant 😊🔨</p><a href="step3a.html" class="cta1 w-button">passer à l&#x27;étape 3</a>
        </div>
    </div>
@endsection
