<html>
  <head>
    <title>Dropping MySQL Table</title>
  </head>
  <body>
    <!-- $mysqli->query($sql,$resultmode) -->
    <!-- cursos_tbl -->
    <?php
      $dbhost = 'localhost';
      $dbuser = 'root';
      $dbpass = '';
      $dbname = 'DBAEXAMPLE';
      $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

      if ($mysqli->connect_errno) {
        printf("Connect failed: %s<br />", $mysqli->connect_error);
        exit();
      }
      printf('Connected successfully.<br />');

      if ($mysqli->query("Drop Table cursos_tbl")) {
        printf("Table cursos_tbl dropped successfully.<br />");
      }
      if ($mysqli->errno) {
        printf("Could not drop table: %s<br />", $mysqli->error);
      }
      $mysqli->close();
    ?>
  </body>
</html>