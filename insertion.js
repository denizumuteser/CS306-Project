input_container = document.getElementById("fieldsetInputs");
ftype = document.getElementById('ftype');


function clearFields() {
    inputs = document.getElementsByClassName('inputfield');
    for (i = 0; i < inputs.length; i++) {
        inputs[i].style.display = "none";

        inputs[i].value = "";
    }
}

clearFields();

document.getElementById('ftype').onchange = function (e) {
    clearFields();
    value = e.target.value;
    

    if (value == "person") {
        document.getElementById("idField").style.display = "block";
        document.getElementById("usernameField").style.display = "block";
        document.getElementById("passwordField").style.display = "block";
        document.getElementById("nameField").style.display = "block";
        document.getElementById("surnameField").style.display = "block";
        document.getElementById("genderField").style.display = "block";
        document.getElementById("birthdateField").style.display = "block";
        document.getElementById("addressField").style.display = "block";
        document.getElementById("emailField").style.display = "block";
        document.getElementById("phonenumberField").style.display = "block";
    }

    else if (value == "student") {
        document.getElementById("student_idField").style.display = "block";
        document.getElementById("student_cgpaField").style.display = "block";
        //document.getElementById("student_enroll_yearField").style.display = "block";
        document.getElementById("student_scholarshipField").style.display = "block";
        document.getElementById("student_levelField").style.display = "block";
        document.getElementById("student_advisor_idField").style.display = "block";
    }

    else if (value == "course") {
        document.getElementById("course_idField").style.display = "block";
        document.getElementById("course_codeField").style.display = "block";
        document.getElementById("course_creditsField").style.display = "block";
    }


    else if (value == "club") {
        document.getElementById("club_idField").style.display = "block";
        document.getElementById("club_member_countField").style.display = "block";
        document.getElementById("club_emailField").style.display = "block";
        document.getElementById("club_nameField").style.display = "block";
    }

    else if (value == "faculty") {
        document.getElementById("faculty_idField").style.display = "block";
        document.getElementById("faculty_nameField").style.display = "block";
        document.getElementById("faculty_room_countField").style.display = "block";
    }

    else if (value == "program") {
        document.getElementById("program_idField").style.display = "block";
        document.getElementById("program_nameField").style.display = "block";

    }

    else if (value == "timeslot") {
        document.getElementById("timeslot_idField").style.display = "block";
        document.getElementById("timeslot_dayField").style.display = "block";
        document.getElementById("timeslot_begin_timeField").style.display = "block";
        document.getElementById("timeslot_end_timeField").style.display = "block";
    }
    else if (value == "manages") {
        document.getElementById("manages_student_idField").style.display = "block";
        document.getElementById("manages_club_idField").style.display = "block";
        document.getElementById("manages_roleField").style.display = "block";
    }
    else if (value == "member_of") {
        document.getElementById("member_of_student_idField").style.display = "block";
        document.getElementById("member_of_club_idField").style.display = "block";
    }
    else if (value == "enrolls_in") {
        document.getElementById("enrolls_in_student_idField").style.display = "block";
        document.getElementById("enrolls_in_program_idField").style.display = "block";
    }
    else if (value == "counts_in") {
        document.getElementById("counts_in_course_idField").style.display = "block";
        document.getElementById("counts_in_program_idField").style.display = "block";
        document.getElementById("counts_in_typeField").style.display = "block";
    }
    else if (value == "has_prerequisite") {
        document.getElementById("has_prerequisite_course_idField").style.display = "block";
        document.getElementById("has_prerequisite_prerequisite_idField").style.display = "block";
    }




}

