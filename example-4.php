<html>
  <head>
    <title>Selecting MySQL Database</title>
  </head>
  <body>
    <!-- mysqli_select_db ( mysqli $link , string $dbname ) : bool  -->
    <?php
      $dbhost = 'localhost';
      $dbuser = 'root';
      $dbpass = '';
      $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

      if(! $conn ) {
        die ('Could not connect: ' . mysqli_error($conn));
      }
      echo 'Connect successfully<br />';

      $retval = mysqli_select_db( $conn, 'DBAEXAMPLE' );

      if (! $retval ) {
        die('Could not select database: ' . mysqli_error($conn));
      }
      echo "Database DBAEXAMPLE selected successfully\n";
      $mysqli->close($conn);
    ?>
  </body>
</html>