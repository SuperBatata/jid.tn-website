<?php 
/**
* 
*/
class contact
{
	//attribus
	private $sujet;
	private $email;
	private $nom;
	private $message;
//getter
	public function getSujet()
	{
		return $this->sujet;
	}
	public function getemail()
	{
		return $this->email;
	}
   public function getnom()
  {
    return $this->nom;
  }
  public function getmessage()
  {
    return $this->message;
  }
//setter
	public function setSujet($sujet)
	{
		return $this->$sujet;
	}
	public function setemail($email)
	{
		return $this->$email;
	}
	public function setnom($nom)
	{
		return $this->$nom;
	}
	public function setmessage($message)
	{
		return $this->$message;
	}

	public function __construct($sujet,$email,$nom,$message)
	{
		$this->sujet=$sujet;
		$this->email=$email;
        $this->nom=$nom;
        $this->message=$message;
	}
}
 ?>