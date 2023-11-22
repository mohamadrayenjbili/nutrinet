
<?php

include '../../../controller/user.php';
include '../../../model/user.php';

// create an instance of the controller
$UserC = new UserC();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        isset($_POST["nom"]) &&
        isset($_POST["prenom"]) &&
        isset($_POST["adresse"]) &&
        isset($_POST["telephone"])
    ) {
        if (
            !empty($_POST['nom']) &&
            !empty($_POST["prenom"]) &&
            !empty($_POST["adresse"]) &&                                                                    
            !empty($_POST["telephone"])
        ) {
            $User = new User(
                null,
                $_POST['nom'],
                $_POST['prenom'],
                $_POST['adresse'],
                $_POST['telephone']
            );

            $UserC->updateUser($User,$_GET['idUser']);

            header('Location: billing.php');
            exit(); 
        } else {
            echo "All fields are required.";
        }
    }
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
    <input type="text" id="nom" name="nom" value="<?php echo $User['nom']; ?>" required><br>

    <label for="prenom">Prenom:</label>
    <input type="text" id="prenom" name="prenom" value="<?php echo $User['prenom']; ?>" required><br>

    <label for="adresse">Adresse:</label>
    <input type="text" id="adresse" name="adresse" value="<?php echo $User['adresse']; ?>" required><br>

    <label for="tel">Tel:</label>
    <input type="text" id="tel" name="tel" value="<?php echo $User['tel']; ?>" required><br>

    <input type="submit" value="Update User">
</form>

</body>
</html>
