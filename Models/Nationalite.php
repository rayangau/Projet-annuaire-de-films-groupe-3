<?php
include('Models/bdd.php');

function getAllNationalite() {
    global $bdd;
    $nationalite = $bdd->query('SELECT * 
                                FROM nationalite');
    return $nationalite->fetchAll();
}//$nationalite = toute les nationalités

function getOneNationalite($id_film) {
    global $bdd;
    $nationalite = $bdd->query('SELECT * 
                                FROM nationalite
                                INNER JOIN film ON film.id_nationalite = nationalite.id 
                                WHERE film.id = '.$id_film.'');
    return $nationalite->fetch();
}//$nationalite = la nationalité du film

?>