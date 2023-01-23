<?php
date_default_timezone_set("Asia/Calcutta");

define("breakfast", "08-09");
define("lunch", "13-14");
define("snacks", "17-18");
define("dinner", "20-21");

$date = date('d-m-y');
$hour = date('H');
$minute = date('i');

function convert_time($meal) {
    if ($meal == "breakfast") {
        return breakfast;
    } elseif ($meal == "lunch") {
        return lunch;
    } elseif ($meal == "snacks") {
        return snacks;
    } elseif ($meal == "dinner") {
        return dinner;
    } else {
        throw new Exception("Invalid Meal Selected - choose from breakfast, lunch, snacks and dinner.");
    }
}

echo convert_time("breakfast");

function get_meal() {
    global $hour;
    global $minute;

    if ($hour < 9) {
        return "Breakfast";
    } elseif ($hour < 14) {
        return "Lunch";
    } elseif ($hour < 18) {
        return "Snacks";
    } elseif ($hour < 21) {
        return "Dinner";
    } else {
        return "Tommorow";
    }
}

function get_meal_remaining_time($meal) {
    $date = new DateTime('now', new DateTimeZone('Asia/Calcutta'));
    // return $date->format("m");

    switch ($meal) {
        case "Breakfast":
            $hours = $date->format("H") - 9;
            $minutes = 60 - $date->format("m");

            echo $hours . " hours, " . $minutes . " past";
            break;

        default:
            return "Invalid meal type.";
    }
}

// echo get_meal_remaining_time("Breakfast");
?>