<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body >
    <div class="container">
        <img src="{{$card['immagine']}}" alt="" style="max-width: 600px">
        <h4>{{$card['titolo']}}</h4>
        <h5>{{$card['Genere']}}</h5>
        <p>{{$card['description']}}</p>
        <a href="/"><button class="btn btn-light">Torna alla Home</button></a>
    </div>

</body>
</html>