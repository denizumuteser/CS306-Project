<?php

include "config.php";

if(!empty($_POST['ftype']))
{
    $type = $_POST['ftype'];

    $idVarName;
    $id = $_POST['fdid'];

    if ($type == "person")          $idVarName = "id";
    else if ($type == "student")    $idVarName = "student_id";
    else if ($type == "course")     $idVarName = "course_id";
    else if ($type == "club")       $idVarName = "club_id";
    else if ($type == "faculty")    $idVarName = "faculty_id";
    else if ($type == "program")    $idVarName = "program_id";
    else if ($type == "timeslot")   $idVarName = "timeslot_id";


    $sql_statement = "DELETE FROM $type WHERE $idVarName = $id";

    echo "SQL statement: " . $sql_statement . "\n";
    
    $result = mysqli_query($db, $sql_statement);

    if($result == 1) {
        echo "Deletion successful";
    }
    else
    {
        echo "Deletion failed";
    }
}

?>