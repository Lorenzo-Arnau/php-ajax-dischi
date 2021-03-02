<?php

// è il php dedicato al frontend (alla view)

// per la prima milestone
require_once __DIR__ . '/database/database.php';

// qui a questo punto possiamo creare (per la prima milestone) tutto il nostro html e ciclare i nostri dischi (sempre in php)
// e stampare copertina, titolo e così via, come da screenshot.
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Dischi Milestone 1</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
    
    </header>
    <main>
        <div class="container">
        <?php foreach ($dischi as $disco) {?>   
            <div class="album">
                <div class="cover">
                <img src="<?php echo $disco['poster']?>" alt="">
                </div>
                <div class="title">
                <h2><?php echo $disco['title']?></h2>
                </div>
                <div class="author">
                <h3><?php  echo $disco['author']?></h3>
                </div>
                <div class="year">
                <h4><?php  echo $disco['year']?></h4>
                </div>       
            </div>
       <?php } ?>
        
        </div>
    </main>
    
</body>
</html>
