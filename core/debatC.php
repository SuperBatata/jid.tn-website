<?php

require_once (dirname(__DIR__).'/config.php');

class debatC
{
    public function afficherdebat()
    {
        $sql = "SELECT * FROM jid.debat";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    public function ajouterdebat($a)
    {
        $sql = "INSERT INTO jid.debat ( `prenom`, `nom`, `telephone`, `email`, `nomOgranisation`, `emailOgranisation`, `logo`, `themeDebat`, `description`, `nbrintervenant`, `duree`, `informationComplementaire`)
         VALUES 
         (:prenom,:nom, :telephone, :email, :nomOgranisation, :emailOgranisation, :logo, :themeDebat,:descriptions, :nbrintervenant, :duree, :informationComplementaire);";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':prenom',$a->getPrenom());
        $req->bindValue(':nom',$a->getNom());
        $req->bindValue(':telephone',$a->getTelephone());
        $req->bindValue(':email',$a->getEmail());
        $req->bindValue(':nomOgranisation',$a->getNomOgranisation());
        $req->bindValue(':emailOgranisation',$a->getEmailOgranisation());
        $req->bindValue(':logo',$a->getLogo());
        $req->bindValue(':themeDebat',$a->getThemeDebat());
        $req->bindValue(':duree',$a->getDuree());
        $req->bindValue(':descriptions',$a->getDescription());
        $req->bindValue(':nbrintervenant',$a->getNbrintervenant());
        $req->bindValue(':informationComplementaire',$a->getInformationComplementaire());

        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    public function supprimerdebat($id)
    {
        $sql="DELETE FROM jid.debat where (`id_debat`=:id_debat)";
        $db=config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_debat',$id);
        $req->execute();
    }


}