<?php
    include "../../../controller/user.php";

    $userId = isset($_GET["idUser"]) ? $_GET["idUser"] : (isset($_POST["idUser"]) ? $_POST["idUser"] : null);

    if($userId) {
        $user = new UserC();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $user->updateUser($userId);
        }

        $userController = new UserC();
        $user = $userController->showUser($userId);
    } else {
        echo "Error: User ID is not provided.";
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>
<body>

<form action="updateUser.php?idUser=<?php echo $userId; ?>" method="post">
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" value="<?php echo $user['nom']; ?>" required><br>

    <label for="prenom">Prenom:</label>
    <input type="text" id="prenom" name="prenom" value="<?php echo $user['prenom']; ?>" required><br>

    <label for="adresse">Adresse:</label>
    <input type="text" id="adresse" name="adresse" value="<?php echo $user['adresse']; ?>" required><br>

    <label for="tel">Tel:</label>
    <input type="text" id="tel" name="tel" value="<?php echo $user['tel']; ?>" required><br>

    <input type="submit" value="Update User">
</form>

</body>
</html>
