<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="style2.css?v=<?php echo time(); ?>">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Interface</title>
</head>

<body>
  <div class="header">
    <h1>Web Interface Features Panel</h1>
    <a class="return" href="javascript:history.back()">Return</a>
  </div>
  <h3>Displaying Club Info & Member List</h3>

  <?php

  include "config.php";

  #if name is not empty
  if (!empty($_POST['fclub_id'])) {
    $club_id = $_POST['fclub_id'];

    $sql_statement = "SELECT C.club_id as Club_ID, C.name as Club_Name, Count(M.Student_id) as Member_Count FROM club C, member_of M WHERE C.club_id = $club_id AND M.club_id = C.club_id ";

    echo "<div class='sql-table'><table>";
    echo "<tr><th>Club Info</th></tr>";

    $result = mysqli_query($db, $sql_statement);

    if ($result) {
    } else {
      echo "<br>Selection failed.<br>" . mysqli_error($db) . "<br><br>";
      return;
    }

    $counter = 0;
    while ($row = mysqli_fetch_assoc($result)) {
      if ($counter == 0) {
        echo "<tr>";
        foreach ($row as $key => $value) {
          echo "<th>" . $key . "</th>";
        }
        echo "</tr>";
        $counter++;
      }

      echo "<tr>";
      foreach ($row as $key => $value) {
        if (is_null($value)) {
          echo "<td>" . "NULL" . "</td>";
        } else {
          echo "<td>" . $value . "</td>";
        }
      }
      echo "</tr>";
    }

    echo "</table></div>";
    echo "<br>";

    $sql_statement = "SELECT P.name as Name, P.surname as Surname, S.student_id as ID, P.email as Email FROM person P, student S, member_of MEM, club C WHERE P.id = S.student_id AND S.student_id = MEM.student_id AND MEM.club_id = C.club_id AND C.club_id = $club_id";

    echo "<div class='sql-table'><table>";
    echo "<tr><th>Members</th></tr>";

    $result = mysqli_query($db, $sql_statement);

    if ($result) {
    } else {
      echo "<br>Selection failed.<br>" . mysqli_error($db) . "<br><br>";
      return;
    }

    $counter = 0;
    while ($row = mysqli_fetch_assoc($result)) {
      if ($counter == 0) {
        echo "<tr>";
        foreach ($row as $key => $value) {
          echo "<th>" . $key . "</th>";
        }
        echo "</tr>";
        $counter++;
      }

      echo "<tr>";
      foreach ($row as $key => $value) {
        if (is_null($value)) {
          echo "<td>" . "NULL" . "</td>";
        } else {
          echo "<td>" . $value . "</td>";
        }
      }
      echo "</tr>";
    }

    echo "</table></div>";
  } else {
    echo "In this vast universe of unlimited possibilities, it did not occur to me that you could find an error for this page... Good job!";
  }
  ?>

</body>

</html>