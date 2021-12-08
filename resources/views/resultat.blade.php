@extends('body')

@section('titre')
    <title>Création question</title>
@endsection

@section('CSS')
    <link rel="stylesheet" href="{{ asset('css/resultat.css') }}">
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Vos résultats</h5>
            @if ($score <= 3)
            <img src="{{asset('storage/img/nelson.gif')}}" alt="" srcset="" class="gif">
            <p> vous avez eu {{$score}}/10</p>
            <p>Votre score est l'un des meilleurs jamais vu (T_T), n'hésitez pas à réessayer pour vous améliorer</p>
            @endif

            @if ($score > 3 && $score < 5)
            <img src="{{asset('storage/img/ahah.webp')}}" alt="" srcset="" class="gif">
            <p> vous avez eu {{$score}}/10</p>
            <p>Vous avez presque la moyenne un dernier effort et ce sera bon ! COURAGE!!!!</p>
            @endif

            @if ($score >= 5 && $score < 8)
            <img src="{{asset('storage/img/press.webp')}}" alt="" srcset="" class="gif">
            <p> vous avez eu {{$score}}/10</p>
            <p>Vous avez la moyenne l'honneur est sauf</p>
            @endif

            @if ($score >= 8 && $score <= 9)
            <img src="{{asset('storage/img/muscle.webp')}}" alt="" srcset="" class="gif">
            <p> vous avez eu {{$score}}/10</p>
            <p>Un score presque parfait, allez un dernier petit effort et c'est bon !</p>
            @endif

            @if ($score == 10)
            <img src="{{asset('storage/img/burns.gif')}}" alt="" srcset="" class="gif">
            <p> vous avez eu {{$score}}/10</p>
            <p>Un score parfait, félicitations à toi et profites de ton GIF</p>
            @endif
        </div>
    </div>
@endsection
