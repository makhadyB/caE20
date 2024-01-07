


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Détails du secteur</title>
</head>
<body>
    @include('accueil')
  
<div class=" justify-content-center ">
    @if($secteur)
        <h2>Nom: {{ $secteur->nomsecteur }} </h2> <br>
        <h2>Superficie: {{ $secteur->superficie }} km²</h2>
        
        
    @else
        <p>Aucun secteur trouvé</p>
    @endif

</div>
</body>
</html>
