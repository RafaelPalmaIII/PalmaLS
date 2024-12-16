<!DOCTYPE html>
<html>
<head>
  <title>Library Management System</title>
  <style>
    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 5px;
    }
    .form-group {
      margin-bottom: 15px;
    }
    label {
      display: block;
      font-weight: bold;
    }
    input[type=text] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    .form-actions {
      display: flex;
      justify-content: space-between;
    }
    .submit-btn, .reset-btn {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .reset-btn {
      background-color: #f44336;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1> Library Management System</h1>
    <?php
      // Check if the form was submitted
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve the form data
        $isbn = $_POST['isbn'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $edition = $_POST['edition'];
        $publication = $_POST['publication'];

        // Do something with the form data (e.g., store it in a database)
        echo "Form submitted successfully!";
      }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div class="form-group">
        <label for="isbn">Enter ISBN:</label>
        <input type="text" id="isbn" name="isbn" required>
      </div>
      <div class="form-group">
        <label for="title">Enter Title:</label>
        <input type="text" id="title" name="title" required>
      </div>
      <div class="form-group">
        <label for="author">Enter Author:</label>
        <input type="text" id="author" name="author" required>
      </div>
      <div class="form-group">
        <label for="edition">Enter Edition:</label>
        <input type="text" id="edition" name="edition" required>
      </div>
      <div class="form-group">
        <label for="publication">Enter Publication:</label>
        <input type="text" id="publication" name="publication" required>
      </div>
      <div class="form-actions">
        <button type="submit" class="submit-btn">Submit</button>
        <button type="reset" class="reset-btn">Reset</button>
      </div>
    </form>
  </div>
</body>
</html>