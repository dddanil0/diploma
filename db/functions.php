<?php
    function get_categories() {

        global $link,   $dataTable;
        $sql = "SELECT * FROM `  $dataTable`";
        $result = mysqli_query($link, $sql);
        $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $categories;
    }

    function get_data_from_database() {
        global $link;
        $sql = "SELECT * FROM `items_production_main`";
        $result = mysqli_query($link, $sql);
        $item_for_crud = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $item_for_crud;
    }


