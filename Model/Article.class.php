<?php
namespace App\Model;

use App\Core\SQL;

class Article extends SQL
{

    protected $id = null;
    protected $title;
    protected $image;
    protected $headerImage;
    protected $introduction;
    protected $description;
    protected $lastMod ;
    protected $language ;
    protected $keywords ;
    protected $numVisit ;
    protected $idTheme ;
    protected $idUser ;
    protected $idHost ;

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * @return mixed
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getHeaderImage()
    {
        return $this->headerImage;
    }

    /**
     * @param mixed $headerImage
     */
    public function setHeaderImage($headerImage): void
    {
        $this->headerImage = $headerImage;
    }

    /**
     * @return mixed
     */
    public function getIntroduction()
    {
        return $this->introduction;
    }

    /**
     * @param mixed $introduction
     */
    public function setIntroduction($introduction): void
    {
        $this->introduction = $introduction;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getLastMod()
    {
        return $this->lastMod;
    }

    /**
     * @param mixed $lastMod
     */
    public function setLastMod($lastMod): void
    {
        $this->lastMod = $lastMod;
    }

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param mixed $language
     */
    public function setLanguage($language): void
    {
        $this->language = $language;
    }

    /**
     * @return mixed
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param mixed $keywords
     */
    public function setKeywords($keywords): void
    {
        $this->keywords = $keywords;
    }

    /**
     * @return mixed
     */
    public function getNumVisit()
    {
        return $this->numVisit;
    }

    /**
     * @param mixed $numVisit
     */
    public function setNumVisit($numVisit): void
    {
        $this->numVisit = $numVisit;
    }

    /**
     * @return mixed
     */
    public function getIdTheme()
    {
        return $this->idTheme;
    }

    /**
     * @param mixed $idTheme
     */
    public function setIdTheme($idTheme): void
    {
        $this->idTheme = $idTheme;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param mixed $idUser
     */
    public function setIdUser($idUser): void
    {
        $this->idUser = $idUser;
    }

    /**
     * @return mixed
     */
    public function getIdHost()
    {
        return $this->idHost;
    }

    /**
     * @param mixed $idHost
     */
    public function setIdHost($idHost): void
    {
        $this->idHost = $idHost;
    }


    public function select():array
    {
        return parent::selectAll();
    }

}