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
        <h2>Deletion</h2>
        
        <Form id="deletion-form" action="delete.php" method="post">
            <fieldset id="fieldsetInputs">

                <label for="ftype">Delete from:</label>
                <select name="ftype", id="ftype">
                    <option value=""></option>
                    <option value="person">Person</option>
                    <option value="student">Student</option>
                    <option value="course">Course</option>
                    <option value="club">Club</option>
                    <option value="faculty">Faculty</option>
                    <option value="program">Program</option>
                    <option value="timeslot">TimeSlot</option>
                    <!--insert all tables here-->
                </select>

                <div class="inputfield", id="didField">
                    <label for="fdid">ID:</label>
                    <input type="text", id="fdid", name="fdid", placeholder="Enter id">
                </div>     

  
                <button type="submit">Delete</button>
                
            </fieldset>

        </Form>
        
    </div>
    
</body>
</html>