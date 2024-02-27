<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title><?php echo @$titre?></title>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="index.view.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="articles.view.php">Articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="marques.view.php">Marques</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pays.view.php">Pays</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="continents.view.php">Continents</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>