<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>This is my awesome blog</title>
</head>
<body>
  <h1>Welcome to my blog !</h1>

  <?php
    // $_SERVER -> C'est une variable de base mise à disposition par PHP
    // Comme echo ou alors $SESSION, ou alors $PDO
    // C'est une peu comme en javascript la variable document
    // document me permet d'acceder à plein de methode et de propriete.
    // comme document.getElementById ou document.innerHTML
    // $_SERVER c'est la meme
    // Elle nous permet d'avoir acces informations relatives
    // à la requete http, au serveur, etc
    // REQUETE HTTP
    // la methode : 'GET', 'POST', 'UPDATE', 'DELETE'
    // Ca correspond au methode CRUD : "Create Read Update Delete"
    $method = $_SERVER['REQUEST_METHOD'];

    // Une requete HTTP a aussi une URL
    $path = $_SERVER['PATH_INFO'];
    // Ma variable $path = '/users/benjamin/'
    // Je vais utiliser le trim pour enlever les '/' en trop. En debut et fin de string

    $formatPath = trim($path, '/');
    // Ma variable $formatPath = 'users/benjamin'
    // Je veux pouvoir enlever aussi les '/' à l'interieur de la chaine de charactere.
    // Je vais pouvoir utiliser la methode explode
    // Elle me renvoie un tableau

    $arrayPath = explode('/', $formatPath);
    // $arrayPath = ['users', 'benjamin'];
    // Je peux recuperer 'users'
    // en cherchant $arrayPath[0]

    // Je peux utiliser une variable de mon URL pour include les fichiers correspondant a ceux chercher par mon utilisateur.
    $appRoot = __DIR__;
    $route = $appRoot.'/views/'.$arrayPath[0].'.php';

    if ( is_file($route) ) {
      include $route;
    }
    else {
      include $appRoot.'/views/404.php';
    }
   ?>
</body>
</html>