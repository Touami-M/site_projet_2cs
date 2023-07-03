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
    cursor:pointer;
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
  
  
 /* The whole page */
*{
    padding: 0;
    margin: 0;
    font-family: 'Inter' ;
    box-sizing: border-box;
}
html
{
  scroll-behavior: smooth;
}

body
{
    background-color: white;
    background-repeat: no-repeat;
    background-position: center;
}

a 
{
    text-decoration: none;
    color: white;
}

ul{
    list-style: none;
}

h1
{
    font-size: 1.8rem;
    font-weight: bolder;
}
 
h3
{
    font-size: 1.5rem;
    font-weight: bold; 
    margin-bottom: 50px;
}

p
{
    font-family: 'Inter';
}

.bluebottom{
    border-bottom: 5px solid #2F80ED;
}

.section-title{
    margin: 20px 10px 10px 100px;
}

/*header*/
#header{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: 30px;
    width: 100vw;
    z-index: 1000;
}

#header ul{
    list-style: none;
    position: absolute;   
    display: flex;
    flex-direction: row;
    z-index: 1;
    overflow-x: hidden;
    justify-content: center;
    align-items: center;
    transition: .3s ease left;
    margin: 50px 20px 30px 80px;
    padding: 15px;
}

#header ul a{
    font-size: 0.9rem;
    letter-spacing: .0.8rem;
    color: black;
    display: block;
    text-decoration: none;
    padding: 15px;
    margin: 25px;
    font-weight: bolder;
}

#header a.active{
    font-size: 1rem;
    letter-spacing: .0.8rem;
    font-weight: bolder;
    border-bottom: 5px solid #2F80ED;
    border-radius: 5px;
}


.esi{
    height: 60px;
    width: 150px;
    margin-right: 50px;
}

.cos{
    height: 100px;
    width: 150px;
    margin-left: 50px;
}

/* end od header style */

/* Discription section */
#discription
{
    padding: 20px;
    margin: 25px;
    margin-top: 100px;
    display: flex;
    flex-direction: row;
}

#discription h1
{
    color: #000;
    font-weight: bolder;
}

#discription .home{
    margin: 30px 20px 30px 100px;
}

#discription p
{
    width: 90%;
    font-size: 1.2rem;
    margin-top: 25px;
}

#discription .picture 
{
    flex-direction: column-reverse;
    margin: 30px 70px 30px 20px;
}

#discription .picture img{
    width: 420px;
    height: 270px; 
    border: #ffffff solid 5px;
}
#discription .picture .about-img{
    position: relative;
}
#discription .picture .about-img::after{
    content:'';
    position: absolute;
    left: -5px;
    top: -8px;
    height: 100%;
    width: 100%;
    border: solid 5px #000;
}

/* Actuality section */

.container{
    padding-top: 20px;
    padding-bottom: 20px;
    margin: 20px;
}
.items{
    display: flex;
    flex-direction: row;
    margin: 20px auto 20px 80px;
}
#Actuality .item{
    display: flex;
    flex-direction: column;
    width: 80%;
    padding: 15px;
    margin: 10px;
    border-radius: 20px;
    box-shadow: 0px 0px 7px 0 #2F80ED;
    background: #2F80ED;
    transition: .3s ease box-shadow;
}

#Actuality .item:hover{
    box-shadow: 0px 0 2px 0 #2F80ED;
}

#Actuality .item-info{
    margin:10px;
    text-align: left;
}

.item img{
    width: 250px;
    height: 160px;
    border-radius: 20px;
}

#Actuality .item-info h2{
    font-size: 1rem;
    color: white;
    letter-spacing: .0.8rem;
    margin-bottom: 10px;
    font-weight: bold;
} 
 
.voirplus{
    text-align: right;
    margin: 5px 20px 5px auto;
}

.voirplus a{
    color: #000;
    border-bottom: 2px solid #000;
}

/* A propos partie nos objectives */

.obj
{
    display: flex;
    flex-direction: column;
} 

.row 
{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}

.objectives
{
    margin: 30px;
}

.center{
    position: relative;
    z-index: -1;
}
.center img{
    width: 250px;
    height: 340px; 
    border: #ffffff solid 5px;
}
.center::after{
    content:'';
    position: absolute;
    left: -6px;
    top: -6px;
    height: 100%;
    width: 77%;
    border: solid 5px #000;
}

.top{
    margin-bottom: -150px;
    margin-left: -120px;
    z-index: 2;
    width: 180px;
    height: 250px; 
    border: #ffffff solid 5px;
}

.bottom{
    margin-top: -120px;
    margin-left: 150px;
    z-index: 2;
    width: 180px;
    height: 250px; 
    border: #ffffff solid 5px;
}

