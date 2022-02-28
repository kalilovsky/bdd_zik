<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./ressources/styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Base données musicale</title>
</head>

<body>

    <?php


    require_once('./model/model.php');
    session_start();

    if (isset($_POST["login"])) {
        verifUser();
    }
    if (isset($_POST["register"])) {
        registerUser();
    }
    if (!isset($_SESSION["mail"])) {
        require_once("./views/login.php");
    } else {
        require_once("./views/navigation.php");
        if (isset($_GET["currentPage"])) {
            $_SESSION["currentPage"] = $_GET["currentPage"];
            $_SESSION["selectedGenre"] = $_GET["selectedGenre"];
            $_SESSION["critere"] = $_POST["critere"];
            $_SESSION["keyword"] = $_POST['keyword'];
        }
        if (isset($_SESSION["currentPage"])) {
            switch ($_SESSION["currentPage"]) {
                case "home":
                    $genre = loadCategory();
                    require_once("./views/home.php");
                    break;
                case "showSongsByCat":
                    $result = showByGenre();
                    require_once("./views/songbygenre.php");
                    break;
                case "search":
                    switch ($_SESSION["critere"]){
                        case "all":
                            $result = searchByAll();
                            require_once("./views/songbygenre.php");
                            break; 
                        case "genre":
                            $result = searchByGenre();
                            require_once("./views/songbygenre.php");
                            break;                            
                        case "auteur":
                            $result = searchByAuthor();
                            require_once("./views/songbygenre.php");
                            break;
                        case "titre":
                            $result = searchByTitle();
                            require_once("./views/songbygenre.php");
                            break;
                        }
                    break;
            }
        }
    }


    ?>

</body>

</html>