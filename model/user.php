<?php
class User
{
    private ?int $idUser = null;
    private ?string $nom = null;
    private ?string $prenom = null;
    private ?string $adresse = null;
    private ?string $tel = null;

    public function __construct($id = null, $n, $p, $a, $d)
    {
        $this->idUser = $id;
        $this->nom = $n;
        $this->prenom = $p;
        $this->adresse = $a;
        $this->tel = $d;
    }


    public function getIdUser()
    {
        return $this->idUser;
    }


    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }


    public function getPrenom()
    {
        return $this->prenom;
    }


    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }


    public function getadresse()
    {
        return $this->adresse;
    }


    public function setadresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }


    public function getTel()
    {
        return $this->tel;
    }


    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }
}
