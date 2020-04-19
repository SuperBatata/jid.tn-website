<?php 
/**
* 
*/
class events
{
    //acteur
	private $type;
    private $nameOrganisation;
    private $webSite;
    private $logo;
    private $presentation;
    // event
    private $title;
    private $start;
    private $end;
    private $description;
    private $duree;
    //eventPlace
    
    private $place;
    private $latitude;
    private $longetude;
    private $placeName;
    private $exactplace;
    private $eventLink;
    private $eventProgram;

    public function __construct($type, $nameOrganisation, $webSite, $logo, $presentation, $title, $start, $end, $description, $duree, $place, $latitude, $longetude, $placeName, $exactplace, $eventLink, $eventProgram)
    {
        $this->type = $type;
        $this->nameOrganisation = $nameOrganisation;
        $this->webSite = $webSite;
        $this->logo = $logo;
        $this->presentation = $presentation;
        $this->title = $title;
        $this->start = $start;
        $this->end = $end;
        $this->description = $description;
        $this->duree = $duree;
        $this->place = $place;
        $this->latitude = $latitude;
        $this->longetude = $longetude;
        $this->placeName = $placeName;
        $this->exactplace = $exactplace;
        $this->eventLink = $eventLink;
        $this->eventProgram = $eventProgram;
    }


    public function getType()
    {
        return $this->type;
    }


    public function setType($type)
    {
        $this->type = $type;
    }


    public function getNameOrganisation()
    {
        return $this->nameOrganisation;
    }


    public function setNameOrganisation($nameOrganisation)
    {
        $this->nameOrganisation = $nameOrganisation;
    }


    public function getWebSite()
    {
        return $this->webSite;
    }

    public function setWebSite($webSite)
    {
        $this->webSite = $webSite;
    }


    public function getLogo()
    {
        return $this->logo;
    }



    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    public function getPresentation()
    {
        return $this->presentation;
    }


    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;
    }


    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }


    public function getStart()
    {
        return $this->start;
    }


    public function setStart($start)
    {
        $this->start = $start;
    }


    public function getEnd()
    {
        return $this->end;
    }

    public function setEnd($end)
    {
        $this->end = $end;
    }


    public function getDescription()
    {
        return $this->description;
    }


    public function setDescription($description)
    {
        $this->description = $description;
    }


    public function getDuree()
    {
        return $this->duree;
    }


    public function setDuree($duree)
    {
        $this->duree = $duree;
    }


    public function getPlace()
    {
        return $this->place;
    }

    public function setPlace($place)
    {
        $this->place = $place;
    }


    public function getLatitude()
    {
        return $this->latitude;
    }


    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }


    public function getLongetude()
    {
        return $this->longetude;
    }


    public function setLongetude($longetude)
    {
        $this->longetude = $longetude;
    }


    public function getPlaceName()
    {
        return $this->placeName;
    }


    public function setPlaceName($placeName)
    {
        $this->placeName = $placeName;
    }


    public function getExactplace()
    {
        return $this->exactplace;
    }


    public function setExactplace($exactplace)
    {
        $this->exactplace = $exactplace;
    }


    public function getEventLink()
    {
        return $this->eventLink;
    }


    public function setEventLink($eventLink)
    {
        $this->eventLink = $eventLink;
    }


    public function getEventProgram()
    {
        return $this->eventProgram;
    }


    public function setEventProgram($eventProgram)
    {
        $this->eventProgram = $eventProgram;
    }
    // private $description;
    // private $duree;

    

}
