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
                <input type="text" , id="fselectwhat" , name="fselectwhat">

                <label for="fselectfrom">FROM</label>
                <input type="text" name="fselectfrom" list="fselectfrom">
                <datalist id="fselectfrom">
                    <option value=""></option>
                    <option value="person"></option>
                    <option value="student"></option>
                    <option value="instructor"></option>
                    <option value="faculty"></option>
                    <option value="club"></option>
                    <option value="course"></option>
                    <option value="program"></option>
                    <option value="timeslot"></option>
                    <option value="manages"></option>
                    <option value="member_of"></option>
                    <option value="enrolls_in"></option>
                    <option value="counts_in"></option>
                    <option value="has_prerequisite"></option>
                    <option value="section"></option>
                    <option value="takes"></option>
                    <option value="offers"></option>
                    <option value="scheduled"></option>
                </datalist>
                

                <label for="fselectwhere">WHERE</label>
                <input type="text" , id="fselectwhere" , name="fselectwhere">

                <label for="fselectgroupby">GROUP BY</label>
                <input type="text" , id="fselectgroupby" , name="fselectgroupby">

                <label for="fselecthaving">HAVING</label>
                <input type="text" , id="fselecthaving" , name="fselecthaving">

                <button type="submit">Select</button>

            </fieldset>

        </Form>
    </div>

</body>

</html>