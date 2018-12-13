<?php
include('Models/bdd.php');

function getAllFilm() {
    global $bdd;
    $film = $bdd->query('SELECT * 
                         FROM film');
    return $film->fetchAll();
}//$film = tous les films

function getOneFilm($id) {
    global $bdd;
    $film = $bdd->query('SELECT * 
                         FROM film 
                         WHERE id='.$id.';');
    return $film->fetch();
}//$film = 1 film
?>