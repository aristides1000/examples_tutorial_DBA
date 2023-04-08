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
      $sql = "CREATE TABLE tcount_tbl( ".
        "curso_author VARCHAR(40) NOT NULL, ".
        "curso_count INT);";
      if ($mysqli->query($sql)) {
        printf("Table tcount_tbl created successfully.<br />");
      }
      if ($mysqli->errno) {
        printf("Could not create table: %s<br />", $mysqli->error);
      }
      $mysqli->close();
    ?>
  </body>
</html>