<html>
  <head>
    <title>Using joins on MySQL Tables</title>
  </head>
  <body>
    <!-- $mysqli->query($sql,$resultmode) -->
    <?php
      $dbhost = 'localhost';
      $dbuser = 'root';
      $dbpass = '';
      $dbname = 'DBAEXAMPLE';
      $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

      if ($mysqli->connect_errno) {
        printf("Connect failed %s<br />", $mysqli->connect_error);
        exit();
      }
      printf('Connected successfully.<br />');

      $sql = 'SELECT a.curso_id, a.curso_author, b.curso_count
        FROM cursos_tbl a, tcount_tbl b
        WHERE a.curso_author = b.curso_author';

      $result = $mysqli->query($sql);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          printf("Id: %s, Author: %s, Count: %d <br />",
            $row["curso_id"],
            $row["curso_author"],
            $row["curso_count"]);
        }
      } else {
        printf('No record found.<br />');
      }
      mysqli_free_result($result);
      $mysqli->close();
    ?>
  </body>
</html>