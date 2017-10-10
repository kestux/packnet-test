<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonAlbum
 *
 * @ORM\Table(name="person_album")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PersonAlbumRepository")
 */
class PersonAlbum
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
     * @var int
     *
     * @ORM\Column(name="person_id", type="integer")
     */
    private $personId;

    /**
     * @var int
     *
     * @ORM\Column(name="album_id", type="integer")
     */
    private $albumId;


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
     * Set personId
     *
     * @param integer $personId
     *
     * @return PersonAlbum
     */
    public function setPersonId($personId)
    {
        $this->personId = $personId;

        return $this;
    }

    /**
     * Get personId
     *
     * @return int
     */
    public function getPersonId()
    {
        return $this->personId;
    }

    /**
     * Set albumId
     *
     * @param integer $albumId
     *
     * @return PersonAlbum
     */
    public function setAlbumId($albumId)
    {
        $this->albumId = $albumId;

        return $this;
    }

    /**
     * Get albumId
     *
     * @return int
     */
    public function getAlbumId()
    {
        return $this->albumId;
    }
}

