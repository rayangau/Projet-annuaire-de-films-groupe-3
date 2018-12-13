<?php
include('Models/bdd.php');

function getFilmRecompense($film_id) {
    global $bdd;
    $recompense = $bdd->query('SELECT * 
                          FROM recompense 
                          INNER JOIN recompense_film ON id_film = '. $film_id .' 
                          WHERE recompense.id = recompense_film.id_recompense;');
    return $recompense->fetchAll();
}//$recompense = Tous les récompenses d'un film

function getActeurRecompense($acteur_id) {
    global $bdd;
    $recompense = $bdd->query('SELECT * 
                          FROM recompense 
                          INNER JOIN recompense_acteur ON id_acteur = '. $acteur_id .' 
                          WHERE recompense.id = recompense_acteur.id_recompense;');
    return $recompense->fetchAll();
}//$recompense = Tous les récompenses d'un acteur

function getRealisateurRecompense($realisateur_id) {
    global $bdd;
    $recompense = $bdd->query('SELECT * 
                          FROM recompense 
                          INNER JOIN recompense_realisateur ON id_realisateur = '. $realisateur_id .' 
                          WHERE recompense.id = recompense_realisateur.id_recompense;');
    return $recompense->fetchAll();
}//$recompense = Tous les récompenses d'un realisateur
?>