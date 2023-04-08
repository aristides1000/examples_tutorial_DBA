<html>
  <head>
    <title>Creating MySQL Database</title>
  </head>
  <body>
    <!-- $mysqli->query($sql, $resultmode) -->
    <?php
      $dbhost = 'localhost';
      $dbuser = 'root';
      $dbpass = '';
      $mysqli = new mysqli($dbhost, $dbuser, $dbpass);

      if($mysqli->connect_errno) {
        printf("Connect failed: %s<br />", $mysqli->connect_error);
        exit();
      }
      printf('Connect successfully.<br />');

      if ($mysqli->query("CREATE DATABASE TUTORIALS")) {
        printf("Database TUTORIALS created successfully.<br />");
      }
      if ($mysqli->errno) {
        printf("Could not create database: %s<br />", $mysqli->error);
      }

      $mysqli->close();
    ?>
  </body>
</html>