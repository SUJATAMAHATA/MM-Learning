  
<?php include 'common/header.php'; ?>
<?php
$imagePaths = include 'imagePaths.php';
?>
<style>  
.subject-card {
  position: relative;
  border-radius: 12px;
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
}

.subject-card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.subject-card-title {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-size: 1.5rem;
  font-weight: bold;
  text-shadow: 0 2px 5px rgba(0, 0, 0, 0.5); 
  transition: color 0.3s ease;
}

.subject-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.5);
  background-color: rgba(0, 0, 0, 0.3);
}

.subject-card:hover .subject-card-title {
  color: #ffcc00;
}


@media (max-width: 767px) {
  .subject-card-title {
    font-size: 1.2rem;
  }
  
  .subject-card {
    border-radius: 8px;
  }

  .subject-card img {
    height: 180px;
  }
}

    .view-more-button {
      background-color: #ff6600;
      color: white;
      border: none;
      border-radius: 25px;
      padding: 10px 30px;
      font-size: 1rem;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }
    
    .view-more-button:hover {
      background-color: #34eba8;
    }
    
    .hidden-cards {
      display: none;
    }
    .course-card {
      border: 1px solid #e5e5e5;
      border-radius: 8px;
      padding: 15px;
      text-align: center;
      transition: box-shadow 0.3s ease;
    }
    .course-card:hover {
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.7);
    }
  
  .course-card img {
    width: 100%;
    max-height: 250px; 
    object-fit: cover; 
  }

    .course-image {
      border-radius: 8px;
    }
    .students-time {
      display: flex;
      justify-content: center;
      gap: 15px;
      font-size: 0.9rem;
      color: #ff6600;
    }
    .rating-price {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 10px;
      font-weight: bold;
    }
    .feature-card {
      background: #ffffff;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
      padding: 20px;
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .feature-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.5);
    }
    .feature-icon {
      font-size: 40px;
      color: #9dede8;
      margin-bottom: 15px;
    }
    .feature-title {
      font-size: 1.2rem;
      font-weight: bold;
      color: #2d2d2d;
      margin-bottom: 10px;
    }
    .feature-description {
      color: #7a7a7a;
      font-size: 0.9rem;
    }

    .card-1 {
  background-color: #ffebcc;
  border-left: 5px solid #ff9900;
}

.card-2 {
  background-color: #e6f7ff; 
  border-left: 5px solid #007bff;
}

.card-3 {
  background-color: #e8ffe8;
  border-left: 5px solid #28a745;
}


.feature-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.7);
}

.feature-icon {
  font-size: 40px;
  margin-bottom: 15px;
}

.feature-title {
  font-size: 1.2rem;
  font-weight: bold;
  color: #2d2d2d;
  margin-bottom: 10px;
}

.feature-description {
  color: #7a7a7a;
  font-size: 0.9rem;
}
 </style>
</head>
<body>

<div class="container my-5">
  <h1 class="text-center mb-4">Explore Top Subjects</h1>
  <div class="row g-4">
    
    <div class="col-md-3 col-sm-6">
      <div class="subject-card">
      <img src="w1.jpg" alt="Website Design" />
        <div class="subject-card-title">Website Design</div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="subject-card">
        <img src="c1.jpeg" alt="Graphics Design" />
        <div class="subject-card-title">Graphics Design</div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="subject-card">
        <img src="w2.jpeg" alt="Game Design" />
        <div class="subject-card-title">Game Design</div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="subject-card">
        <img src="w3.jpeg" alt="DSA" />
        <div class="subject-card-title">DSA</div>
      </div>
    </div>
      <div class="col-md-3 col-sm-6">
        <div class="subject-card">
          <img src="s2.jpeg" alt="Application Development" />
          <div class="subject-card-title">Application Development</div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="subject-card">
          <img src="p1.jpeg" alt="Cyber Security" />
          <div class="subject-card-title">Cyber Security</div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="subject-card">
          <img src="w4.jpeg" alt="Cloud Computing" />
          <div class="subject-card-title">Cloud Computing</div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="subject-card">
          <img src="p5.jpeg" alt="Open Source" />
          <div class="subject-card-title">Open Source</div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="text-center mt-4">
    <button id="showMoreBtn" class="btn btn-primary view-more-button">Explore More</button>
  </div>
