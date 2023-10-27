<?php /* CONNEXION USER */
require_once SITE_ROOT . ('utils/database.php');

function connexionUsers($userMail, $userPass, $userId, $userUsername): string
{
    $userMail = $_POST['mail'];
    $userPass = $_POST['mdp'];


    $pdo = connectToDbAndGetPdo();
    $pdoStatement = $pdo->prepare("SELECT id, username FROM Users WHERE mail='$userMail' AND pass='$userPass';");
    $pdoStatement->execute();
    $loginInfos = $pdoStatement->fetch();
    if ($pdoStatement->rowCount() < 1) return "utilisateur introuvable";
    $userId = $loginInfos->id;

    if ($userId == null) {
        return 'Mail ou mot de passe incorrect ou inexistant';
    } else {
        $_SESSION["userID"] = $userId;

        $pdoGetFromSession = $pdo->prepare("SELECT username FROM Users WHERE id = :id");
        $pdoGetFromSession->execute([":id" => $_SESSION["userID"]]);
        $pseudo = $pdoGetFromSession->fetch();

        return "Bienvenu $pseudo->username !";
    }
}
