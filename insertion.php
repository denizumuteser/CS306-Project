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
        <a class="return" href="./index.php">Return</a>
    </div>

    <div class="content">
        <h2>Insertion</h2>

        <Form id="insertion-form" action="insert.php" method="post">
            <fieldset id="fieldsetInputs">

                <label for="ftype">What to insert:</label>
                <select name="ftype" , id="ftype">
                    <option value=""></option>
                    <option value="person">Person</option>
                    <option value="student">Student</option>
                    <option value="instructor">Instructor</option>
                    <option value="faculty">Faculty</option>
                    <option value="club">Club</option>
                    <option value="course">Course</option>
                    <option value="program">Program</option>
                    <option value="timeslot">TimeSlot</option>
                    <option value="manages">Manages</option>
                    <option value="member_of">Member_of</option>
                    <option value="enrolls_in">Enrolls_in</option>
                    <option value="counts_in">Counts_in</option>
                    <option value="has_prerequisite">Has_prerequisite</option>
                    <option value="section">Section</option>
                    <option value="takes">Takes</option>
                    <option value="offers">Offers</option>
                    <option value="scheduled">Scheduled</option>


                    <!--insert all insertable things here-->
                </select>

                <div class="formfields">

                    <!-- PERSON -->
                    <div class="inputfield" , id="idField">
                        <label for="fid">id:</label>
                        <input type="text" , id="fid" , name="fid" , placeholder="Enter id">
                    </div>

                    <div class="inputfield" , id="usernameField">
                        <label for="fusername">Username:</label>
                        <input type="text" , id="fusername" , name="fusername" , placeholder="Enter username">
                    </div>

                    <div class="inputfield" , id="passwordField">
                        <label for="fpassword">Password:</label>
                        <input type="text" , id="fpassword" , name="fpassword" , placeholder="Enter password">
                    </div>

                    <div class="inputfield" id="nameField">
                        <label for="fname">Name:</label>
                        <input type="text" , id="fname" , name="fname" , placeholder="Enter name">
                    </div>

                    <div class="inputfield" id="surnameField">
                        <label for="fsurname">Surname:</label>
                        <input type="text" , id="fsurname" , name="fsurname" , placeholder="Enter surname">
                    </div>

                    <div class="inputfield" id="genderField">
                        <label for="fgender">Gender:</label>
                        <input type="text" , id="fgender" , name="fgender" , placeholder="Enter gender">
                    </div>

                    <div class="inputfield" id="birthdateField">
                        <label for="fbirthdate">Birth date:</label>
                        <input type="text" , id="fbirthdate" , name="fbirthdate" , placeholder="Enter birth date">
                    </div>

                    <div class="inputfield" id="addressField">
                        <label for="faddress">Address:</label>
                        <input type="text" , id="faddress" , name="faddress" , placeholder="Enter address">
                    </div>

                    <div class="inputfield" id="emailField">
                        <label for="femail">Email:</label>
                        <input type="text" , id="femail" , name="femail" , placeholder="Enter email">
                    </div>

                    <div class="inputfield" id="phonenumberField">
                        <label for="fphonenumber">Phone number:</label>
                        <input type="text" , id="fphonenumber" , name="fphonenumber" , placeholder="Enter phone number">
                    </div>

                    <!-- STUDENT -->
                    <div class="inputfield" , id="student_idField">
                        <label for="fstudent_id">Student id:</label>
                        <input type="text" name="fstudent_id" id="fstudent_id" placeholder="Enter student id">
                    </div>

                    <div class="inputfield" , id="student_cgpaField">
                        <label for="fstudent_cgpa">CGPA:</label>
                        <input type="text" name="fstudent_cgpa" id="fstudent_cgpa" placeholder="Enter CGPA">
                    </div>

                    <div class="inputfield" , id="student_enroll_yearField">
                        <label for="fstudent_enroll_year">Enroll year:</label>
                        <input type="text" name="fstudent_enroll_year" id="fstudent_enroll_year" placeholder="Enter enroll year">
                    </div>

                    <div class="inputfield" , id="student_scholarshipField">
                        <label for="fstudent_scholarship">Scholarship:</label>
                        <input type="text" name="fstudent_scholarship" id="fstudent_scholarship" placeholder="Enter scholarship">
                    </div>

                    <div class="inputfield" , id="student_levelField">
                        <label for="fstudent_level">Level:</label>
                        <input type="text" name="fstudent_level" id="fstudent_level" placeholder="Enter level">
                    </div>

                    <div class="inputfield" , id="student_advisor_idField">
                        <label for="fstudent_advisor_id">Advisor id:</label>
                        <input type="text" name="fstudent_advisor_id" id="fstudent_advisor_id" placeholder="Enter advisor id">
                    </div>

                    <!-- INSTRUCTOR -->
                    <div class="inputfield" , id="instructor_idField">
                        <label for="finstructor_id">Instructor id:</label>
                        <input type="text" name="finstructor_id" id="finstructor_id">
                    </div>

                    <div class="inputfield" , id="instructor_faculty_office_locationField">
                        <label for="finstructor_faculty_office_location">Faculty office location:</label>
                        <input type="text" name="finstructor_faculty_office_location" id="finstructor_faculty_office_location">
                    </div>

                    <div class="inputfield" , id="instructor_titleField">
                        <label for="finstructor_title">Title:</label>
                        <input type="text" name="finstructor_title" id="finstructor_title">
                    </div>

                    <div class="inputfield" , id="instructor_sinceField">
                        <label for="finstructor_since">Since:</label>
                        <input type="text" name="finstructor_since" id="finstructor_since">
                    </div>

                    <div class="inputfield" , id="instructor_faculty_idField">
                        <label for="finstructor_faculty_id">Faculty id:</label>
                        <input type="text" name="finstructor_faculty_id" id="finstructor_faculty_id">
                    </div>

                    <!-- FACULTY -->
                    <div class="inputfield" , id="faculty_idField">
                        <label for="ffaculty_id">Faculty id:</label>
                        <input type="text" name="ffaculty_id" id="ffaculty_id">
                    </div>

                    <div class="inputfield" , id="faculty_nameField">
                        <label for="ffaculty_name">Name:</label>
                        <input type="text" name="ffaculty_name" id="ffaculty_name">
                    </div>

                    <div class="inputfield" , id="faculty_room_countField">
                        <label for="ffaculty_room_count">Room count:</label>
                        <input type="text" name="ffaculty_room_count" id="ffaculty_room_count">
                    </div>

                    <!-- CLUB -->
                    <div class="inputfield" , id="club_idField">
                        <label for="fclub_id">Club id:</label>
                        <input type="text" name="fclub_id" id="fclub_id">
                    </div>

                    <div class="inputfield" , id="club_emailField">
                        <label for="fclub_email">Email:</label>
                        <input type="text" name="fclub_email" id="fclub_email">
                    </div>

                    <div class="inputfield" , id="club_nameField">
                        <label for="fclub_name">Name:</label>
                        <input type="text" name="fclub_name" id="fclub_name">
                    </div>

                    <!-- COURSE -->
                    <div class="inputfield" , id="course_idField">
                        <label for="fcourse_id">Course id:</label>
                        <input type="text" name="fcourse_id" id="fcourse_id">
                    </div>

                    <div class="inputfield" , id="course_nameField">
                        <label for="fcourse_name">Course name:</label>
                        <input type="text" name="fcourse_name" id="fcourse_name">
                    </div>

                    <div class="inputfield" , id="course_codeField">
                        <label for="fcourse_code">Course code:</label>
                        <input type="text" name="fcourse_code" id="fcourse_code">
                    </div>

                    <div class="inputfield" , id="course_creditsField">
                        <label for="fcourse_credits">Course credits:</label>
                        <input type="text" name="fcourse_credits" id="fcourse_credits">
                    </div>

                    <div class="inputfield" , id="course_levelField">
                        <label for="fcourse_level">Course level:</label>
                        <input type="text" name="fcourse_level" id="fcourse_level">
                    </div>

                    <!-- PROGRAM -->
                    <div class="inputfield" , id="program_idField">
                        <label for="fprogram_id">Program id:</label>
                        <input type="text" name="fprogram_id" id="fprogram_id">
                    </div>

                    <div class="inputfield" , id="program_nameField">
                        <label for="fprogram_name">Name:</label>
                        <input type="text" name="fprogram_name" id="fprogram_name">
                    </div>

                    <!-- TIMESLOT -->
                    <div class="inputfield" , id="timeslot_idField">
                        <label for="ftimeslot_id">Timeslot id:</label>
                        <input type="text" name="ftimeslot_id" id="ftimeslot_id">
                    </div>

                    <div class="inputfield" , id="timeslot_dayField">
                        <label for="ftimeslot_day">Day:</label>
                        <input type="text" name="ftimeslot_day" id="ftimeslot_day">
                    </div>

                    <div class="inputfield" , id="timeslot_begin_timeField">
                        <label for="ftimeslot_begin_time">Begin time:</label>
                        <input type="text" name="ftimeslot_begin_time" id="ftimeslot_begin_time">
                    </div>

                    <div class="inputfield" , id="timeslot_end_timeField">
                        <label for="ftimeslot_end_time">End time:</label>
                        <input type="text" name="ftimeslot_end_time" id="ftimeslot_end_time">
                    </div>

                    <!-- MANAGES -->
                    <div class="inputfield" , id="manages_student_idField">
                        <label for="fmanages_student_id">Student id:</label>
                        <input type="text" name="fmanages_student_id" id="fmanages_student_id">
                    </div>

                    <div class="inputfield" , id="manages_club_idField">
                        <label for="fmanages_club_id">Club id:</label>
                        <input type="text" name="fmanages_club_id" id="fmanages_club_id">
                    </div>

                    <div class="inputfield" , id="manages_roleField">
                        <label for="fmanages_role">Role:</label>
                        <input type="text" name="fmanages_role" id="fmanages_role">
                    </div>

                    <!-- MEMBER_OF -->
                    <div class="inputfield" , id="member_of_student_idField">
                        <label for="fmember_of_student_id">Student id:</label>
                        <input type="text" name="fmember_of_student_id" id="fmember_of_student_id">
                    </div>

                    <div class="inputfield" , id="member_of_club_idField">
                        <label for="fmember_of_club_id">Club id:</label>
                        <input type="text" name="fmember_of_club_id" id="fmember_of_club_id">
                    </div>

                    <!-- ENROLLS_IN -->
                    <div class="inputfield" , id="enrolls_in_student_idField">
                        <label for="fenrolls_in_student_id">Student id:</label>
                        <input type="text" name="fenrolls_in_student_id" id="fenrolls_in_student_id">
                    </div>

                    <div class="inputfield" , id="enrolls_in_program_idField">
                        <label for="fenrolls_in_program_id">Program id:</label>
                        <input type="text" name="fenrolls_in_program_id" id="fenrolls_in_program_id">
                    </div>

                    <!-- COUNTS_IN -->
                    <div class="inputfield" , id="counts_in_course_idField">
                        <label for="fcounts_in_course_id">Course id:</label>
                        <input type="text" name="fcounts_in_course_id" id="fcounts_in_course_id">
                    </div>

                    <div class="inputfield" , id="counts_in_program_idField">
                        <label for="fcounts_in_program_id">Program id:</label>
                        <input type="text" name="fcounts_in_program_id" id="fcounts_in_program_id">
                    </div>

                    <div class="inputfield" , id="counts_in_typeField">
                        <label for="fcounts_in_type">Type:</label>
                        <input type="text" name="fcounts_in_type" id="fcounts_in_type">
                    </div>

                    <!-- HAS_PREREQUISITE -->
                    <div class="inputfield" , id="has_prerequisite_course_idField">
                        <label for="fhas_prerequisite_course_id">Course id:</label>
                        <input type="text" name="fhas_prerequisite_course_id" id="fhas_prerequisite_course_id">
                    </div>

                    <div class="inputfield" , id="has_prerequisite_prerequisite_idField">
                        <label for="fhas_prerequisite_prerequisite_id">Prerequisite id:</label>
                        <input type="text" name="fhas_prerequisite_prerequisite_id" id="fhas_prerequisite_prerequisite_id">
                    </div>

                    <!-- SECTION -->
                    <div class="inputfield" , id="section_idField">
                        <label for="fsection_id">Section id:</label>
                        <input type="text" name="fsection_id" id="fsection_id">
                    </div>

                    <div class="inputfield" , id="section_course_idField">
                        <label for="fsection_course_id">Course id:</label>
                        <input type="text" name="fsection_course_id" id="fsection_course_id">
                    </div>

                    <div class="inputfield" , id="section_locationField">
                        <label for="fsection_location">Section location:</label>
                        <input type="text" name="fsection_location" id="fsection_location">
                    </div>

                    <div class="inputfield" , id="section_codeField">
                        <label for="fsection_code"> Section code:</label>
                        <input type="text" name="fsection_code" id="fsection_code">
                    </div>

                    <div class="inputfield" , id="section_capacityField">
                        <label for="fsection_capacity">Section capacity:</label>
                        <input type="text" name="fsection_capacity" id="fsection_capacity">
                    </div>

                    <!-- TAKES -->
                    <div class="inputfield" , id="takes_student_idField">
                        <label for="ftakes_student_id">Student id:</label>
                        <input type="text" name="ftakes_student_id" id="ftakes_student_id">
                    </div>

                    <div class="inputfield" , id="takes_section_idField">
                        <label for="ftakes_section_id">Section id:</label>
                        <input type="text" name="ftakes_section_id" id="ftakes_section_id">
                    </div>

                    <div class="inputfield" , id="takes_course_idField">
                        <label for="ftakes_course_id">Course id:</label>
                        <input type="text" name="ftakes_course_id" id="ftakes_course_id">
                    </div>

                    <div class="inputfield" , id="takes_letter_gradeField">
                        <label for="ftakes_letter_grade">Letter grade:</label>
                        <input type="text" name="ftakes_letter_grade" id="ftakes_letter_grade">
                    </div>

                    <div class="inputfield" , id="takes_termField">
                        <label for="ftakes_term">Term:</label>
                        <input type="text" name="ftakes_term" id="ftakes_term">
                    </div>

                    <!-- OFFERS -->
                    <div class="inputfield" , id="offers_instructor_idField">
                        <label for="foffers_instructor_id">Instructor id:</label>
                        <input type="text" name="foffers_instructor_id" id="foffers_instructor_id">
                    </div>

                    <div class="inputfield" , id="offers_faculty_idField">
                        <label for="foffers_faculty_id">Faculty id:</label>
                        <input type="text" name="foffers_faculty_id" id="foffers_faculty_id">
                    </div>

                    <div class="inputfield" , id="offers_course_idField">
                        <label for="foffers_course_id">Course id:</label>
                        <input type="text" name="foffers_course_id" id="foffers_course_id">
                    </div>

                    <div class="inputfield" , id="offers_termField">
                        <label for="foffers_term">Term:</label>
                        <input type="text" name="foffers_term" id="foffers_term">
                    </div>

                    <!-- SCHEDULED -->
                    <div class="inputfield" , id="scheduled_timeslot_idField">
                        <label for="fscheduled_timeslot_id">Timeslot id:</label>
                        <input type="text" name="fscheduled_timeslot_id" id="fscheduled_timeslot_id">
                    </div>

                    <div class="inputfield" , id="scheduled_section_idField">
                        <label for="fscheduled_section_id">Section id:</label>
                        <input type="text" name="fscheduled_section_id" id="fscheduled_section_id">
                    </div>

                    <div class="inputfield" , id="scheduled_course_idField">
                        <label for="fscheduled_course_id">Course id:</label>
                        <input type="text" name="fscheduled_course_id" id="fscheduled_course_id">
                    </div>

                    <!--insert all possible input fields-->

                </div>


                <button type="submit" , name="action" , value="insert">Insert</button>
                <button type="submit" , name="action" , value="view_table">View Table</button>

            </fieldset>
        </Form>
    </div>
    <script src="insertion.js"></script>

</body>

</html>