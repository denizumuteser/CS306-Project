<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Interface</title>
</head>

<body>
    <div class="header">
        <h1>Web Interface Administration Panel</h1>
        <a class="return" href="javascript:history.back()">Return</a>
    </div>

    <br>

    <?php

    include "config.php";

    #if name is not empty
    if (!empty($_POST['fselectfrom'])) {
        $select_what = empty($_POST['fselectwhat']) ? "SELECT *" : "SELECT " . $_POST["fselectwhat"];
        $select_from = " FROM " . $_POST['fselectfrom'];
        $select_where = empty($_POST["fselectwhere"]) ? "" : " WHERE " . $_POST["fselectwhere"];
        $select_groupby = empty($_POST['fselectgroupby']) ? "" : " GROUP BY " . $_POST["fselectgroupby"];
        $select_having = empty($_POST['fselecthaving']) ? "" : " HAVING " . $_POST["fselecthaving"];

        $sql_statement = $select_what . $select_from . $select_where . $select_groupby . $select_having;

        echo "SQL statement: " . $sql_statement . "<br><br>";

        $result = mysqli_query($db, $sql_statement);

        $type = $_POST['fselectfrom'];
        $sql_statement_2 = "SHOW COLUMNS FROM $type";
        $result = mysqli_query($db, $sql_statement_2);

        echo "<div align='center'><table><tr>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<th>" . $row['Field'] . "</th>";
        }
        echo "</tr>";

        $result = mysqli_query($db, $sql_statement);

        if ($result) {
        } else {
            echo "<br>Selection failed.<br>" . mysqli_error($db) . "<br><br>";
            return;
        }

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            foreach ($row as $key => $value) {
                if (is_null($value)) {
                    echo "<th>" . "NULL" . "</th>";
                } else {
                    echo "<th>" . $value . "</th>";
                }
            }
            echo "</tr>";
        }

        echo "</table></div>";
    } else {
        echo "ERROR: No relation selected.<br>Please choose a relation first before trying to insert or view the selected relation.";
    }
    ?>

</body>

</html>