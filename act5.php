<?php
for ($i = 1; $i <= 10; $i++) {
    echo "2 x $i = " . (2 * $i) . "\n";
}

$i = 1;
while ($i <= 10) {
    echo "2 x $i = " . (2 * $i) . "\n";
    $i++;
}

$i = 1;
do {
    echo "2 x $i = " . (2 * $i) . "\n";
    $i++;
} while ($i <= 10);
?>