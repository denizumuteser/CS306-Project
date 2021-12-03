<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Interface</title>
</head>

<body>
    <div class="header">
        <h1>Web Interface Administration Panel</h1>
        <a class="return" href="./insertion.php">Return</a>
    </div>

    <br>

    <?php

    include "config.php";

    # if the View Table button is pressed, just show the corresponding table
    if ($_POST['action'] == 'view_table') {
        if (!empty($_POST['ftype'])) {
            $type = $_POST['ftype'];
            $sql_statement = "SHOW COLUMNS FROM $type";
            $result = mysqli_query($db, $sql_statement);

            echo "<div align='center'><table><tr>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<th>" . $row['Field'] . "</th>";
            }
            echo "</tr>";

            $sql_statement = "SELECT * FROM $type";
            $result = mysqli_query($db, $sql_statement);

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

        return;
    }

    #if name is not empty
    if (!empty($_POST['ftype'])) {
        $type = $_POST['ftype'];

        if ($type == "person") {
            $id = empty($_POST['fid']) ? NULL : $_POST['fid'];
            $username = empty($_POST['fusername']) ? NULL : $_POST['fusername'];
            $password = empty($_POST['fpassword']) ? NULL : $_POST['fpassword'];
            $name = empty($_POST['fname']) ? NULL : $_POST['fname'];
            $surname = empty($_POST['fsurname']) ? NULL : $_POST['fsurname'];
            $gender = empty($_POST['fgender']) ? NULL : $_POST['fgender'];
            $birthdate = empty($_POST['fbirthdate']) ? NULL : $_POST['fbirthdate'];
            $address = empty($_POST['faddress']) ? NULL : $_POST['faddress'];
            $email = empty($_POST['femail']) ? NULL : $_POST['femail'];
            $phonenumber = empty($_POST['fphonenumber']) ? NULL : $_POST['fphonenumber'];

            $sql_statement = "INSERT INTO person(id, username, password, name, surname, gender, birth_date, address, email, phone_number) VALUES ($id,'$username','$password','$name','$surname', $gender, '$birthdate', '$address', '$email', '$phonenumber')";
        } elseif ($type == "student") {
            $id = $_POST['fstudent_id'];
            $cgpa = $_POST['fstudent_cgpa'];
            $enroll_year = $_POST['fstudent_enroll_year']; # TO DO: Check if you can try to force it into a YEAR datatype
            $scholarship = $_POST['fstudent_scholarship'];
            $level = $_POST['fstudent_level'];
            $advisor_id = $_POST['fstudent_advisor_id'];

            $sql_statement = "INSERT INTO student(student_id,cgpa,scholarship,level,advisor_id) VALUES ($id,$cgpa,$scholarship,'$level',$advisor_id)";
        } elseif ($type == "course") {
            $id = $_POST['fcourse_id'];
            $code = $_POST['fcourse_code'];
            $credits = $_POST['fcourse_credits'];

            $sql_statement = "INSERT INTO course(course_id, code, credits) VALUES ($id,'$code',$credits)";
        } elseif ($type == "club") {
            $id = $_POST['fclub_id'];
            $membercount = $_POST['fclub_member_count'];
            $email = $_POST['fclub_email'];
            $name = $_POST['fclub_name'];

            $sql_statement = "INSERT INTO club(club_id, member_count, email, name) VALUES ($id,$membercount,'$email','$name')";
        } elseif ($type == "faculty") {
            $id = $_POST['ffaculty_id'];
            $name = $_POST['ffaculty_name'];
            $roomcount = $_POST['ffaculty_room_count'];

            $sql_statement = "INSERT INTO faculty(faculty_id,name,room_count) VALUES ($id,'$name',$roomcount)";
        } elseif ($type == "program") {
            $id = $_POST['fprogram_id'];
            $name = $_POST['fprogram_name'];

            $sql_statement = "INSERT INTO program(program_id,name) VALUES ($id,'$name')";
        } elseif ($type == "timeslot") {
            $id = $_POST['ftimeslot_id'];
            $day = $_POST['ftimeslot_day'];
            $begin_time = $_POST['ftimeslot_begin_time'];
            $end_time = $_POST['ftimeslot_end_time'];
            // koray was here but could not figure out how to implement day and time variables below here :)
            $sql_statement = "INSERT INTO program(timeslot_id,day,begin_time,end_time) VALUES ($id,'$day')";
        }elseif ($type == "manages") {
            $student_id = $_POST['fmanages_student_id'];
            $club_id = $_POST['fmanages_club_id'];
            $role = $_POST['fmanages_role'];
            $sql_statement = "INSERT INTO manages(student_id,club_id,role) VALUES ($student_id,$club_id,'$role')";
        }
        elseif ($type == "member_of") {
            $student_id = $_POST['fmember_of_student_id'];
            $club_id = $_POST['fmember_of_club_id'];
            $sql_statement = "INSERT INTO member_of(student_id,club_id) VALUES ($student_id,$club_id)";
        }
        elseif ($type == "enrolls_in") {
            $student_id = $_POST['fenrolls_in_student_id'];
            $program_id = $_POST['fenrolls_in_program_id'];
            $sql_statement = "INSERT INTO enrolls_in(student_id,program_id) VALUES ($student_id,$program_id)";
        }
        elseif ($type == "counts_in") {
            $course_id = $_POST['fcounts_in_course_id'];
            $program_id = $_POST['fcounts_in_program_id'];
            $type= $_POST['fcounts_in_type'];
            $sql_statement = "INSERT INTO counts_in(course_id,program_id,type) VALUES ($course_id,$program_id,'$type')";
        }
        elseif ($type == "has_prerequisite") {
            $course_id = $_POST['fhas_prerequisite_course_id'];
            $prerequisite_id = $_POST['fhas_prerequisite_prerequisite_id'];
            $sql_statement = "INSERT INTO has_prerequisite(course_id,prerequisite_id) VALUES ($course_id,$prerequisite_id)";
        }
        //INSERT CONDITIONS HERE

        echo "SQL statement: " . $sql_statement;

        $result = mysqli_query($db, $sql_statement);

        if ($result == 1) {
            echo "<br>Insertion completed successfully";
        } else {
            echo "<br>" . mysqli_error($db);
        }
    } else {
        echo "ERROR: No relation selected.<br>Please choose a relation first before trying to insert or view the selected relation.";
    }

    ?>

</body>

</html>