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

    if (!empty($_POST['ftype'])) {
        $type = $_POST['ftype'];

        if ($type == "person") {
            $id = empty($_POST['fid']) ? "NULL" : $_POST['fid'];

            $sql_statement = "DELETE FROM person WHERE id = $id";
        } elseif ($type == "student") {
            $id = empty($_POST['fstudent_id']) ? "NULL" : $_POST['fstudent_id'];

            $sql_statement = "DELETE FROM student WHERE student_id = $id";
        } elseif ($type == "instructor") {
            $id = empty($_POST['finstructor_id']) ? "NULL" : $_POST['finstructor_id'];

            $sql_statement = "DELETE FROM instructor WHERE instructor_id = $id";
        } elseif ($type == "faculty") {
            $id = empty($_POST['ffaculty_id']) ? "NULL" : $_POST['ffaculty_id'];

            $sql_statement = "DELETE FROM faculty WHERE faculty_id = $id";
        } elseif ($type == "club") {
            $id = empty($_POST['fclub_id']) ? "NULL" : $_POST['fclub_id'];

            $sql_statement = "DELETE FROM club WHERE club_id = $id";
        } elseif ($type == "course") {
            $id = empty($_POST['fcourse_id']) ? "NULL" : $_POST['fcourse_id'];

            $sql_statement = "DELETE FROM course WHERE course_id = $id";
        } elseif ($type == "program") {
            $id = empty($_POST['fprogram_id']) ? "NULL" : $_POST['fprogram_id'];

            $sql_statement = "DELETE FROM program WHERE program_id = $id";
        } elseif ($type == "timeslot") {
            $id = empty($_POST['ftimeslot_id']) ? "NULL" : $_POST['ftimeslot_id'];

            $sql_statement = "DELETE FROM timeslot WHERE timeslot_id = $id";
        } elseif ($type == "manages") {
            $student_id = empty($_POST['fmanages_student_id']) ? "NULL" : $_POST['fmanages_student_id'];
            $club_id = empty($_POST['fmanages_club_id']) ? "NULL" : $_POST['fmanages_club_id'];

            $sql_statement = "DELETE FROM manages WHERE (student_id, club_id) = ($student_id, $club_id)";
        } elseif ($type == "member_of") {
            $student_id = empty($_POST['fmember_of_student_id']) ? "NULL" : $_POST['fmember_of_student_id'];
            $club_id = empty($_POST['fmember_of_club_id']) ? "NULL" : $_POST['fmember_of_club_id'];

            $sql_statement = "DELETE FROM member_of WHERE (student_id, club_id) = ($student_id, $club_id)";
        } elseif ($type == "enrolls_in") {
            $student_id = empty($_POST['fenrolls_in_student_id']) ? "NULL" : $_POST['fenrolls_in_student_id'];
            $program_id = empty($_POST['fenrolls_in_program_id']) ? "NULL" : $_POST['fenrolls_in_program_id'];

            $sql_statement = "DELETE FROM enrolls_in WHERE (student_id, program_id) = ($student_id, $program_id)";
        } elseif ($type == "counts_in") {
            $course_id = empty($_POST['fcounts_in_course_id']) ? "NULL" : $_POST['fcounts_in_course_id'];
            $program_id = empty($_POST['fcounts_in_program_id']) ? "NULL" : $_POST['fcounts_in_program_id'];

            $sql_statement = "DELETE FROM counts_in WHERE (course_id, program_id) = ($course_id, $program_id)";
        } elseif ($type == "has_prerequisite") {
            $course_id = empty($_POST['fhas_prerequisite_course_id']) ? "NULL" : $_POST['fhas_prerequisite_course_id'];
            $prerequisite_id = empty($_POST['fhas_prerequisite_prerequisite_id']) ? "NULL" : $_POST['fhas_prerequisite_prerequisite_id'];

            $sql_statement = "DELETE FROM has_prerequisite WHERE (course_id, prerequisite_id) = ($course_id, $prerequisite_id)";
        } elseif ($type == "section") {
            $id = empty($_POST['fsection_id']) ? "NULL" : $_POST['fsection_id'];
            $section_course_id = empty($_POST['fsection_course_id']) ? "NULL" : $_POST['fsection_course_id'];

            $sql_statement = "DELETE FROM section WHERE (id, section_course_id) = ($id, $section_course_id)";
        } elseif ($type == "takes") {
            $student_id = empty($_POST['ftakes_student_id']) ? "NULL" : $_POST['ftakes_student_id'];
            $section_id = empty($_POST['ftakes_section_id']) ? "NULL" : $_POST['ftakes_section_id'];
            $course_id = empty($_POST['ftakes_course_id']) ? "NULL" : $_POST['ftakes_course_id'];

            $sql_statement = "DELETE FROM takes WHERE (student_id, section_id, course_id) = ($student_id, $section_id, $course_id)";
        } elseif ($type == "offers") {
            $instructor_id = empty($_POST['foffers_instructor_id']) ? "NULL" : $_POST['foffers_instructor_id'];
            $faculty_id = empty($_POST['foffers_faculty_id']) ? "NULL" : $_POST['foffers_faculty_id'];
            $course_id = empty($_POST['foffers_course_id']) ? "NULL" : $_POST['foffers_course_id'];

            $sql_statement = "DELETE FROM offers WHERE (instructor_id, faculty_id, course_id) = ($instructor_id, $faculty_id, $course_id)";
        } elseif ($type == "scheduled") {
            $scheduled_timeslot_id = empty($_POST['fscheduled_timeslot_id']) ? "NULL" : $_POST['fscheduled_timeslot_id'];
            $scheduled_section_id = empty($_POST['fscheduled_section_id']) ? "NULL" : $_POST['fscheduled_section_id'];
            $scheduled_course_id = empty($_POST['fscheduled_course_id']) ? "NULL" : $_POST['fscheduled_course_id'];

            $sql_statement = "DELETE FROM scheduled WHERE (timeslot_id, section_id, course_id) = ($scheduled_timeslot_id, $scheduled_section_id, $scheduled_course_id)";
        }

        echo "SQL statement: " . $sql_statement;

        $result = mysqli_query($db, $sql_statement);

        if ($result == 1) {
            echo "<br>Deletion completed successfully.";
        } else {
            echo "<br>Deletion failed.<br>" . mysqli_error($db);
        }
    } else {
        echo "ERROR: No relation selected.<br>Please choose a relation first before trying to insert or view the selected relation.";
    }

    ?>

</body>

</html>