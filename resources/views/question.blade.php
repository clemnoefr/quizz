@extends('body')

@section('titre')
    <title>Création question</title>
@endsection

@section('CSS')
    <link rel="stylesheet" href="{{ asset('css/question.css') }}">
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            @if(isset($success))
            <div class="alert alert-success">
                <p>Votre question a bien été enregistrée</p>
            </div>
            @endif
            <h5 class="card-title">Création d'une question</h5>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <p>Merci de remplir tous les champs</p>
                </div>
            @endif
            <form action="create" method="post">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Choisissez la catégorie</label>
                    <select class="form-select" aria-label="Default select example" name="categorie">
                        <option value="film">Films</option>
                        <option value="jeux videos">Jeux Videos</option>
                      </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Question :</label>
                    <textarea name="question" id="" cols="60" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Bonne réponse :</label>
                    <input type="text" class="form-control" name="reponse1" aria-describedby="emailHelp" required>

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fausse réponse :</label>
                    <input type="text" class="form-control" name="reponse2" aria-describedby="emailHelp" required>

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fausse réponse :</label>
                    <input type="text" class="form-control" name="reponse3" aria-describedby="emailHelp" required>

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fausse réponse :</label>
                    <input type="text" class="form-control" name="reponse4" aria-describedby="emailHelp">

                </div>
                <button type="submit" class="btn btn-primary">Sauvegarder</button>
            </form>
        </div>
    </div>
@endsection
