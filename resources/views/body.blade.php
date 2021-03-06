<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href=" {{ asset('css/body.css') }}">
    @yield('CSS')
    @yield('titre')
    <style>
        body {
            background-image: url('/storage/img/background.jpg');
        }

    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mx-auto ">
                <li class="nav-item">
                    <img class="logo" src="{{ asset('storage/img/ausha.png') }}" alt="logo ausha">
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/">Accueil</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Quizz
                    </a>
                    <ul class="dropdown-menu color" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="quizz/?type=jeux videos">Jeux Videos</a></li>
                        <li><a class="dropdown-item" href="quizz/?type=film">Films</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="/question">Cr??er une question</a>

                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row justify-content-md-center text-center">
            <div class="col-md-4">
                @yield("content")
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    @yield('JS')
</body>
</html>
