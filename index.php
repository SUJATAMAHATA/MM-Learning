
  <?php include 'common/header.php'; ?>
  <style>

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
    .search-bar {
      max-width: 500px;
      margin: auto;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>



<div class="container my-5">
  <h1 class="text-center">Welcome to MM Learning</h1>
  <p class="text-center">Explore our wide range of courses and master new skills.</p>

  <div class="search-bar">
    <input id="searchInput" type="text" class="form-control" placeholder="Search courses..." />
  </div>

  <div class="row g-4" id="courseContainer">
  </div>

  <div class="text-center mt-4">
    <button id="loadMoreBtn" class="btn btn-primary">Load More Courses</button>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const courses = [
    { title: "Web Design & Development", students: 25, duration: "1h 30m", rating: 4.5, price: "$99", image: "v1.jpeg" },
    { title: "React JS for Beginners", students: 40, duration: "3h", rating: 4.8, price: "$109", image: "s5.jpeg" },
    { title: "Full PHP Course", students: 25, duration: "2h 30m", rating: 4.5, price: "$99", image: "p4.jpeg" },
    { title: "Java for Beginners", students: 40, duration: "3h", rating: 4.8, price: "$109", image: "s5.jpeg" },
    { title: "SQL for Beginners", students: 40, duration: "3h", rating: 4.7, price: "$109", image: "s2.jpeg" },
    { title: "JavaScript for Beginners", students: 40, duration: "3h", rating: 4.6, price: "$109", image: "p3.jpeg" },
  ];

  let displayedCourses = 3;

  function renderCourses() {
    const container = document.getElementById("courseContainer");
    container.innerHTML = "";
    courses.slice(0, displayedCourses).forEach(course => {
      container.innerHTML += `
        <div class="col-md-4">
          <div class="course-card">
            <img src="${course.image}" alt="${course.title}" class="img-fluid">
            <div class="mt-3">
              <h5>${course.title}</h5>
              <p>${course.students} Students | ${course.duration}</p>
              <p>⭐ ${course.rating} | ${course.price}</p>
            </div>
          </div>
        </div>
      `;
    });
  }

  document.getElementById("loadMoreBtn").addEventListener("click", () => {
    displayedCourses += 3;
    if (displayedCourses >= courses.length) {
      displayedCourses = courses.length;
      document.getElementById("loadMoreBtn").style.display = "none";
    }
    renderCourses();
  });

  document.getElementById("searchInput").addEventListener("input", (e) => {
    const searchValue = e.target.value.toLowerCase();
    const filteredCourses = courses.filter(course =>
      course.title.toLowerCase().includes(searchValue)
    );
    const container = document.getElementById("courseContainer");
    container.innerHTML = "";
    filteredCourses.forEach(course => {
      container.innerHTML += `
        <div class="col-md-4">
          <div class="course-card">
            <img src="${course.image}" alt="${course.title}" class="img-fluid">
            <div class="mt-3">
              <h5>${course.title}</h5>
              <p>${course.students} Students | ${course.duration}</p>
              <p>⭐ ${course.rating} | ${course.price}</p>
            </div>
          </div>
        </div>
      `;
    });
    if (!filteredCourses.length) {
      container.innerHTML = `<p class='text-center'>No courses found</p>`;
    }
  });

  renderCourses();
</script>
</body>
</html>

<?php include 'common/footer.php'; ?>
