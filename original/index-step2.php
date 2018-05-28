<html>
  <head>
  </head>
  <body>
    <?php
      try {
        $user = 'root';
        $password = 'root';
        $db = 'test';
        $host = 'localhost';
        $port = 3306;

        $db = new PDO('mysql:host=localhost;dbname=test', $user, $password);
        //$sql = "INSERT INTO books (`title`, `price`, `prime`,`id`) VALUES ('newentry', '20', '1','')";
        $sql = 'select * from books';
        $stmt = $db->query($sql);
        $books = $stmt->fetchAll();

        foreach ($books as $book) {
          echo $book['title'];
        }
      } catch (PDOException $e){
        echo $e->getMessage();
      }
    ?>
  </body>
</html>