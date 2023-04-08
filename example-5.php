<html>
  <head>
    <title>Creating MySQL Table</title>
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
        printf("Connect failed: %s<br />", $mysqli->connect_error);
        exit();
      }
      printf('Connected successfully.<br />');
      $sql = "CREATE TABLE cursos_tbl( ".
        "curso_id INT NOT NULL AUTO_INCREMENT, ".
        "curso_title VARCHAR(100) NOT NULL, ".
        "curso_author VARCHAR(40) NOT NULL, ".
        "submission_date DATE, ".
        "PRIMARY KEY ( curso_id ));";
      if ($mysqli->query($sql)) {
        printf("Table cursos_tbl created successfully.<br />");
      }
      if ($mysqli->errno) {
        printf("Could not create table: %s<br />", $mysqli->error);
      }
      $mysqli->close();
    ?>
  </body>
</html>