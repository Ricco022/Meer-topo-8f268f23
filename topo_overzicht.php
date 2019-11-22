<?php

$h = readline("Hoeveel landen wil je toevoegen?");

if (is_numeric($h)) {
    $landen = array();
} else {
    exit($h . " is geen getal, probeer het opnieuw");
}

for ($i=0; $i < $h; $i++) { 
    $land = readline("Welk land wil je toevoegen?");
    $steden = readline("Wat is de hoofdstad van " . $land . "?");
    $array = array(
        'land' => $land ,
        'stad' => $steden );
        array_push($landen, $array);
}

echo "De volgende landen en steden zitten in de database" . PHP_EOL;
foreach ($landen as $land) {
echo ($land['land'] .'' . "," . ' ');
echo ( $land['stad'] . PHP_EOL);
}

?>