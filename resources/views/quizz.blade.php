@extends('body')

@section('titre')
    <title>Quizz</title>
@endsection

@section('CSS')
    <link rel="stylesheet" href="{{ asset('css/quizz.css') }}">
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <p>Merci de cocher une réponse pour chaque question</p>
        </div>
    @endif
    <form action="reponse" method="POST">
        @csrf
        <?php $i = 1; ?>
        @foreach ($quizz as $question)
            <?php
            $array = [];
            $array['reponse1'] = $question->reponse1;
            $array['reponse2'] = $question->reponse2;
            $array['reponse3'] = $question->reponse3;
            $array['reponse4'] = $question->reponse4;

            $shuffleKeys = array_keys($array);
            shuffle($shuffleKeys);
            $newArray = [];
            foreach ($shuffleKeys as $key) {
                $newArray[$key] = $array[$key];
            }
            $j = 1;
            ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $question->question }}</h5>
                    <br>
                    <input type="hidden" value="{{ $question->id }}" name="id_question_{{ $i }}">
                    @foreach ($newArray as $reponse)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="reponse_{{ $i }}"
                                id="flexRadioDefault1" value="{{ $reponse }}">
                            <label class="form-check-label" for="flexRadioDefault1">
                                {{ $reponse }}
                            </label>
                        </div>
                        <?php $j++; ?>
                    @endforeach
                </div>
            </div>
            <?php $i++; ?>
        @endforeach

        <button type="submit" class="btn btn-primary">Envoyer mes réponses</button>
    </form>
@endsection
