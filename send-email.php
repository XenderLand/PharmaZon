<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $transaction_details = $_POST["transaction_details"];
    
    // Execute the Python script with the transaction details as an argument
    $result = shell_exec("python send_email.py \"$transaction_details\"");
    
    echo "<h2>Result from Python: $result</h2>";
}
?>
