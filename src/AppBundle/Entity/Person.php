<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table(name="person")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PersonRepository")
 */
class Person
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
     * @var ArrayCollection<Album>|Album[]
     *
     * @ORM\ManyToMany(targetEntity="Album", inversedBy="persons")
     * @ORM\JoinTable(name="person_album")
     */
    private $albums;

    public function __construct()
    {
        $this->albums = new ArrayCollection();
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
     * @return Person
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
     * @param Album $album
     *
     * @return Person
     */
    public function addAlbum(Album $album)
    {
        $this->albums->add($album);

        return $this;
    }

    /**
     * @return ArrayCollection<Album>|Album[]
     */
    public function getAlbums()
    {
        return $this->albums;
    }
}

