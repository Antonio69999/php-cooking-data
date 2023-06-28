<?php

// $dico = file("dictionnaire.txt", FILE_IGNORE_NEW_LINES);

// // $dico = explode("\n", $string);

// var_dump($dico);


//How much words : 336 532
// $count = 0;
// foreach ($dico as $valeur)
// {
//     $count++;
// }
// echo $count;

// //Word lenght > 15 = 13 617

// $filterWords = array_filter($dico, function ($word) {
//     $word = trim($word); //trim supprime les caracteres invisibles

//     return strlen($word) > 15; //check words w/ more than 15 char

// });

// $count2 = 0;

// foreach($filterWords as $word) {    //compteur 
//     $count2++;
// }

// echo $count2;

// Words containing "w" = 537

// $compt = 0;

// foreach ($dico as $word) {
//     if (strpos($word, 'w') !== false) {
//         $compt++;
//     }
// }

// echo ($compt);

//Words ending w/ "q" = 

// $compt = 0;

// foreach ($dico as $word) {
//     if (str_ends_with($word, 'q')) {
//         $compt++;
//     }
// }

// echo ($compt);

$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH); //using fle_get_contents function -> read json contents and store it in $string
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"]; # liste de films retrive array of films and store it in the variable $top

// var_dump($top[0]);
// //test:learn
// foreach ($top as $film) {
//     $title = $film["title"]["label"];
//     echo "Title : $title" . PHP_EOL;
// }

//sort movies by specific criterion 


foreach ($top10 as $film) {
    $title = $film["title"]["label"];
    echo "Title: $title";
}

?>