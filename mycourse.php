
  <title>Go to My Courses</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .courses-section {
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      padding: 40px;
      text-align: center;
      max-width: 400px;
      width: 90%;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .courses-section:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    }

    .courses-section h1 {
      font-size: 24px;
      color: #3423cf;
      margin-bottom: 10px;
    }

    .courses-section p {
      font-size: 16px;
      color: #666;
      margin-bottom: 20px;
    }

    .courses-btn {
      display: inline-block;
      background-color: #3423cf;
      color: #fff;
      text-decoration: none;
      padding: 12px 25px;
      font-size: 16px;
      font-weight: bold;
      border-radius: 25px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
    }

    .courses-btn:hover {
      background-color: #483fdf;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
      transform: scale(1.05);
    }

    .courses-icon {
      font-size: 50px;
      color: #ff6600;
      margin-bottom: 20px;
      transition: transform 0.3s ease;
    }

    .courses-section:hover .courses-icon {
      transform: rotate(20deg);
    }

    @media (max-width: 480px) {
      .courses-section {
        padding: 20px;
      }
      .courses-btn {
        padding: 10px 20px;
        font-size: 14px;
      }
    }
  </style>
<body>

<div class="courses-section">
  <div class="courses-icon">📚</div>
  <h1>My Courses</h1>
  <p>View and manage your enrolled courses</p>
  <a href="studentCourse.php" class="courses-btn">Go to My Courses</a>
</div>

</body>
</html>
