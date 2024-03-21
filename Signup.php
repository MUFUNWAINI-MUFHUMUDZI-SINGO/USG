
<style>
    body {
      background-image: url('img/background.png');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      height: 100vh;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: Arial, sans-serif;
    }
    
    form {
      background-color: #f9f9f9;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 400px;
      max-width: 100%;
      margin-right: auto;
      margin-left: 70px;
    }

    h2 {
      margin-top: 0;
      text-align: center;
      color: #333;
    }

    .image-preview {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      background-color: #ccc;
      margin: 20px auto;
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .image-preview img {
      max-width: 100%;
      max-height: 100%;
      object-fit: cover;
    }

    .input-field {
      margin-bottom: 20px;
      display: flex;
      flex-direction: column;
    }

    .input-field input {
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #322e2e;
      outline: none;
    }

    .input-field img {
      margin-right: 10px;
      height: 20px;
    }

    .input-field label {
      color: #777;
      font-size: 16px;
      font-weight: bold;
    }

    .btn-container {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    .btn-container button {
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-right: 5px; /* Adjust margin between buttons */
    }

    .btn-signup {
      background-color: #4CAF50;
      color: white;
    }

    .btn-cancel {
      background-color: #f44336;
      color: white;
    }

    .login-text {
      text-align: center;
      color: #777;
      font-size: 14px;
      margin-top: 10px;
    }

    .login-link {
      color: #007bff;
      text-decoration: none;
    }
  </style>
  
  <?php
$error_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $residence = $_POST['residence'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate form data
    if (empty($username) || empty($fullname) || empty($residence) || empty($password) || empty($confirm_password)) {
        $error_message = "<span style='color: red;'>All fields are required</span>";
    } elseif ($password != $confirm_password) {
        $error_message = "<span style='color: red;'>Passwords don't match</span>";
    } elseif (!preg_match("/^\d{8}@mvula\.univen\.ac\.za$/", $username)) {
        $error_message = "<span style='color: red;'>Username must be in the format (e.g., 21000423@mvula.univen.ac.za)</span>";
    } else {
        // Check if a file was uploaded
        if ($_FILES['picture']['error'] == UPLOAD_ERR_OK) {
            $picture_tmp_name = $_FILES['picture']['tmp_name'];
            $picture_name = $_FILES['picture']['name'];
            $picture_extension = pathinfo($picture_name, PATHINFO_EXTENSION);
            // Validate file type (you can add more validation if needed)
            if (!in_array($picture_extension, array('jpg', 'jpeg', 'png', 'gif'))) {
                $error_message = "<span style='color: red;'>Invalid file type, please upload an image file</span>";
            } else {
                // Move uploaded file to a permanent location
                $uploads_dir = 'C:/xampp/htdocs/UNI Stud Gym/uploads/'; // Adjust path to your desired destination
                $picture_destination = $uploads_dir . $picture_name;
                if (!move_uploaded_file($picture_tmp_name, $picture_destination)) {
                    $error_message = "<span style='color: red;'>Failed to move uploaded file</span>";
                }
            }
        } else {
            $error_message = "<span style='color: red;'>Error uploading file</span>";
        }

        // If no error occurred with file upload, proceed to database insertion
        if (empty($error_message)) {
            // Connect to the database (replace db_host, db_user, db_password, and db_name with your database credentials)
            $conn = new mysqli("localhost", "root", "", "usg");

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Check if username already exists
            $stmt_check_username = $conn->prepare("SELECT username FROM users WHERE username = ?");
            $stmt_check_username->bind_param("s", $username);
            $stmt_check_username->execute();
            $stmt_check_username->store_result();

            if ($stmt_check_username->num_rows > 0) {
                $error_message = "<span style='color: red;'>Username already exists. Please choose a different username.</span>";
            } else {
                // Prepare SQL statement to insert user data into the database
                $stmt_insert_user = $conn->prepare("INSERT INTO users (username, fullname, residence, password, picture_path) VALUES (?, ?, ?, ?, ?)");
                $stmt_insert_user->bind_param("sssss", $username, $fullname, $residence, $password_hash, $picture_destination);

                // Hash the password
                $password_hash = password_hash($password, PASSWORD_DEFAULT);

                // Execute SQL statement
                if ($stmt_insert_user->execute()) {
                    // Signup successful, redirect to login page
                    header("Location: Accdone.php");
                    exit;
                } else {
                    $error_message = "<span style='color: red;'>Failed to signup. Please try again later.</span>";
                }

                // Close statement
                $stmt_insert_user->close();
            }

            // Close statement
            $stmt_check_username->close();
            $conn->close();
        }
    }
}
?>  







<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>32400012</title>
</head>
<body>
  <form action="" method="POST" enctype="multipart/form-data">
    <h2>Getting Started</h2>
    
   

    <div class="image-preview">
      <img id="preview" src="#" alt="Preview">
    </div>

    <div class="input-field">
      <label for="username">
        <img src="img/icons8-email-24.png" alt="Username Icon"> Student Email:
      </label>
      <input type="text" id="username" name="username" placeholder="Example 21000423@mvula.univen.ac.za" required>
    </div>

    <div class="input-field">
      <label for="fullname">
        <img src="img/icons8-username-24.png" alt="Name Icon"> Full Names:
      </label>
      <input type="text" id="fullname" name="fullname" placeholder="Enter Full Name" required>
    </div>

    <div class="input-field">
      <label for="residence">
        <img src="img/icons8-residence-24.png" alt="Residence Icon"> Residence:
      </label>
      <input type="text" id="residence" name="residence" placeholder="Enter Residence" required>
    </div>

    <div class="input-field">
      <label for="picture">
        <img src="img/icons8-username-24 (1).png" alt="Picture Icon"> Picture:
      </label>
      <input type="file" id="picture" name="picture" accept="image/*" onchange="previewImage(event)" required>
    </div>

    <div class="input-field">
      <label for="password">
        <img src="img/icons8-password-24.png" alt="Password Icon"> Password:
      </label>
      <input type="password" id="password" name="password" placeholder="Enter Password" required>
    </div>

    <div class="input-field">
      <label for="confirm_password">
        <img src="img/icons8-password-24.png" alt="Confirm Password Icon"> Confirm Password:
      </label>
      <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
      <span id="password_error" style="color: red;"></span>
    </div>
    <?php if (!empty($error_message)): ?>
    <div class="error-message"><?php echo $error_message; ?></div>
    <?php endif; ?>
    <div class="btn-container">
      <button type="submit" class="btn-signup">Sign Up</button>
      <button type="button" class="btn-cancel" onclick="goToIndex()">Cancel</button>
    </div>

    <div class="login-text">Already have an account? <a href="login.php" class="login-link">Click here to login</a></div>
  </form>

  <!-- Your JavaScript code -->
  <script>
    function previewImage(event) {
      const reader = new FileReader();
      reader.onload = function() {
        const preview = document.getElementById('preview');
        preview.src = reader.result;
      }
      reader.readAsDataURL(event.target.files[0]);
    }

    function goToIndex() {
      window.location.href = "index.php";
    }
  </script>
</body>
</html>