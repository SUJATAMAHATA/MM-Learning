<style>
  *, *::before, *::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: 'Poppins', sans-serif;
    background-color: #f9f9f9;
    line-height: 1.6;
  }

  header {
    background-color: #007bff;
    color: white;
    padding: 20px 40px;
    text-align: center;
    height: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  header h1 {
    font-size: 2rem;
    font-weight: 600;
  }

  .container {
    max-width: 900px;
    margin: 40px auto;
    background-color: #ffffff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  }

  .dashboard-header {
    text-align: center;
    margin-bottom: 30px;
  }

  .dashboard-header h1 {
    font-size: 2.5rem;
    color: #007bff;
  }

  .dashboard-header p {
    font-size: 1.1rem;
    color: #555;
  }

  .form-group {
    margin-bottom: 15px;
  }

  .form-label {
    font-weight: 600;
    font-size: 1.1rem;
    color: #333;
  }

  .form-control {
    width: 100%;
    padding: 10px;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-size: 1rem;
  }

  .form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25);
  }

  .btn-submit {
    background-color: #007bff;
    color: white;
    padding: 12px 30px;
    border: none;
    border-radius: 50px;
    font-weight: 600;
    font-size: 1rem;
    cursor: pointer;
    transition: transform 0.3s ease;
  }

  .btn-submit:hover {
    transform: scale(1.05);
  }

  .alert {
    padding: 15px;
    border-radius: 8px;
    margin-top: 20px;
    font-size: 1.1rem;
  }

  .alert-success {
    background-color: #d4edda;
    color: #155724;
  }

  .alert-danger {
    background-color: #f8d7da;
    color: #721c24;
  }

  .contact-info {
    text-align: center;
    margin-top: 40px;
    font-size: 1.1rem;
    color: #555;
  }

  .contact-info p {
    font-size: 1.2rem;
  }

  .back-btn {
    margin-top: 40px;
    text-align: center;
  }

  .back-btn a {
    font-size: 1.1rem;
    color: #007bff;
    text-decoration: none;
    font-weight: 600;
  }

  .back-btn a:hover {
    text-decoration: underline;
  }

  @media (max-width: 768px) {
    header h1 {
      font-size: 1.8rem;
    }

    .container {
      padding: 20px;
    }

    .form-control {
      font-size: 0.95rem;
    }

    .btn-submit {
      padding: 10px 25px;
    }
  }
</style>
</head>
<body>
  <header>
    <h1>Contact Support</h1>
  </header>

  <div class="container">
    <div class="dashboard-header">
      <h1>Need Assistance?</h1>
      <p>If you have any questions or need help with your account, please reach out to us!</p>
    </div>

    <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
      <div class="alert alert-success">
        Your message has been sent successfully! We will get back to you shortly.
      </div>
    <?php elseif (isset($_GET['status']) && $_GET['status'] == 'error'): ?>
      <div class="alert alert-danger">
        Something went wrong while sending your message. Please try again.
      </div>
    <?php endif; ?>

    <form action="process-support.php" method="POST">
      <div class="form-group">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Your full name" required>
      </div>

      <div class="form-group">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Your email" required>
      </div>

      <div class="form-group">
        <label for="subject" class="form-label">Subject</label>
        <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject of your inquiry" required>
      </div>

      <div class="form-group">
        <label for="message" class="form-label">Message</label>
        <textarea id="message" name="message" class="form-control" rows="6" placeholder="Describe your issue or inquiry" required></textarea>
      </div>

      <div class="form-group">
        <button type="submit" class="btn-submit">Send Message</button>
      </div>
    </form>

    <div class="contact-info">
      <p>Alternatively, you can reach us at:</p>
      <p><strong>Email:</strong> support@yourwebsite.com</p>
      <p><strong>Phone:</strong> +1 234 567 890</p>
    </div>

    <div class="back-btn">
      <a href="dashboard.php" class="btn btn-secondary">Back to Dashboard</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php include 'common/footer.php'; ?>
