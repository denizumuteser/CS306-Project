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
        <a class="return" href="./index.php">Return</a>
    </div>

    <div class="content">
        <h2>Selection</h2>
        <Form id="insertion-form" action="select.php" method="post">
            <fieldset id="fieldsetInputs">
                <label for="fselectwhat">SELECT</label>
                <input type="text", id="fselectwhat", name="fselectwhat">

                <label for="fselectfrom">FROM</label>
                <select name="fselectfrom", id="fselectfrom">
                    <option value=""></option>
                    <option value="person">Person</option>
                    <option value="student">Student</option>
                    <option value="course">Course</option>
                    <option value="club">Club</option>
                    <option value="faculty">Faculty</option>
                    <option value="program">Program</option>
                    <option value="timeslot">TimeSlot</option>
                </select>    

                <button type="submit">Select</button>
                
            </fieldset>

        </Form>
    </div>
    
</body>
</html>