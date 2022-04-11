<?php
session_start();
if(!isset($_SESSION["admin"]))
  die("You must login to admin to access the page");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Submitted Questions</title>
  </head>
  <body>
    <div class = "container">

    <?php
    //create header
    require_once 'pageFormatSession.php';

    $pageTitle = "QUESTIONS";
    $img = "./images/admin.jpg";
    pageHeaderSession($pageTitle,$img);

    require_once 'connection.php';
    $conn = connect_db();

    //get questions from database and display
    $query = "SELECT * FROM questions";
    $result = $conn->query($query);
    if(!$result) die("Fatal error on query");
 
    $rows = $result->num_rows;

    echo <<<_END

    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">ContactID</th>
          <th scope="col">Question</th>
          <th scope="col">Status</th>
        </tr>
      </thead>

    _END;

    echo"<tbody>";

    for($i=0; $i<$rows; $i++)
    {
      $row = $result->fetch_array(MYSQLI_ASSOC);
      $cid = $row["contactID"];
      $q = $row["question"];
      $s = $row["status"];
      $all = "$cid*$q";
      echo"<tr><td>$cid</td><td>$q</td><td>$s</td>";
      echo"<td><form action=\"./questionAdminForm.php\" method = \"POST\"><button type=\"submit\" class=\"btn btn-primary\" id=\"mBtn\" name=\"mBtn\" value=\"$all\">Modify Question</button></form></td>";
      echo"</tr>";
    }

    $conn->close();

    echo "</tbody></table>";

    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </div> 
  </body>
</html>