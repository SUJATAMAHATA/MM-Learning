<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Web Design & Development for Beginners</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" />

  <?php include 'common/header.php'; ?>

  <link rel="styleSheet" href="courseStyle.css">
</head>
<body>

  <div class="hero">
    <div>
      <h1>Learn Web Design & Development</h1>
      <p>
        Master the fundamentals of web design and development. Start your journey to create amazing websites today!
      </p>
      <button onclick="window.location.href='login.html'">Enroll Now</button>
    </div>
  </div>

  <div class="course-details">
    <div class="row">

      <div class="col-md-6">
        <img
          src="v1.jpeg"
          alt="Web Design Course Image"
          style="height: 400px; width: 400px; border-radius: 10px; box-shadow: 0 4px 25px rgba(0, 0, 0, 0.2);"
        />
      </div>


      <div class="col-md-6">
        <h2>Course Details</h2>
        <p>
          Learn the basics of web design and development. This course is
          designed for absolute beginners looking to create their first
          website or gain foundational skills in HTML, CSS, and JavaScript.
        </p>
        <ul>
          <li>👩‍🎓 50 Students Enrolled</li>
          <li>⏰ Duration: 2 hour 30 minutes</li>
          <li>⭐ Rating: 4.8 (250 reviews)</li>
          <li>💵 Price: $199</li>
        </ul>   
        <button onclick="window.location.href='payment.php'">Get Started</button> 
      </div>
    </div>
  </div>
</body>
</html>
