<?php
    $serveur = "localhost";
    $dbname = "test";
    $username = "root";
    $password = "";
    try {
        $db = new PDO("mysql:host=$serveur;dbname=$dbname",$username, $password);
        echo "reussi";
    } catch(PDOException $e) {
        echo $e;
    }
    
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $sql = "SELECT * FROM pate";
        $query = $db->query($sql);
        $recette = $query->fetchAll();
       
        foreach($recette as $item){?>
        <div class="recette-item">
            <img class="image" src="<?php echo $item["image"]  ?>" alt="pate">
            <h1><?php echo $item["nom"]  ?></h1>
            <p><?php echo $item["description"] ?></p>
        </div>
        <?php
        }
    ?>
    
    
</body>
</html>