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
        <a class="return" href="javascript:history.back()">Return</a>
    </div>

    <div class="content">
        <h2>Deletion</h2>

        <Form id="deletion-form" action="delete.php" method="post">
            <fieldset id="fieldsetInputs">

                <label for="ftype">Delete from:</label>
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
                    <!--insert all tables here-->
                </select>

                <div class="formfields">

                    <!-- PERSON -->
                    <div class="inputfield" , id="idField">
                        <label for="fid">id:</label>
                        <input type="text" , id="fid" , name="fid" , placeholder="Enter id">
                    </div>

                    <!-- STUDENT -->
                    <div class="inputfield" , id="student_idField">
                        <label for="fstudent_id">Student id:</label>
                        <input type="text" name="fstudent_id" id="fstudent_id" placeholder="Enter student id">
                    </div>

                    <!-- INSTRUCTOR -->
                    <div class="inputfield" , id="instructor_idField">
                        <label for="finstructor_id">Instructor id:</label>
                        <input type="text" name="finstructor_id" id="finstructor_id">
                    </div>

                    <!-- FACULTY -->
                    <div class="inputfield" , id="faculty_idField">
                        <label for="ffaculty_id">Faculty id:</label>
                        <input type="text" name="ffaculty_id" id="ffaculty_id">
                    </div>

                    <!-- CLUB -->
                    <div class="inputfield" , id="club_idField">
                        <label for="fclub_id">Club id:</label>
                        <input type="text" name="fclub_id" id="fclub_id">
                    </div>

                    <!-- COURSE -->
                    <div class="inputfield" , id="course_idField">
                        <label for="fcourse_id">Course id:</label>
                        <input type="text" name="fcourse_id" id="fcourse_id">
                    </div>

                    <!-- PROGRAM -->
                    <div class="inputfield" , id="program_idField">
                        <label for="fprogram_id">Program id:</label>
                        <input type="text" name="fprogram_id" id="fprogram_id">
                    </div>

                    <!-- TIMESLOT -->
                    <div class="inputfield" , id="timeslot_idField">
                        <label for="ftimeslot_id">Timeslot id:</label>
                        <input type="text" name="ftimeslot_id" id="ftimeslot_id">
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


                <button type="submit" , name="action" , value="delete">Delete</button>
                <button type="submit" , name="action" , value="view_table">View Table</button>

            </fieldset>

        </Form>

    </div>
    <script src="deletion.js"></script>

</body>

</html>