<?php

$allScores = [];

function denseRanking($scores) {
    global $allScores;
    foreach ($scores as $score) {
        $allScores[] = $score;
    }

    $sortedScores = $allScores;

    rsort($sortedScores);
    $uniqueScores = array_values(array_unique($sortedScores));
    
    $ranks = [];
    foreach ($scores as $score) {
        $rank = array_search($score, $uniqueScores) + 1;
        $ranks[] = $rank;
    }
    
    return $ranks;
}

$scores = [100,100,50,40,40,20,10 ];
$ranks = denseRanking($scores);

echo "Scores: " . implode(", ", $scores) . "\n";
echo "Dense Ranks: " . implode(", ", $ranks) . "\n";

$scores = [5,25,50,120];
$ranks = denseRanking($scores);

echo "Scores: " . implode("," , $scores) . "\n";
echo "Dense Ranks: " . implode("," , $ranks) . "\n";
?>