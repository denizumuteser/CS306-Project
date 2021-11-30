<?php

include "config.php";

#if name is not empty
if (!empty($_POST['ftype']))
{
    $type = $_POST['ftype'];

    if ($type == "person")
    {
        $name = $_POST['fname'];
        $surname = $_POST['fsurname'];
        $id = $_POST['fid'];
        $username = $_POST['fusername'];
        $password = $_POST['fpassword'];
    
        $sql_statement = "INSERT INTO person(id, username, password, name, surname) VALUES ($id,'$username','$password','$name','$surname')";
    }

    elseif ($type == "student")
    {

    }

    elseif ($type == "course")
    {
        $id = $_POST['fcourse_id'];
        $code = $_POST['fcourse_code'];
        $credits = $_POST['fcourse_credits'];

        $sql_statement = "INSERT INTO course(course_id, code, credits) VALUES ($id,'$code',$credits)";
    }




    
    echo "SQL statement: " . $sql_statement;
    $result = mysqli_query($db, $sql_statement);
    if($result == 1) {
        echo "Statement inserted successfully";
    }
    else
    {
        echo "insertion failed";
    }
    
}
?>