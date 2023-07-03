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

 #description{
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

#description::placeholder {
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
  <body >

  <div class="top-div">
    <img src="images\ESI_Logo.png" alt="ESI Logo">
    <img src="images\COSlogo.png" alt="COS Logo">
  </div>
    <div class="container">
      <h1>Ajouter une Prestation</h1>
      <form method="post" action="add_prest.php">
  <label for="name">Nom de Prestation</label>  
  <input type="text" id="name" name="name" placeholder="Nom" required>
  
  <label for="description">Description</label>
  <textarea id="description" name="description" placeholder="Description" required></textarea>
  
  <label for="dossier">Dossier</label>
  <textarea type="text" id="description" name="dossier" placeholder="Dossier" required></textarea>
  
  <label for="type">Type</label>
  <select id="description" name="type" required>
    <option style="font-type: Arial" value="1">1 : Prestations Monétaires</option>
    <option style="font-type: Arial" value="2">2 : Prestations en nature sous forme de services</option>
    <option style="font-type: Arial" value="3">3 : Prestations nature sous forme de biens</option>
  </select>
  
  <button type="submit" name="ajouter">Ajouter</button>
</form>

      
    </div>
  </body>
</html>
