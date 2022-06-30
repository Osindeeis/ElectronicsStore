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
    <?php include_once "nav__bar.php" ?>
    <main>
        <div class="container">
            <div class="filters">
                <?php
                    $queryCategory = "Select Category From `Category`";
                    $resultCategory = mysqli_query($db, $queryCategory);
                    while ($Category = mysqli_fetch_assoc($resultCategory)) {
                        echo '<p>';
                        echo '<input type="checkbox" name="a" value="'. $Category['Category'] .'" >' . $Category['Category'] . '</p>';

                    }
                    

                ?>
            </div>
            <div class="card__row">
                <?php
                $query = "Select * From `products`";
                $result = mysqli_query($db, $query);
                while ($goods = mysqli_fetch_assoc($result)) {
                    echo '<div class="card">';
                    echo '<img src="data:image/jpeg;base64,' . base64_encode($goods['img']) . '" />';
                    echo '<h3 class="title">' . $goods['Title'] . '</h3>';
                    echo '<h4 class="cost">' . $goods['cost'] . ' Р</h4>';
                    echo '<button class="btn">Купить</button>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>

    </main>
</body>

</html>