</div>

  </div>
  <div class="container my-5">
    <h2 class="text-center mb-4">Our Popular Courses</h2>
    <div class="row g-4">
     
      <div class="col-md-4">
  <div class="course-card">
    <img
      src="v1.jpeg"
      alt="Course 1"
      class="img-fluid course-image"
    />
    <div class="mt-3">
      <div class="students-time">
        <span>👩‍🎓 50 Students</span>
        <span>⏰ 2h 30m</span>
      </div>
      <h5 class="mt-2">
        <a href="webDesign.php" class="course-link">Web Design & Development for Beginners</a>
      </h5>
      <div class="rating-price">
        <span>⭐ 4.8 (250)</span>
        <span>$199</span>
      </div>
    </div>
  </div>
</div>
 
      <div class="col-md-4">
        <div class="course-card">
          <img
            src="p2.jpeg"
            alt="Course 2"
            class="img-fluid course-image"
          />
          <div class="mt-3">
            <div class="students-time">
              <span>👩‍🎓 75 Students</span>
              <span>⏰ 1h 40m</span>
            </div>
            <h5 class="mt-2">
        <a href="appDesign.php" class="course-link">Application Development for Beginners</a>
      </h5>
            <div class="rating-price">
              <span>⭐ 4.6 (220)</span>
              <span>$99</span>
            </div>
          </div>
        </div>
      </div>
     
      <div class="col-md-4">
        <div class="course-card">
          <img
            src="p3.jpeg"
            alt="Course 3"
            class="img-fluid course-image"
          />
          <div class="mt-3">
            <div class="students-time">
              <span>👩‍🎓 65 Students</span>
              <span>⏰ 1h 40m</span>
            </div>
            <h5 class="mt-2">
        <a href="sql.php" class="course-link"> Structure Quary Language (SQL) for Beginners</a>
      </h5>
            <div class="rating-price">
              <span>⭐ 4.7 (250)</span>
              <span>$99</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="course-card">
          <img
            src="p4.jpeg"
            alt="Course 2"
            class="img-fluid course-image"
          />
          <div class="mt-3">
            <div class="students-time">
              <span>👩‍🎓 25 Students</span>
              <span>⏰ 1h 30m</span>
            </div>
            <h5 class="mt-2">
        <a href="phpCourse.php" class="course-link">Full php course with framworks </a>
      </h5>
            <div class="rating-price">
              <span>⭐ 4.9 (250)</span>
              <span>$99</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="course-card">
          <img
            src="s5.jpeg"
            alt="Course 2"
            class="img-fluid course-image"
          />
          <div class="mt-3">
            <div class="students-time">
              <span>👩‍🎓 25 Students</span>
              <span>⏰ 1h 30m</span>
            </div>
            <h5 class="mt-2">
        <a href="react.php" class="course-link">React full course from Zero to Hero</a>
      </h5>
            <div class="rating-price">
              <span>⭐ 4.5 (250)</span>
              <span>$99</span>
            </div>
          </div>
        </div>
      </div>
       <div class="col-md-4">
        <div class="course-card">
          <img
            src="p6.jpeg"
            alt="Course 2"
            class="img-fluid course-image"
          />
          <div class="mt-3">
            <div class="students-time">
              <span>👩‍🎓 25 Students</span>
              <span>⏰ 1h 30m</span>
            </div>
            <h5 class="mt-2">
        <a href="frontendBackend.php" class="course-link">Full frontend and backend Course</a>
      </h5>
            <div class="rating-price">
              <span>⭐ 4.5 (250)</span>
              <span>$99</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container my-5">
  <div class="row g-4">  
    <div class="col-md-4">
      <div class="feature-card card-1">
        <div class="feature-icon">📚</div>
        <div class="feature-title">60+ UX courses</div>
        <div class="feature-description">The automated process all your website tasks.</div>
      </div>
    </div> 
    <div class="col-md-4">
      <div class="feature-card card-2">
        <div class="feature-icon">👩‍🏫</div>
        <div class="feature-title">Expert instructors</div>
        <div class="feature-description">The automated process all your website tasks.</div>
      </div>
    </div>
    
    <div class="col-md-4">
      <div class="feature-card card-3">
        <div class="feature-icon">⏰</div>
        <div class="feature-title">Lifetime access</div>
        <div class="feature-description">The automated process all your website tasks.</div>
      </div>
    </div>
  </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

<?php include 'common/footer.php'; ?>
</html>
