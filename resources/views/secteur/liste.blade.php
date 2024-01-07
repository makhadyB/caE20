<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Secteur</title>
</head>
<body>
    @include('accueil')
    <h2 class="text-center">Les secteurs</h2>

    <div  class="container" >
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom:</th>
                    <th>Superficie:</th>
                    <th>Action:</th>

                </tr>
            </thead>

            <tbody>
                @foreach ($secteur as $s)
                    <tr>
                        <td>{{ $s->code }}</td>
                        <td>{{ $s->nomsecteur }}</td>
                        <td>{{ $s->superficie }}km²</td>
                        <td>
                            <a href="{{ route('edit.secteur', $s->code) }}" class="btn btn-warning">Modifier</a>
                            <a href="{{ route('supprimer.secteur', $s->code) }}" class="btn btn-danger"
                                onclick="return confirm('voulez vous vraiment supprimer');">Supprimer</a>
                                <a href="{{ route('secteur.detail', $s->code) }}">Voir les détails</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('secteur.index') }}" class="btn btn-success">Ajouter un secteur
            <i class="fas fa-plus"></i></a>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    
</body>
</html>