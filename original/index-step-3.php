<html>
  <head>
    
  </head>
  <body>
    <h1>
      Ceci est ma page de test php
    </h1>
    <?php
      try {
        $user = 'root';
        $password = 'root';

        $db = new PDO('mysql:host=localhost;dbname=products', $user, $password);

        $sql= 'select * from books';
        $query = $db->query($sql);
        $books = $query->fetchAll();

        $books = array(
          array(
            'title'=> 'Les fleurs du mal',
            'price'=> 15,
            'prime'=> array (
              'mind'=> 'blown'
            )
          ),
          array(
            'title'=> 'Harry Potter',
            'price'=> 10,
            'prime'=> false
          )
        );

        "UPDATE books SET `title`='Madame Bovary' WHERE `id`='1'"
        "INSERT INTO books (`title`, `price`, `prime`) VALUES ('Madmae Bovary', '20', '0')"
        "DELETE books WHERE id='2'"

        echo $books[0]['prime']['mind'];

        // foreach ( $books as $book ) {
        //   if ($book['price']>= 15)  {
        //     echo $book['price'];
        //   }
        // }

      } catch (PDOException $e) {
        echo $e->getMessage();
      }
    ?>
  </body>
</html>