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

  <br>

  <?php

  include "config.php";

  #if name is not empty
  if (!empty($_POST['fstudent_id'])) {
    $student_id = $_POST['fstudent_id'];

    $sql_statement = "SELECT P.name as Name, P.surname as Surname, P.birth_date as BirthDate, S.student_id as ID, S.enroll_year as EnrollYear, S.level as Level, PR.name as ProgramName, S.CGPA as CGPA FROM person P, student S, enrolls_in E, program PR WHERE P.id = S.student_id AND E.student_id = S.student_id AND E.program_id = PR.program_id AND S.student_id = $student_id";

    echo "<div class='sql-table'><table>";
    echo "<tr><th>Student Details</th></tr>";

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

    $sql_statement = "SELECT C.code as CourseCode, C.name as CourseName, C.credits as CourseCredits, T.term as TermTaken, T.letter_grade as LetterGrade FROM person P, student S, takes T, course C WHERE P.id = S.student_id AND S.student_id = T.student_id AND T.course_id = C.course_id AND S.student_id = $student_id ORDER BY T.term ASC";

    echo "<div class='sql-table'><table>";
    echo "<tr><th>Course History</th></tr>";

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