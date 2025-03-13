<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>React Full Course from Zero to Hero</title>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"
  />

  <?php include 'common/header.php'; ?>
 
  <link rel="styleSheet" href="courseStyle.css">
</head>
<body>
  <div class="hero">
    <div>
      <h1>Learn React From Zero to Hero</h1>
      <p>
        Master React, the most popular front-end library for building modern web
        applications. Enroll now and start your journey!
      </p>
      <button onclick="window.location.href='login.html'">Enroll Now</button>

    </div>
  </div>

  <div class="course-details">
    <div class="row">
      <div class="col-md-6">
  <img
    src="s5.jpeg"
    alt="React Course Image"
    style="height: 400px; width: 400px; border-radius: 10px; box-shadow: 0 4px 25px rgba(0, 0, 0, 0.2);" 
  />
</div>

      <div class="col-md-6">
        <h2>Course Details</h2>
        <p>
          This course is designed to take you from a beginner to a React expert.
          Learn the basics, dive into hooks, state management, and best practices
          for building scalable applications.
        </p>
        <ul>
          <li>👩‍🎓 25 Students Enrolled</li>
          <li>⏰ Duration: 1 hour 30 minutes</li>
          <li>⭐ Rating: 4.5 (250 reviews)</li>
          <li>💵 Price: $99</li>
        </ul>
        <button onclick="window.location.href='payment.php'">Get Started</button> 
      </div>
    </div>
  </div>
</body>
</html>
