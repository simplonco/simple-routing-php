<?php

include $appRoot.'/database/connection.php';

$sql = "insert into users(name,mail,password,description,age) values(?,?,?,?,?)";

$query = $db->prepare($sql);

$query->execute(array( 
  $_POST['name'], 
  $_POST['email'], 
  $_POST['password'], 
  $_POST['description'],
  $_POST['age']
));

?>