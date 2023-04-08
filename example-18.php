<html>
  <head>
    <title>Handling NULL</title>
  </head>
  <body>
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

      if ( isset($curso_count )) {
        $sql = 'SELECT curso_author, curso_count
          FROM tcount_tbl
          WHERE curso_count = ' + $curso_count;
      } else {
        $sql = 'SELECT curso_author, curso_count
          FROM tcount_tbl
          WHERE curso_count IS NULL';
      }

      $result = $mysqli->query($sql);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          printf("Id: %s, Author: %s, Count: %d <br />",
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