<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>secteur</title>
</head>

<body>
    
    @include('accueil')

    <div class="container">
        <h2 class="text-center mb-4">Ajouter un Secteur</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border border-dark border-3">
                    <div class="card-body">
                        <form action="{{ route('enregistrer.secteur') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nomsecteur" class="form-label">Nom:</label>
                                <input type="text" name="nomsecteur" class="form-control" id="nomsecteur">
                            </div>
                            <div class="mb-3">
                                <label for="superficie" class="form-label">Superficie:</label>
                                <input type="number" name="superficie" class="form-control" id="superficie">
                            </div>
                          
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <a href="{{ route('secteur.liste') }}" class="btn btn-success">Liste secteur
            <i class="fas fa-plus"></i></a>
    </div>
    
    
    


   
</body>

</html>
