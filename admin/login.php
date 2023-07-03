<!DOCTYPE html>
<html>
  <head>
    <title>Sign In  </title>



    <style>
    

    body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
}

.container {
  max-width: 500px;
  margin: 0 auto;
  margin-top: 40px;
  text-align: center;
  padding-top: 50px;
  background-color: #f7f7f7; /* Set the background color of the container */
  border-radius: 10px; /* Add some border-radius to round the edges of the container */
  border: 0.5px solid;
  border-color: #A3A3A3;

  position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
}

h1 {
    font-family: Arial, sans-serif;
  font-size: 36px;
  margin-bottom: 30px;
}

form {
  margin-top: 30px;
}

label {
  display: block;
  margin-bottom: 10px;
  margin-left: 40px;
  font-size: 18px;
  text-align: left;
  font-family: Arial, sans-serif;
}

input[type="text"],
input[type="password"] {
  width: 80%;
  background-color: #F5F5F5;
  padding: 10px;
  margin-bottom: 20px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid;
  border-color: #e0e0e0;
  font-family: Arial, sans-serif;
}

input[type="text"]::placeholder,
input[type="password"]::placeholder {
  color: #A3A3A3; /* Set the color of the placeholder text to a light grey */
}

button[type="submit"] {
  background-color: #007bff;
  color: #fff;
  padding: 10px 40px;
  font-size: 18px;
  border-radius: 5px;
  border: none;
  cursor: pointer;
  transition: background-color 0.2s ease-in-out;
  margin-bottom: 20px;
  font-family: Arial, sans-serif;
}

button[type="submit"]:hover {
  background-color: #0f29ac;
}

button[type="submit"] {
  background-color: #2F80ED; /* Set the background color of the submit button to dark blue */
}

.top-div {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px;
    }
    
    .top-div img {
      width: 170px;
      height: 90px;
    }

        </style>

    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <div class="top-div">
    <img src="images\ESI_Logo.png" alt="ESI Logo">
    <img src="images\COSlogo.png" alt="COS Logo">
  </div>
    <div class="container">
      <h1>Sign In</h1>
      <form method="post" action="">
        <label for="email">Email</label>  
        <input type="text" id="Email" name="Email" placeholder="Email">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="**********************">
        <button type="submit" name="signin">Sign In</button>
      </form>
      <?php
      // Establish database connection
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "cos";

      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      if (isset($_POST['signin'])) {
        // Retrieve entered email and password
        $email = $_POST['Email'];
        $password = $_POST['password'];

        // Prepare and execute SELECT query to retrieve admin record from database
        $sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
        $result = $conn->query($sql);

        // Check if query returned any result
        if ($result->num_rows > 0) {
          // Admin record found, set session variable to indicate sign-in status
          session_start();
          $_SESSION['signed_in'] = true;
          header("Location: admin.php");
          exit;
        }
        else {
          // Admin record not found, display error message
          echo "<p class='error'>Invalid email or password</p>";
        }
      }

      // Close database connection
      $conn->close();
      ?>
    </div>
  </body>
</html>
