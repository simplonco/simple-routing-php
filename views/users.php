<?php include $appRoot.'/controllers/users.php' ?>

<h3>Les utilisateurs sont :</h3>

<div>
  <?php 
    foreach ($users as $user) {
      echo "- ".$user['name']."<br />";
    }
  ?>
</div>
