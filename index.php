<?php include __DIR__ . '/database.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <div class="header">
            <img src="img/logo-small.svg" alt="Logo">
        </div>
    </header>
    
    <main>
        <div class="container">
            <?php foreach($database as $disc) {?>

                <div class="single_card">
                    <img src="<?php echo $disc['poster']; ?>" alt="album image">

                    <h3>
                        <?php echo $disc['title']; ?>
                    </h3>

                    <div class="author">
                        <div class="artist">
                            <?php echo $disc['author']; ?>
                        </div>
                        <div class="year">
                            <?php echo $disc['year']; ?>
                        </div>
                    </div>
                </div>
                
            <?php } ?>
        </div>
    </main>
</body>
</html>