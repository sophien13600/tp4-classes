<?php

include "./OperationSimple.php";
include "../achref/OperationAvancee.php";
include "../achref/classes/Compte.php";
include "../achref/CompteCourant.php";
include "../achref/classes/CompteEpargne.php";


$cc1 = new CompteCourant(1, 1000, 500);
$ce1 = new CompteEpargne(10, 1000, 10);
var_dump($cc1->debiter(800)); // true
var_dump($cc1->debiter(800)); // false
var_dump($ce1->debiter(1000)); // true
var_dump($ce1->debiter(1)); // false
$ce1->crediter(100);
var_dump($ce1->debiter(1)); // true
var_dump($cc1->virement($ce1, 700));
echo "\n" . $ce1->getSolde();
echo "\n" . $cc1->getSolde();