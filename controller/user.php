<?php

require __DIR__ . '/../config.php';
class UserC
{

    public function listUsers()
    {
        $sql = "SELECT * FROM User";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteUser($ide)
    {
        $sql = "DELETE FROM User WHERE idUser = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $ide);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }


    function addUser($User)
    {
        $sql = "INSERT INTO User  
        VALUES (NULL, :nom,:prenom, :adresse,:tel)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $User->getNom(),
                'prenom' => $User->getPrenom(),
                'adresse' => $User->getadresse(),
                'tel' => $User->getTel(),
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    function showUser($id)
    {
        $sql = "SELECT * from User where idUser = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $User = $query->fetch();
            return $User;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    function updateUser($User, $id)
    {   
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE User SET 
                    nom = :nom, 
                    prenom = :prenom, 
                    adresse = :adresse, 
                    tel = :tel
                WHERE idUser= :idUser'
            );
            
            $query->execute([
                'idUser' => $id,
                'nom' => $User->getNom(),
                'prenom' => $User->getPrenom(),
                'adresse' => $User->getadresse(),
                'tel' => $User->getTel(),
            ]);
            
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
