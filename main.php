<?php

include "./interfaces/OperationSimple.php";
include "./interfaces/OperationAvancee.php";
include "./classes/Compte.php";
include "./classes/CompteCourant.php";
include "./classes/CompteEpargne.php";
include "./classes/Client.php";


$cc1 = new CompteCourant(1, 1000, 500);
$cc2 = new CompteCourant(2, 1000, 500);
$cc3 = new CompteCourant(3, 1000, 500);
$cc4 = new CompteCourant(4, 1000, 500);
$ce1 = new CompteEpargne(10, 1000, 10);
$ce2 = new CompteEpargne(20, 1000, 10);
var_dump($cc1->debiter(800)); // true
var_dump($cc1->debiter(800)); // false
var_dump($ce1->debiter(1000)); // true
var_dump($ce1->debiter(1)); // false
$ce1->crediter(100);
var_dump($ce1->debiter(1)); // true
var_dump($cc1->virement($ce1, 700));
echo "\n" . $ce1->getSolde();
echo "\n" . $cc1->getSolde();
$cc1->imprimer();
$ce1->imprimer();

$client = new Client(100, "Wick", "John");
$client2 = new Client(200, "Paul", "Paul");
var_dump($client);
var_dump($client->ajouterCompteCourant($cc1));
var_dump($client->ajouterCompteCourant($cc2));
var_dump($client->ajouterCompteCourant($cc3));
var_dump($client2->ajouterCompteCourant($cc4));
var_dump($client->ajouterCompteEpargne($ce1));
var_dump($client2->ajouterCompteEpargne($ce2));

$client->consulter();
$ce1->imprimer();
$ce1->ajouterInteret();
$ce1->imprimer();

var_dump($ce2->virement($cc4, 500)); // ça passe
var_dump($ce2->virement($cc3, 500)); // ça passe pas
