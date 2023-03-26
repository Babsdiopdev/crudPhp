
<?php
    $user_id = $_GET['id'];
    if(isset($_POST['send'])){
        if(isset($_POST['nom'])&& isset($_POST['email'])&& $_POST['nom']!="" && $_POST['email'] !=""){
            include_once "connexion.php";
            extract($_POST);
          $sql = "UPDATE user SET nom = '$nom', email = '$email' Where user_id = $user_id";
          
          if(mysqli_query($conn, $sql)){
            header("location:voir.php");

          }else{
            header("location:voir.php?message=ModifyFail");
          }
        }else{
            header("location:voir.php?message=EmptyFields");
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
  
<?php 
include_once 'connexion.php';

//liste des infos de l user
$sql= "SELECT * FROM user where user_id = $user_id";

$result = mysqli_query($conn, $sql);

while($row =mysqli_fetch_assoc($result)){

?>
<form action="" method="post">
    <h1>Modifier</h1>
    <input type="text" name="nom"  value="<?=$row['nom']?>" placeholder="nom">
    <input type="email" name="email" value="<?=$row['email']?>" placeholder="email">
    <input type="submit" name="send" value="Modifier">
    <a class="link back" href="voir.php">annuler</a>
</form>
<?php
}
?>
</body>
</html>