<?php
function average($numbers) {
    if (empty($numbers)) throw new Exception("No numbers provided");
    return array_sum($numbers) / count($numbers);
}
try {
    $nums = [10, 20, 30, 40, 50];
    echo "Average: " . average($nums);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

