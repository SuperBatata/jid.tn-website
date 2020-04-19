<?php

require_once (dirname(__DIR__).'/config.php');

class eventC
{
    public function afficherevent()
    {
        $sql = "SELECT * FROM jid.events";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    public function affichereventacc()
    {
        $sql = "SELECT * FROM jid.events WHERE accepter=1";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    public function affichereventparid($id)
    {
        $sql = "SELECT * FROM jid.events WHERE id=".$id;
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    
    public function updateevent($a)
    {
        $sql = "UPDATE jid.events SET accepter=1 WHERE id=:id";
    	$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id',$a);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }    }
	

    public function ajouterevent($a)
    {
        $sql = "INSERT INTO jid.events ( `title`, `start_event`, `end_event`, `typeOrg`, `nameOrganisation`, `webSite`, `logo`, `presentation`, `descriptionevent`, `duree`, `place`, `latitude`, `longetude`, `placeName`, `exactplace`, `eventLink`, `eventProgram`) VALUES (:title ,:start_event ,:end_event ,:typeOrg ,:nameOrganisation ,:webSite ,:logo ,:presentation ,:descriptionevent ,:duree ,:place ,:latitude ,:longetude ,:placeName ,:exactplace ,:eventLink ,:eventProgram);";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':title',$a->getTitle());
        $req->bindValue(':start_event',$a->getStart());
        $req->bindValue(':end_event',$a->getEnd());
        $req->bindValue(':typeOrg',$a->getType());
        $req->bindValue(':nameOrganisation',$a->getNameOrganisation());
        $req->bindValue(':webSite',$a->getWebSite());
        $req->bindValue(':descriptionevent',$a->getDescription());
        $req->bindValue(':logo',$a->getLogo());
        $req->bindValue(':presentation',$a->getPresentation());
        $req->bindValue(':duree',$a->getDuree());
        $req->bindValue(':place',$a->getPlace());
        $req->bindValue(':latitude',$a->getLatitude());
        $req->bindValue(':longetude',$a->getLongetude());
        $req->bindValue(':placeName',$a->getPlaceName());
        $req->bindValue(':exactplace',$a->getExactplace());
        $req->bindValue(':eventLink',$a->getEventLink());
        $req->bindValue(':eventProgram',$a->getEventProgram());

        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    public function supprimerevent($id)
    {
        $sql="DELETE FROM jid.event where (`id_event`=:id_event)";
        $db=config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_event',$id);
        $req->execute();
    }


}