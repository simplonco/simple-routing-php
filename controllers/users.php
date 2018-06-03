<?php
  include $appRoot.'/database/connection.php';

  $sql = 'select * from users';
  $query = $db->prepare($sql);
  $query->execute();
  $users = $query->fetchAll();
?>