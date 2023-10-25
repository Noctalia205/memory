<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('ADMIN_MAIL', 'mail@gmail.com');
define('PROJECT_FOLDER', '/memory/');
define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . PROJECT_FOLDER);

session_start();



function AfficheJoueursInscrits(): int
{
    $pdo = connectToDbAndGetPdo();
    $pdoStatement = $pdo->prepare('SELECT COUNT(id) AS JoueurInscrits FROM Users');
    $pdoStatement->execute();
    $results = $pdoStatement->fetch();
    return $results->JoueurInscrits;
}

function AffichePartiesJouees(): int
{
    $pdo = connectToDbAndGetPdo();
    $pdoStatement = $pdo->prepare('SELECT COUNT(id) AS PartiesJouees FROM Game');
    $pdoStatement->execute();
    $results2 = $pdoStatement->fetch();
    return $results2->PartiesJouees;
}

function AfficheJoueursConnectees(): int
{
    $pdo = connectToDbAndGetPdo();
    $pdoStatement = $pdo->prepare('SELECT COUNT(date_last_connection) AS JoueursConnectees FROM Users');
    $pdoStatement->execute();
    $results3 = $pdoStatement->fetch();
    return $results3->JoueursConnectees;
}

function AfficheTempsRecord(): int
{
    $pdo = connectToDbAndGetPdo();
    $pdoStatement = $pdo->prepare('SELECT COUNT(best_time) AS TempsRecord FROM Score');
    $pdoStatement->execute();
    $results4 = $pdoStatement->fetch();
    return $results4->TempsRecord;
}

/* FONCTION TABLE SCORE */

/*prendre la base de donnée SQL*/

function  recupereScorePageDeScore() {

    $pdo = connectToDbAndGetPdo();
    $pdoStatement = $pdo->prepare('SELECT Game.name_game, Users.username, Score.difficulties, Score.scoring, Score.id_player as id
    FROM Score
    INNER JOIN Game ON Score.id_game = Game.id
    INNER JOIN Users ON Score.id_player = Users.id
    ORDER BY Game.name_game ASC, Users.username ASC, Score.difficulties ASC;');
    $pdoStatement->execute();
    $Scores = $pdoStatement->fetchAll();
    return $Scores;
}