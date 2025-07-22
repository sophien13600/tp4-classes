<?php
include "./OperationAvancee.php";
include "./OperationSimple.php";
include "./Compte.php";
include "./CompteCourant.php";
include "./CompteEpargne.php";
include "./Client.php";

$cc1 = new CompteCourant(1, 1000, 500);
$ce1= new CompteCourant(10, 1000, 50);
var_dump($cc1->debiter(800)); // true
var_dump($cc1->debiter(800)); // false
$cc1 = new CompteCourant(1, 1000, 500);
$ce1 = new CompteEpargne(10, 1000, 10);
var_dump($ce1->debiter(1000)); // true
var_dump($ce1->debiter(1)); // false
$ce1->crediter(100);
var_dump($ce1->debiter(1)); // true