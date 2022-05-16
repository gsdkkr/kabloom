<?php

// Voegt toe connectie met database
include "db.php";


// Checks submit knop
if(isset($_POST["submit"])) {
  // Prepare sql database
  $sql = "UPDATE `flowers` SET `price` = :price, `flowername` = :flowername WHERE `flowers`.`Id` = :id;";
  $stmt = $conn->prepare($sql);
  // Bind Params
  $stmt->bindParam(':flowername', $flowername);
  $stmt->bindParam(':price', $price);
  $stmt->bindParam(':id', $id);
  // Values uit de form
  $flowername = $_POST["title"];
  $price = $_POST["price"];
  $id = $_POST["id"];
  // Voert uit
  $stmt->execute();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<!-- Maakt een form met tekstveld en submit knop -->
<form action="" method="post">
  <input type="text" name="title" id="">
  <input type="text" name="price" id="">
  <input type="text" name="id" id="">
  <input type="submit" value="submit" name="submit">
</form>



</body>
</html>