<?php include 'common/header.php'; ?>
<style>
  /* Use Google Fonts */
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

  body {
    font-family: 'Poppins', sans-serif;
    background-color: #f4f6f9;
    color: #333;
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

  .dashboard-header p {
    font-size: 1.2rem;
    color: #6c757d;
  }
  .stats-card {
  background-color: #ffffff;
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  padding: 30px;
  text-align: center;
  transition: transform 0.4s ease, box-shadow 0.4s ease, background-color 0.4s ease;
  overflow: hidden;
  position: relative;
}

.stats-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
  background-color: #f1f5f9;
}

.stats-card .icon {
  font-size: 3rem;
  color: #007bff;
  margin-bottom: 10px;
  animation: bounce 1.2s infinite;
}

.stats-card h4 {
  font-size: 1.4rem;
  font-weight: 700;
  color: #007bff;
  margin: 10px 0;
}

.stats-card p {
  font-size: 2.5rem;
  font-weight: 600;
  color: #28a745;
}

@keyframes bounce {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
}

@media (max-width: 768px) {
  .stats-card {
    margin-bottom: 20px;
  }
  .stats-card .icon {
    font-size: 2.5rem;
  }
  .stats-card h4 {
    font-size: 1.2rem;
  }
  .stats-card p {
    font-size: 2rem;
  }
}

  .nav-card {
    background: #ffffff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .nav-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  }

  .nav-card h5 {
    font-size: 1.4rem;
    font-weight: 600;
    color: #007bff;
  }

  .nav-card p {
    font-size: 1.1rem;
    color: #6c757d;
  }

  .btn-primary {
    background: linear-gradient(45deg, #007bff, #00d2ff);
    border: none;
    padding: 12px 20px;
    font-weight: 600;
    border-radius: 50px;
    font-size: 1rem;
    transition: background-color 0.3s ease, transform 0.3s ease;
  }

  .btn-primary:hover {
    background: linear-gradient(45deg, #00d2ff, #007bff);
    transform: scale(1.05);
  }

  .logout-btn {
    text-align: center;
    margin-top: 40px;
  }

  .btn-danger {
    background-color: #dc3545;
    border-radius: 50px;
    font-weight: 600;
    font-size: 1rem;
    padding: 12px 20px;
    border: none;
    transition: background-color 0.3s ease, transform 0.3s ease;
  }

  .btn-danger:hover {
    background-color: #c82333;
    transform: scale(1.05);
  }

  .row {
    margin-top: 40px;
  }
</style>
</head>
<body>
<div class="container my-5">
  <div class="dashboard-header">
    <h1>Welcome!</h1>
    <p>Here is your dashboard overview.</p>
  </div>

  <div class="row g-4">
  <div class="col-md-3">
    <div class="stats-card">
      <div class="icon">
        🎓
      </div>
      <h4>Courses Enrolled</h4>
      <p>5</p>
    </div>
  </div>
  <div class="col-md-3">
    <div class="stats-card">
      <div class="icon">
        ✅
      </div>
      <h4>Complete Course</h4>
      <p>2</p>
    </div>
  </div>
  <div class="col-md-3">
    <div class="stats-card">
      <div class="icon">
        ⏳
      </div>
      <h4>Pending Courses</h4>
      <p>3</p>
    </div>
  </div>
  <div class="col-md-3">
    <div class="stats-card">
      <div class="icon">
        ⏱️
      </div>
      <h4>Total Hours</h4>
      <p>8.5</p>
    </div>
  </div>
</div>


  <div class="row g-4 mt-4">
    <div class="col-md-4">
      <div class="nav-card">
        <h5>My Courses</h5>
        <p>View and manage your enrolled courses</p>
        <a href="mycourse.php" class="btn btn-primary">Go to My Courses</a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="nav-card">
        <h5>Profile</h5>
        <p>Edit your profile and account settings</p>
        <a href="profile.php" class="btn btn-primary">Edit Profile</a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="nav-card">
        <h5>Support</h5>
        <p>Get help and contact our support team</p>
        <a href="support.php" class="btn btn-primary">Contact Support</a>
      </div>
    </div>
  </div>

  <div class="logout-btn">
    <a href="logout.php" class="btn btn-danger">Logout</a>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php include 'common/footer.php'; ?>
