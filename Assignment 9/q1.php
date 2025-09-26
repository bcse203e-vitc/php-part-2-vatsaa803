<?php
$students = [
    "Rahul" => 85,
    "Priya" => 92,
    "Arun" => 78,
    "Meera" => 88,
    "Anita" => 91
];
arsort($students);
$top = array_slice($students, 0, 3, true);
?>
<table border="1" cellpadding="5" cellspacing="0">
    <tr><th>Rank</th><th>Name</th><th>Marks</th></tr>
    <?php
    $rank = 1;
    foreach ($top as $name => $marks) {
        echo "<tr><td>$rank</td><td>$name</td><td>$marks</td></tr>";
        $rank++;
    }
    ?>
</table>

