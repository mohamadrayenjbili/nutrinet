<?php
    include "../../../controller/user.php";
    $user = new UserC();
    $user->deleteUser($_GET["idUser"]);
    header('Location:billing.php');

        