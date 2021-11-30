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
        $id = $_POST['fstudent_id'];
        $cgpa = $_POST['fstudent_cgpa'];
        //$enroll_year = $_POST['fstudent_enroll_year'];
        $scholarship = $_POST['fstudent_scholarship'];
        $level = $_POST['fstudent_level'];
        $advisor_id = $_POST['fstudent_advisor_id'];

        $sql_statement = "INSERT INTO student(student_id,cgpa,scholarship,level,advisor_id) VALUES ($id,$cgpa,$scholarship,'$level',$advisor_id)";
    }

    elseif ($type == "course")
    {
        $id = $_POST['fcourse_id'];
        $code = $_POST['fcourse_code'];
        $credits = $_POST['fcourse_credits'];

        $sql_statement = "INSERT INTO course(course_id, code, credits) VALUES ($id,'$code',$credits)";
    }

    elseif ($type == "club")
    {
        $id = $_POST['fclub_id'];
        $membercount = $_POST['fclub_member_count'];
        $email = $_POST['fclub_email'];
        $name = $_POST['fclub_name'];

        $sql_statement = "INSERT INTO club(club_id, member_count, email, name) VALUES ($id,$membercount,'$email','$name')";
    }

    elseif ($type=="faculty")
    {
        $id = $_POST['ffaculty_id'];
        $name = $_POST['ffaculty_name'];
        $roomcount = $_POST['ffaculty_room_count'];

        $sql_statement = "INSERT INTO faculty(faculty_id,name,room_count) VALUES ($id,'$name',$roomcount)";
    }

    elseif ($type=="program")
    {
        $id = $_POST['fprogram_id'];
        $name = $_POST['fprogram_name'];

        $sql_statement = "INSERT INTO program(program_id,name) VALUES ($id,'$name')";
    }

    elseif ($type=="timeslot")
    {
        $id = $_POST['ftimeslot_id'];
        $day = $_POST['ftimeslot_day'];
        $begin_time = $_POST['ftimeslot_begin_time'];
        $end_time = $_POST['ftimeslot_end_time'];
        // koray was here but could not figure out how to implement day and time variables below here :)
        $sql_statement = "INSERT INTO program(timeslot_id,day,begin_time,end_time) VALUES ($id,'$day')";
    }
    //INSERT CONDITIONS HERE

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