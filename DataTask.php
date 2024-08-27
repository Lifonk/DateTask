<?php
$dateString = $_GET['date'];

if (is_numeric($dateString)) 
{
    $date = date('Y-m-d', $dateString);
}
else 
{
    $date = $dateString;
}

$year = date('Y', strtotime($date));
$month = date('F', strtotime($date));
$day = date('d', strtotime($date));

echo "$year год, $month, $day число";
?>