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
  <h3>Displaying Instructor Information & Course List</h3>

  <?php

  include "config.php";

  #if name is not empty
  if (!empty($_POST['finstructor_id'])) {
    $instructor_id = $_POST['finstructor_id'];

    $sql_statement = "SELECT P.name as Name, P.surname as Surname, I.instructor_id as Instructor_ID, P.email as email, I.faculty_office_location as Office, Count(O.course_id) as Courses_Offered FROM person P, instructor I, offers O WHERE P.id = I.instructor_id AND O.instructor_id = I.instructor_id AND I.instructor_id = $instructor_id ";

    echo "<div class='sql-table'><table>";
    echo "<tr><th>Instructor Information</th></tr>";

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
    
    $sql_statement = "SELECT C.course_id as Course_ID, C.code as Course_Code, C.name as Course_Name, F.name as Faculty FROM course C, offers O, instructor I, faculty F  WHERE O.faculty_id = F.faculty_id AND C.course_id = O.course_id AND O.instructor_id = I.instructor_id AND I.instructor_id = $instructor_id ";

    echo "<div class='sql-table'><table>";
    echo "<tr><th>Courses by Chosen Instructor</th></tr>";

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
    echo "You got an error, somehow";
  }
  ?>

</body>

</html>