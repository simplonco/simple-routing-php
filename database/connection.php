<?php

  $user = 'root';
  $password = 'root';
  $dbname = 'blog';
  $host = 'localhost';
  $port = 3306;

  try {
    $db = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $password);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  }
  catch (PDOException $e) {
    $error = $e->getCode().' '.$e->getMessage();
    include $appRoot.'/views/500.php';
  }
?>