<?php

$n = isset($_GET['n']) ? intval($_GET['n']) : 1;

if ($n > 0) {
    echo "<h1>Times Table for $n</h1>";
    echo "<ul>";
    for ($i = 1; $i <= 15; $i++) {
        $result = $i * $n;
        echo "<li>$i x $n = $result</li>";
    }
    echo "</ul>";
} else {
    echo "Please provide a valid number for the times table.";
}
?>