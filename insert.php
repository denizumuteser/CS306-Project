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

    # if the View Table button is pressed, just show the corresponding table
    if ($_POST['action'] == 'view_table') {
        if (!empty($_POST['ftype'])) {
            $type = $_POST['ftype'];

            echo "<div align='center'><table>";

            $sql_statement = "SELECT * FROM $type";
            $result = mysqli_query($db, $sql_statement);

            $counter = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                if ($counter == 0) {
                    echo "<tr>";
                    foreach ($row as $key => $value) {
                        echo "<th>" . $key . "</th>";
                    }
                    echo "</tr>";
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
                $counter++;
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
            $id = empty($_POST['fid']) ? "NULL" : $_POST['fid'];
            $username = empty($_POST['fusername']) ? "NULL" : "'" . $_POST['fusername'] . "'";
            $password = empty($_POST['fpassword']) ? "NULL" :  "'" . $_POST['fpassword'] . "'";
            $name = empty($_POST['fname']) ? "NULL" :  "'" . $_POST['fname'] .  "'";
            $surname = empty($_POST['fsurname']) ? "NULL" :  "'" . $_POST['fsurname'] .  "'";
            $gender = empty($_POST['fgender']) ? "NULL" : $_POST['fgender'];
            $birthdate = empty($_POST['fbirthdate']) ? "NULL" :  "'" . $_POST['fbirthdate'] . "'";
            $address = empty($_POST['faddress']) ? "NULL" : "'" . $_POST['faddress'] . "'";
            $email = empty($_POST['femail']) ? "NULL" : "'" . $_POST['femail'] . "'";
            $phonenumber = empty($_POST['fphonenumber']) ? "NULL" : "'" . $_POST['fphonenumber'] . "'";

            $sql_statement = "INSERT INTO person(id, username, password, name, surname, gender, birth_date, address, email, phone_number) VALUES ($id, $username, $password, $name, $surname, $gender, $birthdate, $address, $email, $phonenumber)";
        } elseif ($type == "student") {
            $id = empty($_POST['fstudent_id']) ? "NULL" : $_POST['fstudent_id'];
            $cgpa = empty($_POST['fstudent_cgpa']) ? "NULL" : $_POST['fstudent_cgpa'];
            $enroll_year = empty($_POST['fstudent_enroll_year']) ? "NULL" : "'" . $_POST['fstudent_enroll_year'] . "'";
            $scholarship = empty($_POST['fstudent_scholarship']) ? "NULL" : $_POST['fstudent_scholarship'];
            $level = empty($_POST['fstudent_level']) ? "NULL" : "'" . $_POST['fstudent_level'] . "'";
            $advisor_id = empty($_POST['fstudent_advisor_id']) ? "NULL" : $_POST['fstudent_advisor_id'];

            $sql_statement = "INSERT INTO student(student_id,cgpa,enroll_year,scholarship,level,advisor_id) VALUES ($id,$cgpa,$enroll_year,$scholarship,$level,$advisor_id)";
        } elseif ($type == "instructor") {
            $id = empty($_POST['finstructor_id']) ? "NULL" : $_POST['finstructor_id'];
            $faculty_office_location = empty($_POST['finstructor_faculty_office_location']) ? "NULL" : "'" . $_POST['finstructor_faculty_office_location'] . "'";
            $title = empty($_POST['finstructor_title']) ? "NULL" : "'" . $_POST['finstructor_title'] . "'";
            $since = empty($_POST['finstructor_since']) ? "NULL" : "'" . $_POST['finstructor_since'] . "'";
            $faculty_id = empty($_POST['finstructor_faculty_id']) ? "NULL" : $_POST['finstructor_faculty_id'];

            $sql_statement = "INSERT INTO instructor(instructor_id,faculty_office_location,title,since,faculty_id) VALUES ($id,$faculty_office_location,$title,$since,$faculty_id)";
        } elseif ($type == "faculty") {
            $id = empty($_POST['ffaculty_id']) ? "NULL" : $_POST['ffaculty_id'];
            $name = empty($_POST['ffaculty_name']) ? "NULL" : "'" . $_POST['ffaculty_name'] . "'";
            $roomcount = empty($_POST['ffaculty_room_count']) ? "NULL" : $_POST['ffaculty_room_count'];

            $sql_statement = "INSERT INTO faculty(faculty_id,name,room_count) VALUES ($id,$name,$roomcount)";
        } elseif ($type == "club") {
            $id = empty($_POST['fclub_id']) ? "NULL" : $_POST['fclub_id'];
            $email = empty($_POST['fclub_email']) ? "NULL" : "'" . $_POST['fclub_email'] . "'";
            $name = empty($_POST['fclub_name']) ? "NULL" : "'" . $_POST['fclub_name'] . "'";

            $sql_statement = "INSERT INTO club(club_id, email, name) VALUES ($id,$email,$name)";
        } elseif ($type == "course") {
            $id = empty($_POST['fcourse_id']) ? "NULL" : $_POST['fcourse_id'];
            $name = empty($_POST['fcourse_name']) ? "NULL" : "'" . $_POST['fcourse_name'] . "'";
            $code = empty($_POST['fcourse_code']) ? "NULL" : "'" . $_POST['fcourse_code'] . "'";
            $credits = empty($_POST['fcourse_credits']) ? "NULL" : $_POST['fcourse_credits'];
            $level = empty($_POST['fcourse_level']) ? "NULL" : "'" . $_POST['fcourse_level'] . "'";

            $sql_statement = "INSERT INTO course(course_id, name, code, credits, level) VALUES ($id,$name,$code,$credits,$level)";
        } elseif ($type == "program") {
            $id = empty($_POST['fprogram_id']) ? "NULL" : $_POST['fprogram_id'];
            $name = empty($_POST['fprogram_name']) ? "NULL" : "'" . $_POST['fprogram_name'] . "'";

            $sql_statement = "INSERT INTO program(program_id,name) VALUES ($id,$name)";
        } elseif ($type == "timeslot") {
            $id = empty($_POST['ftimeslot_id']) ? "NULL" : $_POST['ftimeslot_id'];
            $day = empty($_POST['ftimeslot_day']) ? "NULL" : "'" . $_POST['ftimeslot_day'] . "'";
            $begin_time = empty($_POST['ftimeslot_begin_time']) ? "NULL" : "'" . $_POST['ftimeslot_begin_time'] . "'";
            $end_time = empty($_POST['ftimeslot_end_time']) ? "NULL" : "'" . $_POST['ftimeslot_end_time'] . "'";

            $sql_statement = "INSERT INTO timeslot(timeslot_id,day,begin_time,end_time) VALUES ($id,$day,$begin_time,$end_time)";
        } elseif ($type == "manages") {
            $student_id = empty($_POST['fmanages_student_id']) ? "NULL" : $_POST['fmanages_student_id'];
            $club_id = empty($_POST['fmanages_club_id']) ? "NULL" : $_POST['fmanages_club_id'];
            $role = empty($_POST['fmanages_role']) ? "NULL" : "'" . $_POST['fmanages_role'] . "'";

            $sql_statement = "INSERT INTO manages(student_id,club_id,role) VALUES ($student_id,$club_id,$role)";
        } elseif ($type == "member_of") {
            $student_id = empty($_POST['fmember_of_student_id']) ? "NULL" : $_POST['fmember_of_student_id'];
            $club_id = empty($_POST['fmember_of_club_id']) ? "NULL" : $_POST['fmember_of_club_id'];

            $sql_statement = "INSERT INTO member_of(student_id,club_id) VALUES ($student_id,$club_id)";
        } elseif ($type == "enrolls_in") {
            $student_id = empty($_POST['fenrolls_in_student_id']) ? "NULL" : $_POST['fenrolls_in_student_id'];
            $program_id = empty($_POST['fenrolls_in_program_id']) ? "NULL" : $_POST['fenrolls_in_program_id'];

            $sql_statement = "INSERT INTO enrolls_in(student_id,program_id) VALUES ($student_id,$program_id)";
        } elseif ($type == "counts_in") {
            $course_id = empty($_POST['fcounts_in_course_id']) ? "NULL" : $_POST['fcounts_in_course_id'];
            $program_id = empty($_POST['fcounts_in_program_id']) ? "NULL" : $_POST['fcounts_in_program_id'];
            $type = empty($_POST['fcounts_in_type']) ? "NULL" : "'" . $_POST['fcounts_in_type'] . "'";

            $sql_statement = "INSERT INTO counts_in(course_id,program_id,type) VALUES ($course_id,$program_id,$type)";
        } elseif ($type == "has_prerequisite") {
            $course_id = empty($_POST['fhas_prerequisite_course_id']) ? "NULL" : $_POST['fhas_prerequisite_course_id'];
            $prerequisite_id = empty($_POST['fhas_prerequisite_prerequisite_id']) ? "NULL" : $_POST['fhas_prerequisite_prerequisite_id'];

            $sql_statement = "INSERT INTO has_prerequisite(course_id,prerequisite_id) VALUES ($course_id,$prerequisite_id)";
        } elseif ($type == "section") {
            $id = empty($_POST['fsection_id']) ? "NULL" : $_POST['fsection_id'];
            $section_course_id = empty($_POST['fsection_course_id']) ? "NULL" : $_POST['fsection_course_id'];
            $location = empty($_POST['fsection_location']) ? "NULL" : "'" . $_POST['fsection_location'] . "'";
            $code = empty($_POST['fsection_code']) ? "NULL" : "'" . $_POST['fsection_code'] . "'";
            $capacity = empty($_POST['fsection_capacity']) ? "NULL" : $_POST['fsection_capacity'];

            $sql_statement = "INSERT INTO section(section_id, course_id, location, code, capacity) VALUES ($id, $section_course_id, $location, $code, $capacity)";
        } elseif ($type == "takes") {
            $student_id = empty($_POST['ftakes_student_id']) ? "NULL" : $_POST['ftakes_student_id'];
            $section_id = empty($_POST['ftakes_section_id']) ? "NULL" : $_POST['ftakes_section_id'];
            $course_id = empty($_POST['ftakes_course_id']) ? "NULL" : $_POST['ftakes_course_id'];
            $letter_grade = empty($_POST['ftakes_letter_grade']) ? "NULL" : "'" . $_POST['ftakes_letter_grade'] . "'";
            $term = empty($_POST['ftakes_term']) ? "NULL" : "'" . $_POST['ftakes_term'] . "'";

            $sql_statement = "INSERT INTO takes(student_id, section_id, course_id, letter_grade, term) VALUES ($student_id, $section_id, $course_id, $letter_grade, $term)";
        } elseif ($type == "offers") {
            $instructor_id = empty($_POST['foffers_instructor_id']) ? "NULL" : $_POST['foffers_instructor_id'];
            $faculty_id = empty($_POST['foffers_faculty_id']) ? "NULL" : $_POST['foffers_faculty_id'];
            $course_id = empty($_POST['foffers_course_id']) ? "NULL" : $_POST['foffers_course_id'];
            $term = empty($_POST['foffers_term']) ? "NULL" : "'" . $_POST['foffers_term'] . "'";

            $sql_statement = "INSERT INTO offers(instructor_id, faculty_id, course_id, term) VALUES ($instructor_id, $faculty_id, $course_id, $term)";
        } elseif ($type == "scheduled") {
            $scheduled_timeslot_id = empty($_POST['fscheduled_timeslot_id']) ? "NULL" : $_POST['fscheduled_timeslot_id'];
            $scheduled_section_id = empty($_POST['fscheduled_section_id']) ? "NULL" : $_POST['fscheduled_section_id'];
            $scheduled_course_id = empty($_POST['fscheduled_course_id']) ? "NULL" : $_POST['fscheduled_course_id'];

            $sql_statement = "INSERT INTO scheduled(timeslot_id, section_id, course_id) VALUES ($scheduled_timeslot_id, $scheduled_section_id, $scheduled_course_id)";
        }

        //INSERT CONDITIONS HERE

        echo "SQL statement: " . $sql_statement;

        $result = mysqli_query($db, $sql_statement);

        if ($result == 1) {
            echo "<br>Insertion completed successfully";
        } else {
            echo "<br>Insertion failed.<br>" . mysqli_error($db);
        }
    } else {
        echo "ERROR: No relation selected.<br>Please choose a relation first before trying to insert or view the selected relation.";
    }

    ?>

</body>

</html>