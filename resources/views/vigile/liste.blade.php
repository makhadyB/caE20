<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Gestion vigile</title>
</head>
<body>
    @include('accueil')

    <div class="container">
        <h2>Liste des Vigiles</h2>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de Naissance</th>
                    <th>Sexe</th>
                    <th>Taille</th>
                    <th>Poids</th>
                    <th>Secteur</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vigile as $v)
                    <tr>
                        <td>{{ $v->id }}</td>
                        <td>{{ $v->nom }}</td>
                        <td>{{ $v->prenom }}</td>
                        <td>{{ $v->naissance }}</td>
                        <td>{{ $v->sexe }}</td>
                        <td>{{ $v->taille }}cm</td>
                        <td>{{ $v->poids }}kg</td>
                        <td>{{ $v->secteur_id }}</td>
                        <td>
                            <a href="{{ route('edit.vigile', $v->id) }}" class="btn btn-warning">Modifier</a>
                            <a href="{{ route('supprimer.vigile', $v->id) }}" class="btn btn-danger"
                                onclick="return confirm('Voulez-vous vraiment supprimer ?');">Supprimer</a>
                                <a href="{{ route('vigile.detail', $v->id) }}">Voir les détails</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
       
            <a href="{{ route('vigile.index') }}" class="btn btn-success">Ajouter un vigile
                <i class="fas fa-plus"></i></a>
        
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