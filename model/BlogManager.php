<?php

$articles = array(
    0 => array(
        'id' => 1,
        'titre' => 'Un article'
    ),
    1 => array(
        'id' => 2,
        'titre' => 'Un deuxième article'
    ),
);

// Recupère tous les articles
function getAll(){
    return $GLOBALS['articles'];
}

// Recupère les infos d'un article via son id
function get($id){
    return $GLOBALS['articles'][$id - 1];
}

// Insère un nouvel article en BDD
function set($array){

}