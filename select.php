<?php
header('Content-type: text/plain');

include "config.php";

#if name is not empty
if (!empty($_POST['fselectfrom']))
{
    $select_what = empty($_POST['fselectwhat']) ? "*": "SELECT " . $_POST["fselectwhat"];
    $select_from = " FROM " . $_POST['fselectfrom'];
    $select_where = empty($_POST["fselectwhere"]) ? "" : " WHERE " . $_POST["fselectwhere"];
    $select_groupby = empty($_POST['fselectgroupby']) ? "": " GROUP BY " . $_POST["fselectgroupby"];
    $select_having = empty($_POST['fselecthaving']) ? "": " HAVING " . $_POST["fselecthaving"];
    
    $sql_statement = $select_what . $select_from . $select_where . $select_groupby . $select_having;

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