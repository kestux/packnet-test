<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlbumGendre
 *
 * @ORM\Table(name="album_gendre")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AlbumGendreRepository")
 */
class AlbumGendre
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
     * @ORM\Column(name="album_id", type="integer")
     */
    private $albumId;

    /**
     * @var int
     *
     * @ORM\Column(name="gendre_id", type="integer")
     */
    private $gendreId;


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
     * Set albumId
     *
     * @param integer $albumId
     *
     * @return AlbumGendre
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

    /**
     * Set gendreId
     *
     * @param integer $gendreId
     *
     * @return AlbumGendre
     */
    public function setGendreId($gendreId)
    {
        $this->gendreId = $gendreId;

        return $this;
    }

    /**
     * Get gendreId
     *
     * @return int
     */
    public function getGendreId()
    {
        return $this->gendreId;
    }
}

