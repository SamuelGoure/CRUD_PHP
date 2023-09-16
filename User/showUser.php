<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css"> 
    <title>Document</title>
</head>
<body>
    <main>
        <a href="addUser.php" class="add">Ajouter un utilisateur</a>
        <table>
            <thead>
              <?php
               include_once "../connect_db.php";
               
               // liste des utilisateurs

               $sql = "SELECT * FROM user";
               $result = mysqli_query($conn, $sql);
               if(mysqli_num_rows($result) > 0) {
                   // afficher les resultats
               ?>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($row = mysqli_fetch_assoc($result)) { 
                ?>
                <tr>
                    <td> <?= $row['user_name'] ?></td>
                    <td> <?= $row['user_email'] ?> </td>
                    <td> <a href="modifyUser.php?id= <?=$row['user_id']  ?> "><img src="../image/write.png" alt="" class="image pen"></a> </td>
                    <td> <a href="deleteUser.php?id= <?=$row['user_id']  ?> "><img src="../image/remove.png"  alt="" class="image red"></a></td>
                </tr>
                <?php 
                  }
                } else {
                    echo "<p class='message'>0 Utilisateur présent !</p>";
                }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>
