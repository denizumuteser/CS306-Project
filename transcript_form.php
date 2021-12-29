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
    <a class="return" href="./index.php">Return</a>
  </div>

  <div class="content">
    <h2>Display Transcript</h2>

    <Form id="features-form" action="transcript.php" method="post">
      <fieldset id="fieldsetInputs">

        <label for="fstudent_id">Student ID:</label>
        <select name="fstudent_id" , id="fstudent_id">
          <?php
          include "config.php";

          $sql_statement = "SELECT student_id FROM student ORDER BY student_id ASC";

          $myresult = mysqli_query($db, $sql_statement);

          if ($myresult == 1) {
          } else {
            echo mysqli_error($db);
          }

          while ($id_rows = mysqli_fetch_assoc($myresult)) {
            $id = $id_rows['student_id'];
            echo "<option value=$id>" . $id . "</option>";
          }
          ?>
        </select>
        <button type="submit" , name="action" , value="display">Display</button>
      </fieldset>
    </Form>
  </div>

</body>

</html>