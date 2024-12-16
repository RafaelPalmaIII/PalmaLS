<!DOCTYPE html>
<html>
<head>
  <title>ABC Library Management System</title>
  <style>
    /* CSS styles */
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login-form {
      background-color: #673ab7;
      color: #fff;
      padding: 20px;
      border-radius: 5px;
    }

    .login-form label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .login-form input {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 10px;
    }

    .login-form button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }

    .login-form .forgot-password {
      text-align: right;
      margin-top: 10px;
    }

    .container .login-form {
      margin-top: 50px;
      margin-bottom: 50px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="login-form">
      <h1>Welcome to ABC Library Management System</h1>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="email">Email or Username:</label>
        <input type="text" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <div class="form-group">
        </div>
        <div class="form-group">
        </div>
        <button type="submit" class="login-btn">Login</button>
      </form>
    </div>
  </div>

  <?php
    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Retrieve the form data
      $email = $_POST["email"];
      $password = $_POST["password"];

      // Perform login validation and authentication
      // (This is a simplified example, in a real application you would use a database and secure authentication)
      if ($email == "admin@example.com" && $password == "password") {
        // Successful login
        echo "Login successful!";
      } else {
        // Login failed
        echo "Invalid email or password. Please try again.";
      }
    }
  ?>
</body>
</html>

