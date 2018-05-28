<html>
  <head>
  </head>
  <body>
    <html>
  <head>
    
  </head>
  <body>
    <h1>
      Welcome to my e-commerce !
    </h1>
    <?php
      try {
        $user = 'root';
        $password = 'root';
        $dbname = 'ecommerce';
        $host = 'localhost';
        $port = 3306;

        $method = $_SERVER['REQUEST_METHOD'];
        $request = explode('/', trim($_SERVER['PATH_INFO'],'/'));


        $table = $request[0];

        echo $table;




        $db = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $password);
        $sql = 'select * from users';
        $stmt = $db->query($sql);
        $users = $stmt->fetchAll();



        foreach ($users as $user) {
          echo $user['name'];
        }
      } catch (PDOException $e){
        echo $e->getMessage();
      }
    ?>
  </body>
</html>
  </body>
</html>