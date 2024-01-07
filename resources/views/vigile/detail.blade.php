


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Détails du vigile</title>
</head>
<body>
    @include('accueil')
  

    @if($vigile)
        <h2>Nom: {{ $vigile->nom }}</h2><br>
        <h2>Prénom: {{ $vigile->prenom }}</h2><br>
        <h2>Naissance: {{ $vigile->naissance }}</h2><br>
        <h2>Sexe: {{ $vigile->sexe }}</h2><br>
        <h2>Taille: {{ $vigile->taille }}cm</h2><br>
        <h2>Poids: {{ $vigile->poids }}kg</h2><br>
        
    @else
        <p>Aucun vigile trouvé</p>
    @endif

    
</body>
</html>
