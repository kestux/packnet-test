<?php

namespace AppBundle\Service;

use AppBundle\Repository\AlbumRepository;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class to do all the dependency management work to leave actions in Album controller as clean as possible
 * to avoid unit testing it
 */
class AlbumService
{
    /**
     * Persistence layer manager
     *
     * @var ObjectManager
     */
    private $om;

    /**
     * @var AlbumRepository
     */
    private $albumRepo;

    /**
     * @param ObjectManager $objectManager
     */
    public function __construct(ObjectManager $objectManager)
    {
        $this->om = $objectManager;
        $this->albumRepo = $this->om->getRepository('AppBundle:Album');
    }


}