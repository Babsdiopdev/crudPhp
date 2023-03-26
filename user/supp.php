   <?php
    $user_id = $_GET['id'];
    include_once 'connexion.php';
    $sql = "DELETE FROM user where user_id = $user_id ";
    if (mysqli_query($conn, $sql)) {
        header("location:voir.php");
    } else {
        header("location:voir.php");
    }
    ?>