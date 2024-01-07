<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Gestion vigile</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-dark text-white">
        <div class="container-fluid">
         
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{ route('accueil') }}">HOME</a>
                  </li>
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="{{ route('secteur.index') }}">ajout Secteur</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link text-white" href="{{ route('secteur.liste') }}">liste Secteur</a> 
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('vigile.index') }}">ajout vigile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('vigile.liste') }}">  liste vigile</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

</body>
</html>