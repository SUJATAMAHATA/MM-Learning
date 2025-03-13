<?php include 'common/header.php'; ?>
<style>
  body {
    font-family: 'Poppins', sans-serif;
    background-color: #f9f9f9;
  }

  .container {
    max-width: 900px;
    margin-top: 50px;
  }

  .dashboard-header {
    text-align: center;
    margin-bottom: 40px;
    color: #007bff;
  }

  .dashboard-header h1 {
    font-size: 2.5rem;
    font-weight: 600;
  }

  .form-label {
    font-weight: 600;
  }

  .form-control {
    border-radius: 12px;
    border: 1px solid #ccc;
    padding: 10px;
  }

  .form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25);
  }

  .profile-image {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #007bff;
    margin-bottom: 20px;
  }

  .btn-save {
    background-color: #007bff;
    color: white;
    padding: 12px 30px;
    border: none;
    border-radius: 50px;
    font-weight: 600;
    font-size: 1rem;
    text-transform: uppercase;
    transition: transform 0.3s ease;
  }

  .btn-save:hover {
    transform: scale(1.05);
  }

  .form-group {
    margin-bottom: 20px;
  }

  .alert {
    padding: 10px;
    border-radius: 5px;
    margin-top: 20px;
    font-size: 1rem;
  }

  .alert-success {
    background-color: #d4edda;
    color: #155724;
  }

  .alert-danger {
    background-color: #f8d7da;
    color: #721c24;
  }

  .back-btn {
    margin-top: 40px;
    text-align: center;
  }

  @media (max-width: 768px) {
    .dashboard-header h1 {
      font-size: 2rem;
    }
  }
</style>
</head>
<body>
<div class="container">
  <div class="dashboard-header">
    <h1>Edit Profile</h1>
    <p>Update your personal information and profile picture.</p>
  </div>

  <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
    <div class="alert alert-success">
      Profile updated successfully!
    </div>
  <?php elseif (isset($_GET['status']) && $_GET['status'] == 'error'): ?>
    <div class="alert alert-danger">
      Error updating profile. Please try again.
    </div>
  <?php endif; ?>

  <form action="update-profile.php" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-4 text-center">
        <img src="path/to/profile.jpg" alt="Profile Picture" class="profile-image" id="profile-image">
        <input type="file" name="profile_picture" class="form-control" onchange="previewImage(event)" />
      </div>
      <div class="col-md-8">
        <div class="form-group">
          <label for="name" class="form-label">Full Name</label>
          <input type="text" id="name" name="name" class="form-control" placeholder="Your full name" required>
        </div>
        
        <div class="form-group">
          <label for="email" class="form-label">Email Address</label>
          <input type="email" id="email" name="email" class="form-control" placeholder="Your email" required>
        </div>

        <div class="form-group">
          <label for="password" class="form-label">New Password (Leave blank if you don't want to change)</label>
          <input type="password" id="password" name="password" class="form-control" placeholder="New password (min. 6 characters)">
        </div>

        <div class="form-group">
          <label for="confirm-password" class="form-label">Confirm New Password</label>
          <input type="password" id="confirm-password" name="confirm_password" class="form-control" placeholder="Confirm new password">
        </div>

        <div class="form-group">
          <button type="submit" class="btn-save">Save Changes</button>
        </div>
      </div>
    </div>
  </form>

  <div class="back-btn">
    <a href="dashboard.php" class="btn btn-secondary btn-action">Back to Dashboard</a>
  </div>
</div>

<script>
  function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function () {
      const output = document.getElementById('profile-image');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</br>
</br>

<?php include 'common/footer.php'; ?>
