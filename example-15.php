<html>
  <head>
    <title>Add New Rercord in MySQL Database</title>
  </head>
  <body>
    <!-- mysqli_query ( mysqli $link, string $query, int $resultmode = MYSQLI_STORE_RESULT ) : mixed -->
    <?php
      if(isset($_POST['add'])) {
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

        if (! $conn) {
          die('Could not connect: ' . mysqli_error($conn));
        }

        $curso_author = $_POST['curso_author'];
        $curso_count = $_POST['curso_count'];
        $sql = "INSERT INTO tcount_tbl ".
          "(curso_author, curso_count) "."VALUES ".
          "('$curso_author','$curso_count')";
        mysqli_select_db( $conn, 'DBAEXAMPLE' );
        $retval = mysqli_query( $conn, $sql );

        if (! $retval ) {
          die('Could not enter data: ' . mysqli_error($conn));
        }
        echo "Entered data successfully\n";
        mysqli_close($conn);
      } else {
    ?>
    <form method = "post" action = "<?php $_PHP_SELF ?>">
      <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
        <tr>
          <td width = "250">Curso Author</td>
          <td><input name = "curso_author" type="text" id = "curso_author"></td>
        </tr>
        <tr>
          <td width = "250">Curso Count</td>
          <td><input name = "curso_count" type="text" id = "curso_count"></td>
        </tr>
        <tr>
          <td width = "250"> </td>
          <td></td>
        </tr>
        <tr>
          <td width = "250"> </td>
          <td><input name = "add" type="submit" id = "add" value = "Add Author"></td>
        </tr>
      </table>
    </form>
    <?php
      }
    ?>
  </body>
</html>