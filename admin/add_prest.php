<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cos";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Retrieve the values from the form 

    //remplaci hado
    $name = urlencode($_POST['name']);
    $description = urlencode($_POST['description']);
    $dossier=urlencode($_POST['dossier']);
    $type=urlencode($_POST['type']);

    // Construct the SQL INSERT statement

    $sql = "INSERT INTO prestations (name, description,dossier,type) VALUES ('$name', '$description','$dossier','$type')";

    // Execute the SQL statement
    if ($conn->query($sql) === TRUE) {
        // Redirect to the home page
        header("Location: admin.php");  
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
