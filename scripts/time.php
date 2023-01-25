<?php
date_default_timezone_set("Asia/Calcutta");

define("breakfast", "08-09");
define("lunch", "13-14");
define("snacks", "17-18");
define("dinner", "20-21");

$date = date('d-m-y');
$hour = date('H');
$minute = date('i');

function convert24To12($time) {
    $array = explode("-", $time);
    [$hourStart, $hourEnd] = $array;
    
    if ($hourStart > 12) {
        $hourStart = $hourStart - 12;
    }

    if ($hourEnd > 12) {
        $hourEnd = $hourEnd - 12;
        $hourEnd = $hourEnd. " PM";
    } else {
        $hourEnd = $hourEnd . " AM";
    }

    return $hourStart . " - " . $hourEnd;
}

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

function getMealRemainingTime($meal) {
    if (strtolower($meal) == "breakfast") {
        $time = breakfast;
    } elseif (strtolower($meal) == "lunch") {
        $time = lunch;
    } elseif (strtolower($meal) == "snacks") {
        $time = snacks;
    } elseif (strtolower($meal) == "dinner") {
        $time = dinner;
    } else {
        return "INVALID MEAL";
    }

    $date = new DateTime('now', new DateTimeZone('Asia/Calcutta'));
    $time = new DateTime($date->format('Y-m-d') . " " . str_replace("-", ":", $time));
    $currTime = $date->format("H-i");
    $diff = $date->diff($time);
    return $diff->format("%h hour %i minutes left");
}

// echo get_meal_remaining_time("Breakfast");
?>