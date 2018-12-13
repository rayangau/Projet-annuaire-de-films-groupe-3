<?php
include('Models/bdd.php');

function getAllRealisateur() {                                                                              // print_r(getAllrealisateur()); Commande pour echo la fonction getallrealisaeur
    global $bdd;
    $realisateur = $bdd->query('SELECT * FROM realisateur');
    return $realisateur->fetchAll(); 
}//$realisateur = tous les realisateurs

function getOneRealisateur($id) {
    global $bdd;
    $realisateur = $bdd->query('SELECT * 
                                FROM realisateur 
                                WHERE id='.$id.';');
    return $realisateur->fetch();
}//$realisateur = Un realisateur

function getFilmRealisateur($film_id) {
    global $bdd;
    $realisateur = $bdd->query('SELECT * 
                                FROM realisateur 
                                INNER JOIN realisateur_film ON id_film = '. $film_id .' 
                                WHERE realisateur.id = realisateur_film.id_realisateur;');
    return $realisateur->fetchAll();
}//$realisateur = Tous les realisateurs d'un film
?>