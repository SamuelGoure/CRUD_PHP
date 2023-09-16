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
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Text</td>
                    <td>Text</td>
                    <td> <a href="modifyUser.php?id="><img src="../image/write.png" alt="" class="image pen"></a> </td>
                    <td> <a href="deleteUser.php?id="><img src="../image/remove.png"  alt="" class="image red"></a></td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>