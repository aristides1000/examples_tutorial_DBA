<html>
  <head>
    <title>Updating MySQL Table</title>
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
      printf('Connected successfully<br />');

      if ($mysqli->query('UPDATE cursos_tbl set curso_title = "Learning Java" where curso_id = 3')) {
        printf("Table cursos_tbl updated successfully.<br />");
      }
      if ($mysqli->errno) {
        printf("Could not update table: %s <br />", $mysqli->error);
      }

      $sql = "SELECT curso_id, curso_title, curso_author, submission_date FROM cursos_tbl";

      $result = $mysqli->query($sql);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          printf("Id: %s, Title: %s, Author: %s, Date: %d <br />",
            $row["curso_id"],
            $row["curso_title"],
            $row["curso_author"],
            $row["submission_date"]);
        }
      } else {
        printf('No record found.<br />');
      }
      mysqli_free_result($result);
      $mysqli->close();
    ?>
  </body>
</html>