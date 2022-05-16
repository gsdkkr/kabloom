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
<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=kabloom", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo '<h1 style="font-size: 50px; color: green;"><strong>Connected successfully</strong></h1>';
} catch(PDOException $e) {
  echo '<h1 style="font-size: 50px; color: red;"><strong>Connection failed: </strong></h1>' . $e->getMessage();
}

$sql = 'SELECT * FROM flowers';
$stmt = $conn->query($sql);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
$sql = 'SELECT * FROM flowers';
$stmt = $conn->query($sql);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<table class='table table-striped table-hover '>";
    foreach( $data as $flower){
        echo "<tr class='table-dark'>";
        echo "<td>";
        echo "<p>" . $flower["flowername"] . "</p>";
        echo "</td>";
        echo "<td>";
        echo "<p>" . $flower["price"] . "</p>";
        echo "</td>";
        echo "</tr>";
}
echo "</table>";
?>
</body>
</html>