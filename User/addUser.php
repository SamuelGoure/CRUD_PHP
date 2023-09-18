<?php
if (isset($_POST['send'])) {
    if (
        isset($_POST['user_name']) &&
        isset($_POST['user_email']) &&
        $_POST['user_name'] != "" &&
        $_POST['user_email'] != ""  // Il manquait un "isset" ici
    ) {
        include_once "../connect_db.php";
        extract($_POST);

        $sql = "INSERT INTO user (user_name, user_email) VALUES ('$user_name', '$user_email')";
        if (mysqli_query($conn, $sql)) {
            header("location:showUser.php");
        } else {
            header("location:addUser.php?message=AddFail");
        }
    } else {
        header("location:addUser.php?message=EmptyFields");
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Document</title>
</head>
<body>
    <header>
            <form action="" method="post">
                <h1>Ajouter un utilisateur</h1>
                <input type="text" placeholder="Username" name="texte">
                <input type="text" placeholder="Email"  name="email">
                <input type="submit" value="Ajouter"  name="send">
                <a href="showUser.php" class="link-cancel">Annuler</a>
            </form>
    </header>
</body>
</html>