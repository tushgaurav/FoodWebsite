<?php

function getMenu($meal) {
    $day = false ? date('w') : "monday";
    $json = file_get_contents('./data/menu/' . $day . ".json");
    $data = json_decode($json, true);
    return $data[strtolower($meal)]["food"];
}

?>