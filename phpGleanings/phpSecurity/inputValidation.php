<?php

if (!isset($_POST['submit'])) {
    die('Unauthorized Access');
}

// Time format is UNIX timestamp or
// PHP strtotime compatible strings
function dateDiff($born, $now, $precision = 6)//precision is length of intervals array
{
    // Set timezone
    date_default_timezone_set("UTC");

    // If not numeric then convert texts to unix timestamps
    if (!is_int($born)) {
        $born = strtotime($born);
    }
    if (!is_int($now)) {
        $now = strtotime($now);
    }

    // If born is bigger than now
    // Then swap born and now
    if ($born > $now) {
        $tempT = $born;
        $born = $now;
        $now = $tempT;
    }

    // Set up intervals and diffs arrays
    $intervals = array('year', 'month', 'day', 'hour', 'minute', 'second');
    $diffs = array();

    // Loop through all intervals
    foreach ($intervals as $interval) {
        // Create temp time from born and interval
        $tempT = strtotime('+1 ' . $interval, $born);
        // Set initial values
        $add = 1;
        $looped = 0;
        // Loop until temp time is smaller than now
        while ($now >= $tempT) {
            // Create new temp time from born and interval
            $add++;
            $tempT = strtotime("+" . $add . " " . $interval, $born);
            $looped++;
        }

        $born = strtotime("+" . $looped . " " . $interval, $born);
        $diffs[$interval] = $looped;
    }

    $count = 0;
    $times = array();
    // Loop through all diffs
    foreach ($diffs as $interval => $value) {
        // Break if we have needed precision
        if ($count >= $precision) {
            break;
        }
        // Add value and interval
        // if value is bigger than 0
        if ($value > 0) {
            // Add s if value is not 1
            if ($value != 1) {
                $interval .= "s";
            }
            // Add value and interval to times array
            $times[] = $value . " " . $interval;
            $count++;
        }
    }
    // Return string with times
    return implode(", ", $times);

}

$year = $_POST['year'];
$month = $_POST['month'];
$day = $_POST['day'];
$name = $_POST['name'];
$born = $year . "-" . $month . "-" . $day;
$now = date("Y-m-d");

echo "$name you are " . dateDiff($born, $now) . " old";

