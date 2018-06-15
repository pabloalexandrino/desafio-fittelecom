<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Pablo Alexandrino">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="description" content="">
  <meta name="keywords" content="">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  
  <link rel="stylesheet" href="view/assets/stylesheets/estilo.css">

  <title>FitTelecom</title>
</head>

<body>
  
  <nav class="navbar bg-danger justify-content-between">
    <a class="navbar-brand"><img src="https://fittelecom.com.br/internet-fibra-otica/assets/img/logo.png" alt="FitTelecom" title="FitTelecom" /></a>
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar Plano" aria-label="Pesquisar Plano">
    </form>
  </nav>
  
  
  <?php 
    $u = isset($_GET['path']) ? $_GET['path'] : 'home';
    $u = explode('/',$u)[0];
    if(file_exists('view/'.$u.'.php'))
      include 'view/'.$u.'.php';
    else
      include 'view/home.php'; // ou 404
  ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous">
  </script>
  <script src="view/assets/javascript/main.js"></script>
  
</body>
</html>
