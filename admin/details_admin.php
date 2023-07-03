<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Prestations</title>
  <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
  <style>


  


  .view-more {
    font-family:'Inter';
    float: right;
    margin-bottom: 0px;
    text-decoration:underline;
  }

  .view-more:hover {
    background-color: #e0e0e0;
  }

  .card-container {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    grid-gap: 10px;
    margin: 0 auto;
    max-width: 1200px;
    padding-top: 10px;
    justify-content: center;
    margin-top: 20px;
  }



  .card {
    width: 190px;
    height: 110px;
    background-color: #fefeff;
    
    margin-bottom: 20px;
    position: relative;
          border-radius: 10px;
          border-color: #2F80ED;
          border-style: solid;
  }
  .card img {
    width: 30px;
    height: 30px;
    object-fit: cover;
    display: block;
    margin-left: 10px;
    margin-top: 5px;
  }
  .card .title {
    font-family: 'Inter';
    color: black;
    font-size: 20px;
    margin-top: 10px;
    margin-bottom: 10px;
    padding: 0 10px;
    text-align: left;
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



  <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
  session_start();

// Check if user is signed in
if (!isset($_SESSION['signed_in']) || $_SESSION['signed_in'] !== true) {
  // User is not signed in, redirect to sign-in page
  header("Location: login.php");
  exit;
}
?>

<div class="top-div">
    <img src="images\ESI_Logo.png" alt="ESI Logo">
    <img src="images\COSlogo.png" alt="COS Logo">
  </div>

<!-- Your content goes here -->
<a href="./admin.php">
<img  style=" margin-left: 10px; margin-left: 30px; margin-top: 10px;margin-bottom: 10px; height:50px;" src="/img/back.png" >
</a>
<div>
<div style="display: flex;justify-content: space-between; align-items:end;">

<?php
      $type = urldecode($_GET['type']);
      $name = urldecode($_GET['name']);
      $dossier = urldecode($_GET['dossier']);
      $description = urldecode($_GET['description']);
      
      echo '<h2 style=" margin-left: 10px; font-family: \'Inter\';margin-left: 30px; margin-bottom: 0; float:left">' . $name.'</h2>';
     
      ?>


</div>
<div style="display: flex;
justify-content: space-between;">
<div style=" display: inline-block; margin-right: 10px;"><img style="margin-left: 30px; margin-right: 10px; margin-top:20px;width:300px"src="/img/docs.png" ></div>


<div style="flex:2">
<h3 style="font-family: 'Inter'; font-size: 20px; margin-bottom: 20px;">Description: </h3>
<?php
echo '<p style="font-family: \'Inter\'; margin-right: 90px;">'.$description.'</p>';
?>
<h3 style="font-family: 'Inter'; font-size: 20px; margin-bottom: 20px; margin-top: 20px;">Dossier à fournir: </h3>
<?php
echo '<p style="font-family: \'Inter\'; margin-right: 90px;">'.$dossier.'</p>';
?>



<?php
// Connect to MySQL database
$conn = mysqli_connect("localhost", "root", "", "cos");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the delete button is clicked
if (isset($_POST['delete_button'])) {
    // Get the name of the element to be deleted
    $name = ($_GET['name']);
    
    // Prepare and execute the DELETE query
    $stmt = $conn->prepare("DELETE FROM prestations WHERE name = ?");
    $stmt->bind_param('s', $name);
    $stmt->execute();

    // Check if the deletion was successful
    if ($stmt->affected_rows > 0) {
        // Redirect to admin.php
        header("Location: admin.php");
        exit(); // Make sure to exit after redirection
    }
}

mysqli_close($conn);
?>

  
</div>



</div>

<form method="post">
    <!-- Include other input fields or hidden fields for the element ID if necessary -->
    
    <button type="submit" name="delete_button" style="background-color: #2F80ED; cursor: pointer; color: white; float: right; margin-right: 30px; padding: 10px 40px; font-family: 'Inter'; border: none; border-radius: 4px; box-shadow: 0 2px 4px rgba(0, 0, 255, 0.2);">
        Supprimer
    </button>
</form>


</body>
</html>
