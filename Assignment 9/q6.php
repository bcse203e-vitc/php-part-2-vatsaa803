<?php
echo "Current Date and Time: " . date("d-m-Y H:i:s") . "<br>";
$dob = "1990-05-15";
$today = new DateTime();
$birth = new DateTime(date("Y") . "-" . date("m-d", strtotime($dob)));
if ($birth < $today) $birth->modify("+1 year");
$diff = $today->diff($birth);
echo "Days until next birthday: " . $diff->days;
?>

