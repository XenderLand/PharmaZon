<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];

    // Call a Python script using shell_exec
    $result = shell_exec("python my_script.py $number");

    echo "<h2>Result from Python: $result</h2>";
}
?>
