<html>
  <head>
    <title>Getting MySQL Database Info</title>
  </head>
  <body>
    <?php
      $dbhost = 'localhost';
      $dbuser = 'root';
      $dbpass = '';
      $dbname = 'DBAEXAMPLE';
      $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
      $curso_count = null;

      if ($mysqli->connect_errno) {
        printf("Connect failed %s<br />", $mysqli->connect_error);
        exit();
      }
      printf('Connected successfully.<br />');

      if ($result = mysqli_query($mysqli, "SELECT DATABASE()")) {
        $row = mysqli_fetch_row($result);
        printf("Default database is %s<br />", $row[0]);
        mysqli_free_result($result);
      }

      $mysqli->close();
    ?>
  </body>
</html>