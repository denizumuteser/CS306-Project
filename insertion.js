input_container = document.getElementById("fieldsetInputs");
ftype = document.getElementById('ftype');


function clearFields()
{
    inputs = document.getElementsByClassName('inputfield');
    for(i=0;i<inputs.length;i++)
    {
        inputs[i].style.display = "none";
        
        inputs[i].value = "";
    }
}

clearFields();

document.getElementById('ftype').onchange = function(e) {
    clearFields();
    console.log("clicked");
    value = e.target.value;
    
    if (value == "person")
    {
        document.getElementById("nameField").style.display = "block";
        document.getElementById("surnameField").style.display = "block";
        document.getElementById("idField").style.display = "block";
        document.getElementById("usernameField").style.display = "block";
        document.getElementById("passwordField").style.display = "block";
    }

    else if (value == "student")
    {

    }

    else if (value == "course")
    {
        document.getElementById("course_idField").style.display = "block";
        document.getElementById("course_codeField").style.display = "block";
        document.getElementById("course_creditsField").style.display = "block";
    }

    else if (value = "club")
    {
        document.getElementById("club_idField").style.display = "block";
        document.getElementById("club_member_countField").style.display = "block";
        document.getElementById("club_emailField").style.display = "block";
        document.getElementById("club_nameField").style.display = "block";
    }

}

