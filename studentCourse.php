<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Courses</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f9fa;
      color: #333;
    }

    header {
      background-color: #3423cf;
      color: white;
      padding: 20px 0;
      text-align: center;
    }
    header h1 {
      font-size: 2rem;
      margin: 0;
    }
    header p {
      font-size: 1rem;
      margin: 5px 0;
    }

     .stats-container {
      display: flex;
      justify-content: center;
      gap: 20px;
      max-width: 1200px;
      margin: 20px auto;
      flex-wrap: wrap;
    }
    .stat-card {
      flex: 1 1 calc(25% - 20px);
      max-width: calc(25% - 20px);
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
      border: 1px solid #e0e0e0;
    }
    .stat-card h3 {
      font-size: 1rem;
      color: #007bff;
      margin: 0;
    }

    .stat-card p {
      font-size: 1.5rem;
      color: #28a745;
      margin: 5px 0 0;
    }

    .courses-container {
      display: flex;
      justify-content: center;
      gap: 20px;
      max-width: 1200px;
      margin: 20px auto;
      flex-wrap: wrap;
    }

    .course-card {
      background: white;
      border: 1px solid #e0e0e0;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      flex: 1 1 calc(33.333% - 20px);
      max-width: calc(33.333% - 20px);
      transition: transform 0.3s, box-shadow 0.3s;
      padding: 20px;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .course-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }

    .course-card h3 {
      font-size: 1.2rem;
      color: #3423cf;
      margin: 10px 0;
    }

    .course-card p {
      font-size: 0.9rem;
      color: #666;
      margin-bottom: 20px;
    }

    .course-card button {
      padding: 10px 20px;
      background: #3423cf;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 0.9rem;
      transition: background 0.3s;
    }

    .course-card button:hover {
      background: #241a9b;
    }

    .course-hover {
      position: absolute;
      top: 100%;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.8);
      color: white;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      transition: top 0.3s;
    }

    .course-card:hover .course-hover {
      top: 0;
    }

    .course-hover button {
      background: #ff6600;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      margin-top: 10px;
      cursor: pointer;
    }

    @media (max-width: 768px) {
      .course-card {
        flex: 1 1 calc(50% - 20px);
        max-width: calc(50% - 20px);
      }
    }

    @media (max-width: 576px) {
      .course-card {
        flex: 1 1 100%;
        max-width: 100%;
      }
    }

    .modal {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 90%;
      max-width: 600px;
      background: white;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      display: none;
      z-index: 1000;
    }

    .modal-header {
      font-size: 1.5rem;
      margin-bottom: 10px;
      color: #3423cf;
    }

    .modal-content {
      font-size: 1rem;
      color: #666;
      margin-bottom: 20px;
    }

    .modal-close {
      background: #ff6600;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .modal-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      display: none;
      z-index: 999;
    }
    .back-btn a {
    display: center;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    font-size: 16px;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
  }

  .back-btn a:hover {
    background-color: #0056b3;
  }

  .back-btn {
    margin-top: 20px;
  }
  </style>
</head>
<body>
  <header>
    <h1>My Courses</h1>
    <p>View and manage your enrolled courses</p>
  </header>
  <div class="stats-container">
    <div class="stat-card">
      <h3>Courses Enrolled</h3>
      <p>5</p>
    </div>
    <div class="stat-card">
      <h3>Completed Courses</h3>
      <p>2</p>
    </div>
    <div class="stat-card">
      <h3>Pending Courses</h3>
      <p>3</p>
    </div>
    <div class="stat-card">
      <h3>Total Hours</h3>
      <p>8.5</p>
    </div>
  </div>
  <div class="courses-container">
    <div class="course-card">
      <h3>Web Development Bootcamp</h3>
      <p>Master HTML, CSS, JavaScript & build projects.</p>
      <div class="course-hover">
        <p>Open and explore the Web Development Bootcamp!</p>
        <button onclick="openModal('Web Development Bootcamp')">Explore</button>
      </div>
    </div>

    <div class="course-card">
      <h3>Data Science with Python</h3>
      <p>Learn Python, data analysis & visualization.</p>
      <div class="course-hover">
        <p>Open and explore Data Science with Python!</p>
        <button onclick="openModal('Data Science with Python')">Explore</button>
      </div>
    </div>

    <div class="course-card">
      <h3>React for Beginners</h3>
      <p>Build responsive web apps with React.</p>
      <div class="course-hover">
        <p>Open and explore React for Beginners!</p>
        <button onclick="openModal('React for Beginners')">Explore</button>
      </div>
    </div>
  </div>
  <div class="back-btn">
    <a href="dashboard.php">Back to Dashboard</a>
  </div>

  <div class="modal-overlay" onclick="closeModal()"></div>
  <div class="modal" id="courseModal">
    <h2 class="modal-header" id="modalTitle"></h2>
    <p class="modal-content">This course provides in-depth knowledge and practical experience in the chosen field. Start learning now!</p>
    <button class="modal-close" onclick="closeModal()">Close</button>
  </div>

  <script>
    function openModal(courseName) {
      document.getElementById('modalTitle').innerText = courseName;
      document.getElementById('courseModal').style.display = 'block';
      document.querySelector('.modal-overlay').style.display = 'block';
    }

    function closeModal() {
      document.getElementById('courseModal').style.display = 'none';
      document.querySelector('.modal-overlay').style.display = 'none';
    }
  </script>
</body>
</html>
