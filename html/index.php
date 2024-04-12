<?php
include 'pages/com.php';

$stmt = $pdo->prepare("SELECT * FROM toppig LIMIT :limit, :offset");
$stmt->execute(['limit' => $limit, 'offset' => $offset]); 
$data = $stmt->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="rebar"> 
    <div class="splitxx13"> 
    </div>
    <div class="splitxx13"> 
        <img src="recources\logo.png" class="logoplace">
    </div>
    <div class="splitxx13"> 
    <a href="pages\login.php" class="redbutton">
        login
    </a>
    </div>
    </div>
    <div class="pizzar"> 
        ?<php></php>
    </div>
    <?php

foreach ($data as $row) {
    echo $row['name']."<br />\n";
}
?>
    

</body>
</html>