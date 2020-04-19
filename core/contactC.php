<?php
 
require_once (dirname(__DIR__).'/config.php');

class contactC
{
	
	public function affichercontact()
	{
		$sql = "SELECT * FROM jid.contact";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	public function ajoutercontact($a)
	{
		$sql = "INSERT INTO jid.contact ( `sujet`, `email`,`nom`,`message`) VALUES (:sujet,:email,:nom,:msg);";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':sujet',$a->getSujet());
		$req->bindValue(':email',$a->getemail());
		$req->bindValue(':nom',$a->getnom());
		$req->bindValue(':msg',$a->getmessage());
		try{
		$req->execute();
	}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	public function supprimercontact($id)
	{
		$sql="DELETE FROM jid.contact where (`id_contact`=:id_contact)";
		$db=config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id_contact',$id);
		$req->execute();
	}

	// public function Recupercontact($id_contact){
	// 	$sql="SELECT * from contact where (id_contact=$id_contact)";
	// 	$db = config::getConnexion();
	// 	try{
	// 	$liste=$db->query($sql);
	// 	return $liste;
	// 	}
    //     catch (Exception $e){
    //         die('Erreur: '.$e->getMessage());
    //     }
	// }
}
 ?>