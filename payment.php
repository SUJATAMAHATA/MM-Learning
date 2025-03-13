<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
    }

    .payment-container {
      max-width: 600px;
      margin: 50px auto;
      background: #ffffff;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      padding: 30px;
    }

    .payment-header {
      text-align: center;
      margin-bottom: 20px;
    }

    .payment-header h2 {
      font-size: 1.8rem;
      color: #007bff;
    }

    .payment-header p {
      font-size: 1rem;
      color: #666;
    }

    .course-details {
      background: #f1f5f9;
      padding: 15px;
      border-radius: 8px;
      margin-bottom: 20px;
    }

    .course-details h4 {
      margin: 0;
      font-size: 1.2rem;
      color: #333;
    }

    .course-details p {
      margin: 5px 0 0;
      font-size: 0.9rem;
      color: #666;
    }

    .payment-form label {
      display: block;
      font-size: 1rem;
      color: #333;
      margin-bottom: 5px;
    }

    .payment-form input, .payment-form select {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 1rem;
    }

    .payment-form button {
      width: 100%;
      padding: 12px;
      font-size: 1rem;
      font-weight: bold;
      color: #fff;
      background: #007bff;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .payment-form button:hover {
      background: #0056b3;
    }

    .back-link {
      display: block;
      text-align: center;
      margin-top: 20px;
      font-size: 0.9rem;
      color: #007bff;
      text-decoration: none;
    }

    .back-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="payment-container">
    <div class="payment-header">
      <h2>Payment Page</h2>
      <p>Complete your payment to start learning</p>
    </div>

    <div class="course-details">
      <h4>Course: Web Development Bootcamp</h4>
      <p>Price: ₹4999</p>
    </div>

    <form class="payment-form">
      <label for="card-number">Card Number</label>
      <input type="text" id="card-number" placeholder="Enter your card number" required>

      <label for="expiry">Expiry Date</label>
      <input type="text" id="expiry" placeholder="MM/YY" required>

      <label for="cvv">CVV</label>
      <input type="password" id="cvv" placeholder="Enter CVV" required>

      <label for="payment-method">Payment Method</label>
      <select id="payment-method" required>
        <option value="credit-card">Credit/Debit Card</option>
        <option value="upi">UPI</option>
        <option value="net-banking">Net Banking</option>
        <option value="wallet">Wallet</option>
      </select>

      <button type="submit">Pay ₹4999</button>
    </form>
    <a href="javascript:history.back()" class="back-link">Back</a>
  </div>
</body>
</html>
