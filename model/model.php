<?php
function dbConnect()
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=projet_zik_khan;charset=utf8', 'khalil', 'root');
        return $db;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

function verifUser(){
    //proteger les donnés utilisateur introduites
    $db = dbConnect();
    $mail = $db->quote($_POST["pseudo"]);
    $mdp = $db->quote($_POST["mdp"]);
    $selectSql = "SELECT * FROM users WHERE email = {$mail} AND pwd = {$mdp}";
    $querySql = $db->query($selectSql);
     if($querySql->rowCount() > 0){
        $resultSql = $querySql->fetch(PDO::FETCH_ASSOC);
        session_start();
        $_SESSION["mail"] = $resultSql["email"];
        $_SESSION["firstname"] = $resultSql["firstname"];
        $_SESSION["lastname"] = $resultSql["lastname"];
        $_SESSION["photo"] = $resultSql["photo"];
        $_SESSION["iduser"] = $resultSql["idUser"];
        $_SESSION["currentPage"]="home";
     }else{
         $_SERVER["erreur"] = "Email ou mot de passe erroné";
     }
}
function registerUser(){
    $db = dbConnect();
    $firstName = $db->quote($_POST["nom"]);
    $lastName = $db->quote($_POST["prenom"]);
    $email = $db->quote($_POST["email"]);
    $mdp = $db->quote($_POST["mdp"]);
    $insertSql = "SELECT * FROM users WHERE email = {$email} ";
    $querySql = $db->query($insertSql);
    if (!$querySql->rowCount()>0){
    $insertSql2 = "INSERT INTO users(firstname,lastname,email,pwd,photo) VALUES ({$firstName},{$lastName},{$email},{$mdp},'default')";
    $querySql2 = $db->prepare($insertSql2);
    $querySql2->execute();

    $querySql = $db->query($insertSql);
    $resultSql = $querySql->fetch(PDO::FETCH_ASSOC);
    session_start();
    $_SESSION["mail"] = $_POST["email"];
    $_SESSION["firstname"] = $_POST["nom"];
    $_SESSION["lastname"] = $_POST["prenom"];
    $_SESSION["photo"] = "default";
    $_SESSION["idUser"] = $resultSql["idUser"];
    $_SESSION["currentPage"]="home";
    } else {
        $_SERVER["erreur"] = "Utilisateur déja présent.";
    }
    


}
function loadCategory(){
    $db = dbConnect();
    $selectSql = "SELECT * FROM genre";
    $querySql = $db->query($selectSql);
    $resultSql = $querySql->fetchAll(PDO::FETCH_ASSOC);
    return $resultSql;
}


function showByGenre(){
    $result = loadByGenre();
    return $result;
}
function loadByGenre(){
    $db = dbConnect();
    $selectSql = "SELECT idMusic,title,Genre,auteur FROM music INNER JOIN genre ON music.idGenre=genre.idGenre WHERE music.idGenre = {$_SESSION["selectedGenre"]}";
    $querySql = $db->query($selectSql);
    $resultSql = $querySql->fetchAll(PDO::FETCH_ASSOC);
    return $resultSql;
}

function searchByTitle(){
    $db = dbConnect();
    $keyword = "%".$_SESSION["keyword"]."%";
    $keyword = $db->quote($keyword);
    $selectSql = "SELECT idMusic,title,Genre,auteur FROM music INNER JOIN genre ON music.idGenre=genre.idGenre WHERE title LIKE {$keyword}";
    $querySql = $db->query($selectSql);
    $resultSql = $querySql->fetchAll(PDO::FETCH_ASSOC);
    return $resultSql;
}
function searchByAuthor(){
    $db= dbConnect();
    $keyword = "%".$_SESSION["keyword"]."%";
    $keyword = $db->quote($keyword);
    $selectSql = "SELECT idMusic,title,Genre,auteur FROM music INNER JOIN genre ON music.idGenre=genre.idGenre WHERE auteur LIKE {$keyword}";
    $querySql = $db->query($selectSql);
    $resultSql = $querySql->fetchAll(PDO::FETCH_ASSOC);
    return $resultSql;
}
function searchByGenre(){
    $db= dbConnect();
    $keyword = "%".$_SESSION["keyword"]."%";
    $keyword = $db->quote($keyword);
    $selectSql = "SELECT idMusic,title,Genre,auteur FROM music INNER JOIN genre ON music.idGenre=genre.idGenre WHERE Genre LIKE {$keyword}";
    $querySql = $db->query($selectSql);
    $resultSql = $querySql->fetchAll(PDO::FETCH_ASSOC);
    return $resultSql;
}
function searchByAll(){
    $db= dbConnect();
    $keyword = "%".$_SESSION["keyword"]."%";
    $keyword = $db->quote($keyword);
    $selectSql = "SELECT idMusic,title,Genre,auteur FROM music INNER JOIN genre ON music.idGenre=genre.idGenre WHERE Genre LIKE {$keyword} OR title LIKE {$keyword} OR auteur LIKE {$keyword}";
    $querySql = $db->query($selectSql);
    $resultSql = $querySql->fetchAll(PDO::FETCH_ASSOC);
    return $resultSql;
}