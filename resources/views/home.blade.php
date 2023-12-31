<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <ul class="list-group">
            @foreach ($cards as $card)
                <li class="list-group-item">
                    <div class="card d-flex flex-row">
                        <img class="card-img-top"src={{ $card['immagine'] }} style="width: 18rem" alt="">
                        <div class="card-body">
                            <h5 class="card-title">
                                Titolo: {{ $card['titolo'] }}
                            </h5>
                            <p class="card-text">Genere: {{ $card['Genere'] }}</p>
                            <p> {{$card['description']}}</p>
                             <a href="/{{$card['titolo']}}"><button class="btn btn-success"> Più dettagli</button></a>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>

</html>
