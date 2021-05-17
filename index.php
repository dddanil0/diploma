<?php
    require_once 'db/database.php';
    require_once 'db/functions.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Диплом</title>
    <link rel="stylesheet" href="css/null_style.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

    <div class="storage-form">
        <form action="">
                       <div class="form-box">
                <div class="add-article_text-box">
                    <h3>Тип наименования</h3>
                    <input type="text">

                </div>
                <div class="add-article_text-box">
                    <h3>Название</h3>
                    <input type="text">

                </div>
                <div class="add-article_text-box">
                    <h3>Параметры</h3>
                    <input type="text">

                </div>
                <div class="add-article_text-box">
                    <h3>Остаток</h3>
                    <input type="text">

                </div>
                <div class="add-article_text-box">
                    <h3>Движение (шт)</h3>
                    <input type="text">

                </div>
                <div class="add-article_text-box">
                    <h3>Минимальное кол-во</h3>
                    <input type="text">

                </div>
                <div class="add-article_text-box">
                    <h3>Стоимость (руб)</h3>
                    <input type="text">

                </div>

            </div>
            <button class="submit-button">Отправить</button>
            <div class="output-database_info">
                <?php
                $item_for_crud = get_data_from_database();
                ?>
                <?php foreach ($item_for_crud as $item_for_crud): ?>
                <div class="item_for_crud">
                    <div class="output-item_for_crud"><?=$item_for_crud['item_type']?></div>
                    <div class="output-item_for_crud"><?=$item_for_crud['item_name']?></div>
                    <div class="output-item_for_crud"><?=$item_for_crud['item_characteristic']?></div>
                    <div class="output-item_for_crud"><?=$item_for_crud['item_balance']?></div>
                    <div class="output-item_for_crud"><?=$item_for_crud['item_movement']?></div>
                    <div class="output-item_for_crud"><?=$item_for_crud['item_min_balance']?></div>
                    <div class="output-item_for_crud"><?=$item_for_crud['item_cost']?></div>
                </div>
                <?php endforeach; ?>
            </div>

        </form>
    </div>

</div>
</body>
</html>
