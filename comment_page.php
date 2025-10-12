<?php

if ($_POST) // If form was submited...
{
    $text = $_POST["comment"]; // Get it into a variable
    echo "<h1>$text</h1>"; // Print it!
}

?>