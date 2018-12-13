<?php
include('Models/bdd.php');

function getAllGenre() {
    global $bdd;
    $genre = $bdd->query('SELECT * 
                          FROM genre');
    return $genre->fetchAll();
}//$genre = tous les genres

function getOneGenre($id) {
    global $bdd;
    $genre = $bdd->query('SELECT * 
                          FROM genre 
                          WHERE id='.$id.';');
    return $genre->fetch();
}//$genre = un genre

function getFilmGenre($film_id) {
    global $bdd;
    $genre = $bdd->query('SELECT * 
                          FROM genre 
                          INNER JOIN genre_film ON id_film = '. $film_id .' 
                          WHERE genre.id = genre_film.id_genre;');
    return $genre->fetchAll();
}//$genre = Tous les genres d'un film
?>