<?php include 'common/header.php'; ?>

  <style>
    .hero-section {
      background: url('hero1.jpeg') no-repeat center center/cover;
      color: white;
      text-align: center;
      padding: 80px 20px;
    }
    .hero-title {
      font-size: 2.5rem;
      font-weight: bold;
      text-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
      margin-top: 170px;
    }
    .hero-subtitle {
      font-size: 1.2rem;
      margin-top: 10px;
      text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
    }
    .section-title {
      font-size: 2rem;
      font-weight: bold;
      color: #3423cf;
      margin-bottom: 20px;
      text-align: center;
    }
    .feature-icon {
      font-size: 40px;
      color: #ff6600;
    }
    .feature-card {
      text-align: center;
      padding: 20px;
      border: 1px solid #e5e5e5;
      border-radius: 8px;
      transition: box-shadow 0.3s ease;
    }
    .feature-card:hover {
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.7);
    }
    .team-card {
      text-align: center;
      padding: 20px;
    }
    .team-card img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
    }

    .feature-card:hover .feature-icon {
    transform: scale(1.2);
  }
  .feature-card:hover .overlay {
    opacity: 1;
  }
  </style>
</head>
<body>


<div class="hero-section">
  <h1 class="hero-title">Welcome to MM Learning</h1>
  <p class="hero-subtitle">Empowering minds, transforming careers.</p>
</div>

<div class="container my-5">
  <h2 class="section-title">Our Mission</h2>
  <p class="text-center">
    At MM Learning, our mission is to provide top-notch education to individuals around the globe,
    equipping them with skills that are essential for success in today's fast-paced world.
  </p>
</div>


<div class="container my-5">
  <h2 class="section-title">Why Choose Us?</h2>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="feature-card shadow-sm p-4">
        <div class="feature-icon mb-3" style="font-size: 50px; color: #4CAF50;">📚</div>
        <h4 class="mb-3" style="color: #3423cf;">Comprehensive Courses</h4>
        <p class="text-muted">We offer a wide variety of courses designed to meet your learning goals.</p>
        <a href="#" class="btn btn-outline-primary btn-sm mt-3">Learn More</a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="feature-card shadow-sm p-4">
        <div class="feature-icon mb-3" style="font-size: 50px; color: #FF9800;">👩‍🏫</div>
        <h4 class="mb-3" style="color: #3423cf;">Expert Instructors</h4>
        <p class="text-muted">Learn from industry professionals with years of experience.</p>
        <a href="#" class="btn btn-outline-primary btn-sm mt-3">Meet Our Team</a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="feature-card shadow-sm p-4">
        <div class="feature-icon mb-3" style="font-size: 50px; color: #00BCD4;">⏰</div>
        <h4 class="mb-3" style="color: #3423cf;">Flexible Learning</h4>
        <p class="text-muted">Access our courses anytime, anywhere, and at your own pace.</p>
        <a href="#" class="btn btn-outline-primary btn-sm mt-3">Start Learning</a>
      </div>
    </div>
  </div>
</div>


<div class="container my-5">
  <h2 class="section-title">Meet Our Team</h2>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="team-card">
        <img src="milandaa.png" alt="Team Member 1">
        <h5>Milan Mahata</h5>
        <p>Founder & CEO</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="team-card">
        <img src="lead.jpeg" alt="Team Member 2">
        <h5>Tuhin Mahata</h5>
        <p>Lead Instructor</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="team-card">
        <img src="mentor.jpeg" alt="Team Member 3">
        <h5>Jayanta Badhya</h5>
        <p>Mentor</p>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

<?php include 'common/footer.php'; ?>
</html>
