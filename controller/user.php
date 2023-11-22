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

    function updateUser($id)
    {   
        try {
            $db = config::getConnexion();
            
            // Fetch the user by ID
            $selectQuery = $db->prepare('SELECT * FROM User WHERE idUser = :idUser');
            $selectQuery->execute(['idUser' => $id]);
            $user = $selectQuery->fetch(PDO::FETCH_ASSOC);
    
            // Check if the user exists
            if (!$user) {
                echo "User with ID $id not found";
                return;
            }
            
            // Update the user fields
            $updateQuery = $db->prepare(
                'UPDATE User SET 
                    nom = :nom, 
                    prenom = :prenom, 
                    adresse = :adresse, 
                    tel = :tel
                WHERE idUser = :idUser'
            );
            
            $updateQuery->execute([
                'idUser' => $id,
                'nom' => $user['nom'],
                'prenom' => $user['prenom'], 
                'adresse' => $user['adresse'],
                'tel' => $user['tel'],      
            ]);
            
            echo $updateQuery->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
}
