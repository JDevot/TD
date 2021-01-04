<?php

require 'model/BlogManager.php';

function index(){
    $articles = getAll();
    require 'views/blog/index.php';
}

function lastArticles(){
    require 'views/blog/lastArticles.php';
}

function article($id){
    
}