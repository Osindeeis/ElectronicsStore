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
                    $queryCategory = "Select * From `Category`";
                    $resultCategory = mysqli_query($db, $queryCategory);
                    while ($Category = mysqli_fetch_assoc($resultCategory)) {
                        echo '<p>';
                        echo '<button  class="'. $Category['Category'] .'" name="a" >' . $Category['Fullname'] . '</button>';
                    }
                ?>
            </div>
            <div class="card__row">
                <?php
                $query2 = "SELECT * FROM products INNER JOIN Category On products.Category = Category.id_category";
                $result2 = mysqli_query($db, $query2);
                while ($goods2 = mysqli_fetch_assoc($result2)) {
                    echo '<div class="card '. $goods2['Category'] .'">';
                    echo '<img src="data:image/jpeg;base64,' . base64_encode($goods2['img']) . '" />';
                    echo '<h3 class="title">' . $goods2['Title'] . '</h3>';
                    echo '<h4 class="cost">' . $goods2['cost'] . ' Р</h4>';
                    echo '<button class="btn">Купить</button>';
                    echo '</div>';
                }

                ?>
            </div>
        </div>

    </main>
    <script src="./js/script.js"></script>
</body>

</html>