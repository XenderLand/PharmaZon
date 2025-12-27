<!DOCTYPE html>
<html>
<head>
    <title>Email Notification Example</title>
</head>
<body>
    <h1>Transaction Details</h1>
    <form action="send_email.php" method="post">
        <label for="transaction_details">Transaction Details:</label><br>
        <textarea id="transaction_details" name="transaction_details" rows="4" cols="50"></textarea><br>
        <button type="submit">Send Email Notification</button>
    </form>
</body>
</html>
