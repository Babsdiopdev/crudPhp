<?php
// $nom=$_POST['nom'];
// $email=$_POST['email'];
if(isset($_POST['send'])){
    if(isset($_POST['nom']) && isset($_POST['email']) 
    && $_POST['nom'] !="" && $_POST['email'] !="")
{
include_once 'connexion.php';
extract($_POST);
$sql= "INSERT INTO user(nom,email) VALUES ('$nom','$email')";
if(mysqli_query($conn, $sql)){
    header("location:voir.php");
}else{
    header("location:ajout.php?message=AddFail");
}
}
else{
    header("location:ajout.php?message=EmptyFields");
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="%PUBLIC_URL%/manifest.json" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
  
<form action="" method="post">
    <h1>Ajout</h1>
    <input type="text" name="nom" placeholder="nom">
    <input type="email" name="email" placeholder="email">
    <input type="submit" name="send" value="ajouter">
    <a class="link back" href="voir.php">annuler</a>
</form>
</body>
</html>