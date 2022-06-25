<?php
    include_once "./db/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/rest.css">
    <link rel="stylesheet" href="./css/main__page.css">
    <title>Главная</title>
</head>
<body>
    <?php include_once "nav__bar.php"?>
    <main>
        <?php
            $query = "Select * From `products`";
            $result= mysqli_query($db,$query);
            while ($goods = mysqli_fetch_assoc($result))
            {
            ?>
                <div><?php echo $goods['title']; ?></div>
             <?php   
            }
            ?>
    </main>
</body>
</html>