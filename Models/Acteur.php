<?php
include('Models/bdd.php');

function getAllActeur() {
    global $bdd;
    $acteur = $bdd->query('SELECT * 
                          FROM acteur');
    return $acteur->fetchAll();
}//$acteur = tous les acteurs

function getOneActeur($id) {
    global $bdd;
    $acteur = $bdd->query('SELECT * 
                          FROM acteur 
                          WHERE id='.$id.';');
    return $acteur->fetch();
}//$acteur = un acteur

function getFilmActeur($film_id) {
    global $bdd;
    $acteur = $bdd->query('SELECT * 
                          FROM acteur 
                          INNER JOIN acteur_film ON id_film = '. $film_id .' 
                          WHERE acteur.id = acteur_film.id_acteur;');
    return $acteur->fetchAll();
}//$acteur = Tous les acteurs d'un film
?>