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

function AfficheNomUtilisateurScore(): string
{
    $pdo = connectToDbAndGetPdo();
    $pdoStatement = $pdo->prepare('SELECT COUNT(username) AS NomUtilisateur FROM users');
    $pdoStatement->execute();
    $results5 = $pdoStatement->fetch();
    return $results5->TempsRecord;
}




function isMailExist($mail): bool
{
    $pdo = connectToDbAndGetPdo();
    $pdoisMailValid = $pdo->prepare('SELECT mail FROM Users WHERE mail = :mail');
    $pdoisMailValid->execute([':mail' => "$mail"]);
    return $pdoisMailValid->rowCount() > 0;
}

function isPseudoExist($pseudo): bool
{
    $pdo = connectToDbAndGetPdo();
    $pdoisPseudoValid = $pdo->prepare('SELECT username FROM Users WHERE username = :pseudo');
    $pdoisPseudoValid->execute([':pseudo' => "$pseudo"]);
    return $pdoisPseudoValid->rowCount() > 0;
}


/* FONCTION INSERER UTILISATEUR */

function InsererUnUtilisateur($pseudo, $mail, $password)
{
    $pdo = connectToDbAndGetPdo();
    $pdoStatement = $pdo->prepare("INSERT INTO Users (mail, pass, username, date_sign_up, date_last_connection) VALUES (:mail, :pass, :username, NOW(), NOW())");
    $pdoStatement->execute([
        ':mail' => $mail,
        ':pass' => password_hash($password, PASSWORD_DEFAULT),
        ':username' => $pseudo,
    ]);
}