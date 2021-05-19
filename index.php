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
        <form action="db/form_handler.php" method="post">
                       <div class="form-box">
                <div class="add-article_text-box">
                    <h3>Тип наименования</h3>
                    <input type="text" name="item_type"  value="Упаковка">

                </div>
                <div class="add-article_text-box">
                    <h3>Название</h3>
                    <input type="text" name="item_name" value="Подарочная">

                </div>
                <div class="add-article_text-box">
                    <h3>Параметры</h3>
                    <input type="number" name="item_characteristic" value=1.2>

                </div>
                <div class="add-article_text-box">
                    <h3>Остаток</h3>
                    <input type="number" name="item_balance" value=77>

                </div>
                <div class="add-article_text-box">
                    <h3>Движение (шт)</h3>
                    <input type="number" name="item_movement" value=20>

                </div>
                <div class="add-article_text-box">
                    <h3>Минимальное кол-во</h3>
                    <input type="number" name="item_min_balance" value=50>

                </div>
                <div class="add-article_text-box">
                    <h3>Стоимость (руб)</h3>
                    <input type="number" name="item_cost" value=100>

                </div>

            </div>
            <div class="submit-button">
                <button>Отправить</button>
            </div>
        </form>
    </div>

    <div class="table_item_for_crud"><table>
            <th>Тип наименования</th>
            <th>Название</th>
            <th>Параметры</th>
            <th>Остаток</th>
            <th>Движение (шт)</th>
            <th>Минимальное кол-во</th>
            <th>Стоимость (руб)</th>

			<?php
			$item_for_crud = get_data_from_database();
			?>
			<?php foreach ($item_for_crud as $item_for_crud): ?>
                <tr>
                    <td class=""><?=$item_for_crud['item_type']?></td>
                    <td class=""><?=$item_for_crud['item_name']?></td>
                    <td class=""><?=$item_for_crud['item_characteristic']?></td>
                    <td class=""><?=$item_for_crud['item_balance']?></td>
                    <td class=""><?=$item_for_crud['item_movement']?></td>
                    <td class=""><?=$item_for_crud['item_min_balance']?></td>
                    <td class=""><?=$item_for_crud['item_cost']?></td>
                </tr>
			<?php endforeach; ?>

        </table></div>


</body>
</html>
