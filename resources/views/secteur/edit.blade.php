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
    <h1 class="text-center text-success">modification du secteur {{ $secteur->code }}</h1>

    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="container">
           
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card border border-dark border-3">
                        <div class="card-body">
                            <form action="{{ route('update.secteur', $secteur) }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="nomsecteur" class="form-label">Nom:</label>
                                    <input type="text" name="nomsecteur" class="form-control" value="{{ $secteur->nomsecteur }}">
                                </div>
                                <div class="mb-3">
                                    <label for="superficie" class="form-label">Superficie:</label>
                                    <input type="text" name="superficie" class="form-control" value="{{ $secteur->superficie }}">
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
        
        
    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
