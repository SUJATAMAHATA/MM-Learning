<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Career</title>
    
<?php include 'common/header.php'; ?>
  <style>
    body {
      font-family: 'Poppins', Arial, sans-serif;
      color: #333;
      background-color: #f9f9f9;
    }

    .hero {
      background: linear-gradient(
          rgba(0, 0, 0, 0.7),
          rgba(0, 0, 0, 0.5)
        ),
        url("career.jpeg");
      background-size: cover;
      background-position: center;
      height: 70vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: center;
    }

    .hero h1 {
      font-size: 3rem;
      margin-bottom: 20px;
      animation: fadeInDown 1s;
    }

    .hero p {
      font-size: 1.2rem;
      margin-bottom: 30px;
      animation: fadeInUp 1.5s;
    }

    .hero button {
      padding: 15px 30px;
      font-size: 1.1rem;
      border: none;
      border-radius: 5px;
      background-color: #007bff;
      color: white;
      cursor: pointer;
      transition: all 0.3s ease;
      animation: fadeIn 2s;
    }

    .hero button:hover {
      background-color: #0056b3;
    }

    @keyframes fadeInDown {
      from {
        transform: translateY(-50px);
        opacity: 0;
      }
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    @keyframes fadeInUp {
      from {
        transform: translateY(50px);
        opacity: 0;
      }
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    .job-section {
      padding: 60px 20px;
    }

    .job-card {
      background: white;
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      position: relative;
      overflow: hidden;
      cursor: pointer;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .job-card:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }

    .job-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background: linear-gradient(90deg, #007bff, #0056b3);
      transform: scaleX(0);
      transform-origin: left;
      transition: transform 0.3s ease;
    }

    .job-card:hover::before {
      transform: scaleX(1);
    }

    .job-card h3 {
      color: #007bff;
      font-size: 1.5rem;
      margin-bottom: 15px;
    }

    .job-card p {
      font-size: 1rem;
      margin-bottom: 15px;
    }

    .job-card button {
      border: none;
      background-color: #007bff;
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .job-card button:hover {
      background-color: #e020f5;
    }

    .contact-section {
  position: relative;
  background: linear-gradient(35deg);
  color: #fff;
  padding: 50px 0;
  overflow: hidden;
}

.contact-section:before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url('contact.jpeg');
  background-size: cover;
  background-position: center;
  opacity: 0.6;
  z-index: 0;
}

.contact-section h2,
.contact-section p {
  position: relative;
  z-index: 1;
}

.contact-section form {
  position: relative;
  z-index: 1;
  background: rgba(255, 255, 255, 0.1);
  padding: 30px;
  border-radius: 10px;
  backdrop-filter: blur(10px);
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.contact-section .form-control {
  border-radius: 8px;
  padding: 15px;
  font-size: 1rem;
  border: 1px solid rgba(255, 255, 255, 0.5);
  background: rgba(255, 255, 255, 0.2);
  color: #fff;
}

.contact-section .form-control::placeholder {
  color: #e0e0e0;
}

.contact-section .form-control:focus {
  border-color: #fff;
  background: rgba(255, 255, 255, 0.3);
  box-shadow: 0 0 5px rgba(15, 10, 10, 0.5);
}

.contact-section .btn-primary {
  background-color: #fff;
  color: #007bff;
  border: none;
  padding: 15px;
  font-size: 1.2rem;
  border-radius: 8px;
  transition: all 0.3s ease;
}

.contact-section .btn-primary:hover {
  background-color: #e0e0e0;
  color: #0056b3;
  box-shadow: 0 4px 10px rgba(255, 255, 255, 0.5);
}

 .contact-section .form-control::placeholder {
      color: #444; 
    }

  </style>
</head>
<body>
  <div class="hero">
    <div>
      <h1>Join Our Team</h1>
      <p>Explore exciting career opportunities with us.</p>
      <button onclick="scrollToJobs()">Explore Jobs</button>
    </div>
  </div>

  <div class="job-section container" id="jobs">
    <h2 class="text-center mb-5">Current Openings</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="job-card" onclick="openModal('Frontend Developer', 'Work with React, HTML, CSS to build user interfaces.')">
          <h3>Frontend Developer</h3>
          <p>Work with React, HTML, CSS to build user interfaces.</p>
          <button>Apply Now</button>
        </div>
      </div>
      <div class="col-md-4">
        <div class="job-card" onclick="openModal('Backend Developer', 'Build server-side applications using Node.js.')">
          <h3>Backend Developer</h3>
          <p>Build server-side applications using Node.js.</p>
          <button>Apply Now</button>
        </div>
      </div>
      <div class="col-md-4">
        <div class="job-card" onclick="openModal('Marketing Specialist', 'Develop marketing strategies and campaigns.')">
          <h3>Marketing Specialist</h3>
          <p>Develop marketing strategies and campaigns.</p>
          <button>Apply Now</button>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-section py-5">
  <div class="container text-dark">
    <h2 class="text-center mb-4">Get in Touch</h2>
    <p class="text-center mb-5">
      We'd love to hear from you! Fill out the form below, and our team will get back to you promptly.
    </p>
    <div class="row justify-content-center text-dark">
      <div class="col-md-8 col-lg-6">
        <form>
          <div class="mb-3">
            <input
              type="text"
              class="form-control"
              placeholder="Your Name"
              required
            />
          </div>
          <div class="mb-3">
            <input
              type="email"
              class="form-control"
              placeholder="Your Email"
              required
            />
          </div>
          <div class="mb-3">
            <textarea
              class="form-control"
              rows="5"
              placeholder="Your Message"
              required
            ></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Send Message</button>
        </form>
      </div>
    </div>
  </div>
</div>

  <div id="jobModal" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="jobTitle"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body" id="jobDescription"></div>
        <div class="modal-footer">
          <button class="btn btn-primary">Apply Now</button>
          <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    function scrollToJobs() {
      document.getElementById('jobs').scrollIntoView({ behavior: 'smooth' });
    }

    function openModal(title, description) {
      document.getElementById('jobTitle').textContent = title;
      document.getElementById('jobDescription').textContent = description;
      new bootstrap.Modal(document.getElementById('jobModal')).show();
    }
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php include 'common/footer.php'; ?>
