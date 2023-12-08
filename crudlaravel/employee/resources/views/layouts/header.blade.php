<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Responsive Navbar</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

</head>
<style>
        body {
      margin-bottom: 60px; /* Adjust this value to match the height of your footer */
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #555;
    }

    .footer {
      background-color: #f8f9fa;
      padding: 30px 0;
      text-align: center;
      border-top: 1px solid #ddd;
    }

    .footer a {
      color: #007bff;
    }

    .footer a:hover {
      text-decoration: none;
    }

    .social-icons {
      font-size: 24px;
      margin-top: 20px;
    }

    .social-icons a {
      color: #007bff;
      margin: 0 15px;
      transition: color 0.3s;
    }

    .social-icons a:hover {
      color: #0056b3;
    }

    .contact-info {
      margin-top: 20px;
    }

    .footer-section {
      margin-bottom: 30px;
    }

    .footer-section h4 {
      color: #007bff;
      margin-bottom: 20px;
    }

    .footer-section p {
      font-size: 16px;
      margin-bottom: 10px;
    }

    hr {
      border-top: 1px solid #ddd;
    }

    .footer-section .section-content {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .footer-section .section-content a {
      color: #007bff;
    }

    .footer-section .section-content a:hover {
      text-decoration: underline;
    }

    .copyright {
      color: #777;
      font-size: 14px;
      margin-top: 15px;
    }
</style>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Your Logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Bootstrap JS and dependencies (Popper.js) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
