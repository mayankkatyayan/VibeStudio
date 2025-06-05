<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <form name="contact" method="POST" data-netlify="true" action="/thankyou.html">
  <title>Contact Us</title>
  <style>
    body {
      background-color: #111;
      font-family: sans-serif;
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .form-container {
      background: #1e1e1e;
      padding: 2rem;
      border-radius: 12px;
      max-width: 400px;
      width: 100%;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    }
    h2 {
      margin-bottom: 1rem;
    }
    input, select, textarea {
      width: 100%;
      margin-bottom: 1rem;
      padding: 0.75rem;
      background: #000;
      color: #fff;
      border: none;
      border-radius: 6px;
    }
    button {
      width: 100%;
      padding: 1rem;
      background: linear-gradient(90deg, #a0ff00, #599c0a);
      border: none;
      border-radius: 6px;
      font-weight: bold;
      cursor: pointer;
      color: #000;
    }
    .success, .error {
      margin-top: 1rem;
      font-size: 0.9rem;
    }
    .success { color: #b2ff59; }
    .error { color: #ff5252; }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Contact Us</h2>
    <?php
    if (isset($_GET['status'])) {
      if ($_GET['status'] == 'success') {
        echo '<p class="success">Message sent successfully!</p>';
      } else {
        echo '<p class="error">Failed to send message. Try again.</p>';
      }
    }
    ?>
  <form name="contact" method="POST" data-netlify="true">
  <input type="hidden" name="form-name" value="contact" />
  <input type="text" name="name" placeholder="Full Name" required />
  <input type="email" name="email" placeholder="Email" required />
  <select name="projectType" required>
    <option value="">Select Project Type</option>
    <option>Website Design</option>
    <option>App Development</option>
    <option>Branding</option>
  </select>
  <textarea name="message" placeholder="Message" rows="4" required></textarea>
  <button type="submit">Get Started</button>
</form>

  </div>
</body>
</html>
