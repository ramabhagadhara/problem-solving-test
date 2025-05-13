<?php
function sloaneA000124($n) {
    $sequence = [1];
    for ($i = 1; $i < $n; $i++) {
        $sequence[] = ($i * ($i + 1)) / 2 + 1;
    }
    
    return $sequence;
}

$n = 7; 
$sequence = sloaneA000124($n);
echo "Output untuk n = $n: ";
echo "\n";
echo implode("-", $sequence);
echo "\n";
?>