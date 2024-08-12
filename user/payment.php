
<title>BSELLER.COM | Payment</title>

<form action="process_transfer.php" method="post">
    <label for="amount">Amount:</label>
    <input type="text" name="amount" id="amount" required>
    <label for="account_number">Account Number:</label>
    <input type="text" name="account_number" id="account_number" required>
    <label for="routing_number">Routing Number:</label>
    <input type="text" name="routing_number" id="routing_number" required>
    <button type="submit">Submit Payment</button>
</form>
