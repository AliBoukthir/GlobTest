<?php

function foo($intervalles) {
    sort($intervalles);

    $resultat = [];

    foreach ($intervalles as $intervalle) {
        if ((count($resultat) === 0) || $intervalle[0] > $resultat[count($resultat) - 1][1]) {
            $resultat[] = $intervalle;
        } else {
            $resultat[count($resultat) - 1][1] = max($resultat[count($resultat) - 1][1], $intervalle[1]);
        }
    }

    return $resultat;
}

// l'appel de la fonction, avec un jeu de test en entrée

$test1 = foo([[0, 3], [6, 10]]);
$test2 = foo([[0, 5], [3, 10]]);	
$test3 = foo([[0, 5], [2, 4]]);	
$test4 = foo([[7, 8], [3, 6], [2, 4]]);
$test5 = foo([[3, 6], [3, 4], [15, 20], [16, 17], [1, 4], [6, 10], [3, 6]])	;

// l'affichage du résultat en sortie

echo "Le résultat de l'appel : foo([[0, 3], [6, 10]]) est : \n";
print_r($test1);

echo "\nLe résultat de l'appel : foo([[0, 5], [3, 10]]) est : \n";
print_r($test2);

echo "\nLe résultat de l'appel : foo([[0, 5], [2, 4]]) est : \n";
print_r($test3);

echo "\nLe résultat de l'appel : foo([[7, 8], [3, 6], [2, 4]]) est : \n";
print_r($test4);

echo "\nLe résultat de l'appel : foo([[3, 6], [3, 4], [15, 20], [16, 17], [1, 4], [6, 10], [3, 6]]) est : \n";
print_r($test5);
