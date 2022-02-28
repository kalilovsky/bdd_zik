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
    if (isset($_POST["login"])){
        verifUser();
    }
    if(isset($_POST["register"])){
        registerUser();
    }   
    if (!isset($_SESSION)){
        require_once("./views/login.php");
    }else {
        $genre = loadCategory();
        require_once("./views/navigation.php");
        require_once("./views/home.php");
    }
    ?>    

</body>
</html>