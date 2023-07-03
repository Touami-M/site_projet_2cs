<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}
		.header {
			background-color: #ffffff;
			color: #000000;
			padding: 20px;
			display: flex;
			align-items: center;
            position: relative;
		}
		.add-btn {
			background-color: #0E31EB;
			color: #fff;
			border: 0.5px solid #007bff;
			padding: 8px 25px;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.2s ease-in-out;
            margin-right: 10px;
		}
		.add-btn:hover {
			background-color: #fefeff;
			color: #0E31EB;
		}
		.card-container {
			display: grid;
  			grid-template-columns: repeat(4, 1fr);
  			grid-gap: 10px;
			margin: 0 auto;
			max-width: 1200px;
			padding-top: 20px;
			justify-content: space-between;
		}
		.card {
			width: calc(90% );
			background-color: #f7f7f7;
            border: 0.5px solid;
            border-color: #d4d3d3;
			margin-bottom: 20px;
			position: relative;
            border-radius: 10px;
		}
		.card img {
			width: 100%;
			height: 200px;
			object-fit: cover;
			display: block;
		}
		.card .title {
			font-size: 24px;
			font-weight: bold;
			margin-top: 10px;
			margin-bottom: 5px;
			padding: 0 10px;
			text-align: left;
		}
		.card .code {
			font-size: 18px;
			margin-top: 5px;
			margin-bottom: 10px;
			padding: 0 10px;
			text-align: left;
		}
		.card .details-btn {
			background-color: #fefeff;
			color: #0E31EB;
			border: none;
			padding: 5px 20px;
			border-radius: 5px;
			cursor: pointer;
			position: absolute;
			bottom: 10px;
			right: 10px;
			transition: background-color 0.2s ease-in-out;
            border: 0.5px solid;
            border-color: #0E31EB;
		}
		.card .details-btn:hover {
			background-color: #0069d9;
		}

		.container {
			margin-top: 50px;
			text-align: center;
			}

			.popup-container {
			display: none;
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0, 0, 0, 0.5);
			justify-content: center;
			align-items: center;
			}

			.popup {
			background-color: #fff;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
			}

			.popup label {
			display: block;
			margin-bottom: 10px;
			}

			.popup input {
			display: block;
			margin-bottom: 20px;
			padding: 5px;
			border-radius: 5px;
			border: none;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
			}

			.popup button {
				background-color: #fff;
			color: #0E31EB;
			border: 0.5px solid #0E31EB;
			padding: 8px 10px;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.2s ease-in-out;
            margin-right: 10px;
			}

			.popup button[type="submit"] {
				background-color: #0E31EB;
			color: #fff;
			border: 0.5px solid #007bff;
			padding: 8px 10px;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.2s ease-in-out;
            margin-right: 10px;
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

<!-- HTML code for home page goes here -->
<div class="top-div">
    <img src="images\ESI_Logo.png" alt="ESI Logo">
    <img src="images\COSlogo.png" alt="COS Logo">
  </div>

	<div class="header">
		<h1 style=" z-index: 1;">Bonjour Mr. Admin
            <img src="/img/rectangle.png" style=" z-index: -1;position: relative; top: 7px; right: 90px; width: 90px;height: 12px;">
        </h1>
        
		
	</div>
    
	<h2 style="float: left; margin-left: 10px;">Liste des prestations</h2>
	
	<button  onclick="location.href='signout.php'"  class="add-btn" style="float: right; font-weight: bold;">Quitter</button>
    <button onclick="window.location.href='ajouter.php';" class="add-btn" style="float: right; font-weight: bold;">Ajouter</button>
    <br></br>
    <br></br>
	<div class="card-container" >

	<?php

        // Connect to MySQL database
        $conn = mysqli_connect("localhost", "root", "", "cos");

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // SQL query to retrieve data from database
        $sql = "SELECT type, name, description, dossier FROM prestations";

        // Execute SQL query
        $result = mysqli_query($conn, $sql);

        // Loop through query results and output data in HTML format
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="card"  style="display: inline-block;">';
            //echo '<img src="/img/teacher.png" style="width: 72px; height: 72px; margin-left: 10px; margin-top: 10px;">';
            echo '<div class="title">'. urldecode($row['name']).'</div>';
            echo '<div class="code"><p>Type: <span style="color: #0E31EB; font-weight: bold;">'. $row['type'] .'</span></p></div>';
            echo '<br></br>';
            echo '<button onclick="window.location.href=\'details_admin.php?type='. urlencode($row['type']) .'&name='. urlencode($row['name']) . '&dossier='. urlencode($row['dossier']) .'&description=' . urlencode($row['description']) .'\'" class="details-btn">Details</button>';
            echo '</div>';
        }

        // Close MySQL connection
        mysqli_close($conn);

		?>

        </div>

		

   
			
			
	
	
		
    </body>
    </html>