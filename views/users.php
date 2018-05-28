<?php
  // include($appRoot.'/controllers/users.php');
?>

<div>
  Hi <?php echo $user['name']; ?>

  <form action="http://localhost:8888/controllers/users.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
  </form>
</div>