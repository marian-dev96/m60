@extends('client/client')

@section('content')
    <div class="centersec">
        <div class="centercon w-container">
            <h1 class="centerh1">étape 1 - VOS PHOTOS</h1>
            <p class="p">Afin de mieux évaluer votre projet, merci de télécharger 3 photos de votre maison.</p>
            <ul class="ul w-list-unstyled">
                <li class="li">Vue du sol</li>
                <li class="li">Vue de la charpente</li>
                <li class="li">Autre vue ou photo du plan</li>
            </ul>
        </div>
    </div>
    <div class="centersec">
        <div class="centercon w-container">
            <h1 class="centerh2">téléchargez vos photos</h1>
            <p class="p">Afin de mieux évaluer votre projet, merci de télécharger 3 photos de votre maison.</p>
            <div class="photorow w-row">
                <div class="photocol w-col w-col-4">
                    <h3 class="centerh3">Photo 1</h3><img src="{{ asset('design/images/simon-maage-416427.jpg') }}" class="photophoto"><a href="#" class="cta3 w-button">SUPPRIMER</a></div>
                <div class="photocol w-col w-col-4">
                    <h3 class="centerh3">Photo 2</h3><img src="{{ asset('design/images/photo-default.jpg') }}" class="photophoto"><a href="#" class="cta2 w-button">PRENDRE UNE PHOTO</a></div>
                <div class="photocol w-col w-col-4">
                    <h3 class="centerh3">Photo 3</h3><img src="{{ asset('design/images/photo-default.jpg') }}" class="photophoto"><a href="#" class="cta2 w-button">PRENDRE UNE PHOTO</a></div>
            </div>
        </div>
    </div>
    <div class="centersec">
        <div class="centercon w-container">
            <p class="p">Parfait !<br>Passez maintenant à l&#x27;étape suivante.</p><a href="{{ route('step2',['id'=>$id]) }}" class="cta1 w-button">passer à l&#x27;étape 2</a></div>
    </div>

    @endsection