.objectives p{
    font-size: 1.2rem;
    margin: 10px;
}

/* A propos partie nos membre*/
.member{
    display: flex;
    flex-direction: column;
    width: 80%;
    padding: 5px;
    margin: 5px;
}

.member-pic img{
    width: 200px;
    height: 200px;
}

.member-info{
    margin: 10px;
}

.member-info h2{
    font-weight: 900;
    font-size: 1.3rem;
    text-align: center;
}

.member-info p{
    font-weight: 200;
    text-align: center;
}

/* FOOTER */
.footer{
    padding-bottom: 30px; 
    display: flex;
    flex-direction: row;
}
footer{
    background: #2F80ED;
    margin-top: 100px;
    align-items: center;
    justify-content: center;
}

.school{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin: 30px 10px 0px 30px;
}

.school img{
    width: 90px;
    height: 70px;
}

.school p{
    width: 70%;
    align-content: start;
    text-align: left;
}

.contact{
    display: flex;
    flex-direction: column;
    margin: 30px 30px 0px 10px;
}

.contact-item{
    display: flex;
    flex-direction: row;
    margin: 10px;
}

.contact-item img{
    width: 25px;
    height: 25px;
}

footer p{
    color: white;
    text-align: center;
    font-size: 1rem;
    font-weight: bold;
    padding: 10px;
}
/*  footer end  */
  </style>



  <link rel="stylesheet" href="styles.css">
</head>
<body>
<!-- The header -->
<nav id="header">
  <ul>
      <li><img class="esi" src="images/ESI_Logo.png" alt="ESI"></li>
      <li><a href="./home.php" data-after="Home">Acceuil</a></li>
      <li><a class="active" href="./prestations.php" data-after="Prestation">Prestations</a></li>
      <li><a href="./home.php" data-after="Actuality">Actualités</a></li>
      <li><a href="./home.php" data-after="About">A propos</a></li>
      <li><a href="./home.php" data-after="Contact">Contact</a></li>
      <li><img class="cos" src="images/COSlogo.png" alt="COS"></li>
  </ul>
</nav>


<!-- Your content goes here -->
<a href="./prestations.php">
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




      

</div>



</div>
<button style="background-color: #2F80ED;
      color: white;
      float: right;
      
          margin-right: 30px;
      padding: 10px 40px;
      font-family: 'Inter';
  
      border: none;
      border-radius: 4px;
      box-shadow: 0 2px 4px rgba(0, 0, 255, 0.2);">Demander</button>
<h2 style=" margin-left: 10px; font-family: 'Inter'; margin-bottom: 0; margin-left: 30px; margin-top: 20px;">Prestation similairs</h2>   
<div class="card-container"  >



<?php

        // Connect to MySQL database
        $conn = mysqli_connect("localhost", "root", "", "cos");

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // SQL query to retrieve data from database
        $sql = "SELECT type, name, description, dossier FROM prestations  limit 5";

        // Execute SQL query
        $result = mysqli_query($conn, $sql);
            
        while ($row = mysqli_fetch_assoc($result)) {

            
            echo '<div class="card"  style="display: inline-block;" onclick="window.location.href=\'details.php?type='. urlencode($row['type']) .'&name='. urlencode($row['name']) . '&dossier='. urlencode($row['dossier']) .'&description=' . urlencode($row['description']) .'\';">';
            echo '<img src="/img/mdi_donation_noir.png" >';
            echo '<div class="title">'. urldecode($row['name']).'</div>';
            echo '</div>';
        }

          // Close MySQL connection
          mysqli_close($conn);

        ?>








</div>
</div>

<!--footer start-->
<footer>
  <div class="footer" id="contact">
      <div class="school">
          <div class="school-logo">
              <img src="images/esi_white.png">
          </div>
          <div class="school-discription">
              <p>Ecole nationale Supérieure d'Informatique المدرسة الوطنية العليا للإعلام الآلي
                  BPM68 16270, Oued Smar, Alger. http://www.esi.dz</p>
          </div>
      </div>
      <div class="contact">
          <div class="contact-item">
              <img src="images/phone.png" alt="phone icon">
              <p>Tél : 023939132</p>
          </div>
          <div class="contact-item">
              <img src="images/fax.png" alt="fax icon">
              <p>Fax : 023939142</p>
          </div>
          <div class="contact-item">
              <img src="images/email.png" alt="email icon">
              <p>cos@esi.dz</p>
          </div>
      </div>
  </div>
  <p>Copyrights &copy; 2023 all rights reserved</p>
</footer>
<!--footer end-->

</body>
</html>
