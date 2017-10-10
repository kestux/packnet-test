<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Gendre
 *
 * @ORM\Table(name="gendre")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GendreRepository")
 */
class Gendre
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var ArrayCollection<Album>|Album[]
     *
     * @ORM\ManyToMany(targetEntity="Album", inversedBy="gendres")
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
     * Set name
     *
     * @param string $name
     *
     * @return Gendre
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return ArrayCollection<Album>|Album[]
     */
    public function getAlbums()
    {
        return $this->albums;
    }

    /**
     * @param Album $album
     * @return Gendre
     */
    public function addAlbum(Album $album)
    {
        $this->albums->add($album);

        return $this;
    }
}

