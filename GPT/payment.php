<!DOCTYPE html>
<html>
<head>
  <title>Checkout Page</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="container">
    <h1>Checkout</h1>
    <form id="checkout-form" action="process_order.php" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="address">Address:</label>
      <input type="text" id="address" name="address" required>

      <label for="city">City:</label>
      <input type="text" id="city" name="city" required>

      <label for="zip">ZIP Code:</label>
      <input type="text" id="zip" name="zip" required>

      <!-- Add more fields like payment method, credit card info, etc. -->

      <input type="submit" value="Place Order">
    </form>
  </div>
  <script src="scripts.js"></script>
</body>
</html>
