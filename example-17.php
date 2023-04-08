<html>
  <head>
    <title>Selecting Records</title>
  </head>
  <body>
    <?php
      $dbhost = 'localhost';
      $dbuser = 'root';
      $dbpass = '';
      $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

      if (! $conn) {
        die('Could not connect: ' . mysqli_error($conn));
      }
      echo "Connected successfully<br />";

      mysqli_select_db( $conn, 'DBAEXAMPLE' );
      $sql = "SELECT curso_author, curso_count FROM tcount_tbl";
      $retval = mysqli_query( $conn, $sql );
      if (! $retval ) {
        die('Could not get data: ' . mysqli_error($conn));
      }

      while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        echo "Author: {$row['curso_author']} <br />".
          "curso_count: {$row['curso_count']} <br />".
          "-------------------------------<br />";
      }
      echo "Fetched data successfully<br />";
      mysqli_close($conn);
    ?>
  </body>
</html>