input_container = document.getElementById("fieldsetInputs");
ftype = document.getElementById('ftype');


function clearFields() {
  inputs = document.getElementsByClassName('inputfield');
  for (i = 0; i < inputs.length; i++) {
    inputs[i].style.display = "none";

    inputs[i].value = "";
  }
}

function setDisplay(value) {
  if (value == "person") {
    document.getElementById("idField").style.display = "block";
  }

  else if (value == "student") {
    document.getElementById("student_idField").style.display = "block";
  }

  else if (value == "instructor") {
    document.getElementById("instructor_idField").style.display = "block";
  }

  else if (value == "faculty") {
    document.getElementById("faculty_idField").style.display = "block";
  }

  else if (value == "club") {
    document.getElementById("club_idField").style.display = "block";
  }

  else if (value == "course") {
    document.getElementById("course_idField").style.display = "block";
  }

  else if (value == "program") {
    document.getElementById("program_idField").style.display = "block";
  }

  else if (value == "timeslot") {
    document.getElementById("timeslot_idField").style.display = "block";
  }

  else if (value == "manages") {
    document.getElementById("manages_student_idField").style.display = "block";
    document.getElementById("manages_club_idField").style.display = "block";
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
  }

  else if (value == "has_prerequisite") {
    document.getElementById("has_prerequisite_course_idField").style.display = "block";
    document.getElementById("has_prerequisite_prerequisite_idField").style.display = "block";
  }

  else if (value == "section") {
    document.getElementById("section_idField").style.display = "block";
    document.getElementById("section_course_idField").style.display = "block";
  }

  else if (value == "takes") {
    document.getElementById("takes_student_idField").style.display = "block";
    document.getElementById("takes_section_idField").style.display = "block";
    document.getElementById("takes_course_idField").style.display = "block";
  }

  else if (value == "offers") {
    document.getElementById("offers_instructor_idField").style.display = "block";
    document.getElementById("offers_faculty_idField").style.display = "block";
    document.getElementById("offers_course_idField").style.display = "block";
  }

  else if (value == "scheduled") {
    document.getElementById("scheduled_timeslot_idField").style.display = "block";
    document.getElementById("scheduled_section_idField").style.display = "block";
    document.getElementById("scheduled_course_idField").style.display = "block";
  }
}

clearFields();

document.getElementById('ftype').onchange = function (e) {
  clearFields();
  value = e.target.value;
  setDisplay(value);
}


value = document.getElementById('ftype');
setDisplay(value);