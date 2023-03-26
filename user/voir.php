<!-- <?php 
require("connexion.php")
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="manifest" href="%PUBLIC_URL%/manifest.json" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <main>
        <div class="link-container">
     <a class="link" href="ajout.php" id='membre'>Nouveau Membre</a>
        </div>
        <table class="table">
            <?php 
            include_once 'connexion.php';
            //liste des users
            $sql = "SELECT * FROM user";

            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) >0){

          
            ?>
            <thead>
                <tr>
                <th>#</th>
                    <th>Nom</th>
                    <th>email</th>
                    <th>Modifier</th>
                    <th>supprime</th>
                </tr>
            </thead>
            <tbody>
<?php 
while($row = mysqli_fetch_assoc($result)){
             
           ?>     
           <tr>
           <td><?=$row['user_id']?></td>
            <td><?=$row['nom']?></td>
            <td><?=$row['email']?></td>
            <td><a href="modifier.php?id=<?=$row['user_id']?>">Modifier</td>
            <td><a href="supp.php?id=<?=$row['user_id']?>">supprimer</td>
          
        </tr>
             
        <?php
            }
        }
        else{
            echo "<p class='alert alert-primary'>0 utilisateur present !</p>";      
     }
        ?>
            </tbody>
        </table>
    </main>
</body>
</html>