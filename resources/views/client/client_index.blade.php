@extends('client/client')

@section('content')
<div class="centersec">
    <div class="centercon w-container">
        <h1 class="centerh1">évaluez le coût de votre charpente</h1>
        <p class="p">Effectuez une simulation de devis pour votre charpente et recevez une <span class="p-u">réponse sous 48h</span>.</p>
        <ul class="ul w-list-unstyled">
            <li class="li">5 minutes suffisent</li>
            <li class="li">Utilsation intuittive</li>
            <li class="li">Estimation immédiate</li>
        </ul><a href="{{ route('step1') }}" class="cta1 w-button">COMMENCER</a>
    </div>
</div>
@endsection
