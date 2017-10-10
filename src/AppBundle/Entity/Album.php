<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Album
 *
 * @ORM\Table(name="album")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AlbumRepository")
 */
class Album
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="artist", type="string", length=255, nullable=true)
     */
    private $artist;

    /**
     * @var int
     *
     * @ORM\Column(name="tracks_no", type="integer", nullable=true)
     */
    private $tracksNo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="year", type="date", nullable=true)
     */
    private $year;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", nullable=true)
     */
    private $price;

    /**
     * @var ArrayCollection<Gendre>|Gendre[]
     *
     * @ORM\ManyToMany(targetEntity="Gendre", inversedBy="albums")
     * @ORM\JoinTable(name="album_gendre")
     */
    private $gendres;

    /**
     * @var ArrayCollection<Person>|Person[]
     *
     * @ORM\ManyToMany(targetEntity="Person", inversedBy="albums")
     */
    private $persons;

    public function __construct()
    {
        $this->gendres = new ArrayCollection();
        $this->persons = new ArrayCollection();
    }

    /**
     * @return ArrayCollection<Gendre>|Gendre[]
     */
    public function getGendres()
    {
        return $this->gendres;
    }

    /**
     * @param Gendre $gendre
     *
     * @return Album
     */
    public function addGendre(Gendre $gendre)
    {
        $this->gendres->add($gendre);

        return $this;
    }

    /**
     * @return ArrayCollection<Person>|Person[]
     */
    public function getPersons()
    {
        return $this->persons;
    }

    /**
     * @param Person $person
     *
     * @return Album
     */
    public function setPersons(Person $person)
    {
        $this->persons->add($person);

        return $this;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Album
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set artist
     *
     * @param string $artist
     *
     * @return Album
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;

        return $this;
    }

    /**
     * Get artist
     *
     * @return string
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * Set tracksNo
     *
     * @param integer $tracksNo
     *
     * @return Album
     */
    public function setTracksNo($tracksNo)
    {
        $this->tracksNo = $tracksNo;

        return $this;
    }

    /**
     * Get tracksNo
     *
     * @return int
     */
    public function getTracksNo()
    {
        return $this->tracksNo;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     *
     * @return Album
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Set year
     *
     * @param \DateTime $year
     *
     * @return Album
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return \DateTime
     */
    public function getYear()
    {
        return $this->year;
    }
}

