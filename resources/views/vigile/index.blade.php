<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>vigile</title>
  </head>
  <body>
    @include('accueil')

    <div class="container">
      <h2 class="text-center mb-4">Enregistrer un Vigile</h2>
      <div class="row justify-content-center">
          <div class="col-md-6">
              <div class="card border border-dark border-3">
                  <div class="card-body">
                      <form action="{{ route('enregistrer.vigile') }}" method="POST">
                          @csrf
                          <div class="mb-3">
                              <label for="nom" class="form-label">Nom:</label>
                              <input type="text" name="nom" class="form-control">
                          </div>
                          <div class="mb-3">
                              <label for="prenom" class="form-label">Prénom:</label>
                              <input type="text" name="prenom" class="form-control">
                          </div>
                          <div class="mb-3">
                              <label for="naissance" class="form-label">Date de naissance:</label>
                              <input type="date" name="naissance" class="form-control">
                          </div>
                          <div class="mb-3">
                              <label class="form-label">Sexe:</label>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="sexe" id="sexeFeminin" value="feminin">
                                  <label class="form-check-label" for="sexeFeminin">Féminin</label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="sexe" id="sexeMasculin" value="masculin" checked>
                                  <label class="form-check-label" for="sexeMasculin">Masculin</label>
                              </div>
                          </div>
                          <div class="mb-3">
                              <label for="taille" class="form-label">Taille:</label>
                              <input type="number" name="taille" class="form-control">
                          </div>
                          <div class="mb-3">
                              <label for="poids" class="form-label">Poids:</label>
                              <input type="number" name="poids" class="form-control">
                          </div>
                          <div class="mb-3">
                              <label for="secteur_id" class="form-label">Sélectionnez le secteur:</label>
                              <select name="secteur_id" class="form-control">
                                  @foreach($secteur as $s)
                                      <option value="{{ $s->code }}">{{ $s->nomsecteur }}</option>
                                  @endforeach
                              </select>
                          </div>
                          <button class="btn btn-primary">Enregistrer</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <a href="{{ route('vigile.liste') }}" class="btn btn-success">liste  vigile
        <i class="fas fa-plus"></i></a>
  </div>
  
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
