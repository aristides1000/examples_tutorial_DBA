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
      $sql = "SELECT curso_id, curso_title, curso_author, submission_date FROM cursos_tbl";
      $retval = mysqli_query( $conn, $sql );
      if (! $retval ) {
        die('Could not get data: ' . mysqli_error($conn));
      }

      while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        echo "Curso ID :{$row['curso_id']} <br />".
          "Title: {$row['curso_title']} <br />".
          "Author: {$row['curso_author']} <br />".
          "Submission Date: {$row['submission_date']} <br />".
          "-------------------------------<br />";
      }
      echo "Fetched data successfully<br />";
      mysqli_close($conn);
    ?>
  </body>
</html>