<?php
    require_once 'database.php';
    require_once 'functions.php';
    $item_id = $_GET['id'];
    global $link, $dataTable;
    $item = mysqli_query($link, "SELECT FROM `$dataTable` WHERE `$dataTable`.`id` = `$item_id`");



?>
<pre>
     <?php var_dump($item, 2); ?>
</pre>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Изменение данных наименования</title>
    <link rel="stylesheet" href="../css/null_style.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>
<body>
<div class="storage-form">
    <form action="../index.php" method="post">
        <div class="form-box">

            <input type="number" name="id" hidden="true" value=<?=$item['id']?>>
            <div class="add-article_text-box">
                <h3>Тип наименования</h3>
                <input type="text" name="item_type"  value="<?=$item['item_type']?>">

            </div>
            <div class="add-article_text-box">
                <h3>Название</h3>
                <input type="text" name="item_name" value="<?=$item['item_name']?>">

            </div>
            <div class="add-article_text-box">
                <h3>Параметры</h3>
                <input type="number" name="item_characteristic" value=<?=$item['item_characteristic']?>>

            </div>
            <div class="add-article_text-box">
                <h3>Остаток</h3>
                <input type="number" name="item_balance" value=<?=$item['item_balance']?>>

            </div>
            <div class="add-article_text-box">
                <h3>Движение (шт)</h3>
                <input type="number" name="item_movement" value=<?=$item['item_movement']?>>

            </div>
            <div class="add-article_text-box">
                <h3>Минимальное кол-во</h3>
                <input type="number" name="item_min_balance" value=<?=$item['item_min_balance']?>>

            </div>
            <div class="add-article_text-box">
                <h3>Стоимость (руб)</h3>
                <input type="number" name="item_cost" value=<?=$item['item_cost']?>>

            </div>

        </div>
        <div class="submit-button">
            <button>Принять изменения</button>
        </div>
    </form>
</div>
</body>
</html>