<?php


class Debat
{

            
    private $prenom;
    private $nom;
    private $telephone;
    private $email;
    // organisation
    private $nomOgranisation;
    private $emailOgranisation;
    private $logo;
    private $themeDebat;
    private $description;    
    private $nbrintervenant;
    private $duree;
    private $informationComplementaire;

    public function __construct($prenom, $nom, $telephone, $email, $nomOgranisation, $emailOgranisation, $logo, $themeDebat, $description, $nbrintervenant, $duree, $informationComplementaire)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->telephone = $telephone;
        $this->email = $email;
        $this->nomOgranisation = $nomOgranisation;
        $this->emailOgranisation = $emailOgranisation;
        $this->logo = $logo;
        $this->themeDebat = $themeDebat;
        $this->description = $description;
        $this->nbrintervenant = $nbrintervenant;
        $this->duree = $duree;
        $this->informationComplementaire = $informationComplementaire;
    }


    public function getPrenom()
    {
        return $this->prenom;
    }


    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }


    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;
    }


    public function getTelephone()
    {
        return $this->telephone;
    }


    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getNomOgranisation()
    {
        return $this->nomOgranisation;
    }


    public function setNomOgranisation($nomOgranisation)
    {
        $this->nomOgranisation = $nomOgranisation;
    }


    public function getEmailOgranisation()
    {
        return $this->emailOgranisation;
    }

    public function setEmailOgranisation($emailOgranisation)
    {
        $this->emailOgranisation = $emailOgranisation;
    }


    public function getLogo()
    {
        return $this->logo;
    }


    public function setLogo($logo)
    {
        $this->logo = $logo;
    }


    public function getThemeDebat()
    {
        return $this->themeDebat;
    }


    public function setThemeDebat($themeDebat)
    {
        $this->themeDebat = $themeDebat;
    }


    public function getDescription()
    {
        return $this->description;
    }


    public function setDescription($description)
    {
        $this->description = $description;
    }


    public function getNbrintervenant()
    {
        return $this->nbrintervenant;
    }


    public function setNbrintervenant($nbrintervenant)
    {
        $this->nbrintervenant = $nbrintervenant;
    }


    public function getDuree()
    {
        return $this->duree;
    }


    public function setDuree($duree)
    {
        $this->duree = $duree;
    }


    public function getInformationComplementaire()
    {
        return $this->informationComplementaire;
    }


    public function setInformationComplementaire($informationComplementaire)
    {
        $this->informationComplementaire = $informationComplementaire;
    }





}