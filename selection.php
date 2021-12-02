<?php
header('Content-type: text/plain');

include "config.php";

#if name is not empty
if (!empty($_POST['fselectfrom']))
{
    $select_what = $_POST['fselectwhat'];
    $select_from = $_POST['fselectfrom'];

    $sql_statement = "SELECT " . $select_what . " FROM " . $select_from;

    echo "SQL statement: " . $sql_statement;
    
    $result = mysqli_query($db, $sql_statement);

    echo "\n";
    while($row = mysqli_fetch_array($result))
    {
        $index = 0;
        while($index < mysqli_num_fields($result))
        {
            $field = mysqli_fetch_field_direct($result, $index);
            echo $field->name . ": " . $row[$index] . " ";
            
            $index += 1;
        }
        echo "\n";
    }
}
?>