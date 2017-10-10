<?php
/**
 * Created by PhpStorm.
 * User: kestutiskacinskas
 * Date: 10/10/2017
 * Time: 09:29
 */

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\Album;
use AppBundle\Entity\Gendre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class GendreFixtures extends Fixture
{

    public function load(ObjectManager $om)
    {
        $gendres = array_map(
            [$this, 'createGendre'],
            ['first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eight', 'ninth', 'tenth']
        );

        /** @var Album[] $albums */
        $albums = $om->getRepository('AppBundle:Album')->findAll();

        /** @var Gendre $gendre */
        foreach ($gendres as $gendre) {
            for ($i = 0; $i < 3; $i ++) {
                $album = $albums[array_rand($albums)];
                $album->addGendre($gendre);
                $om->persist($album);

                $gendre->addAlbum($album);
            }

            $om->persist($gendre);
        }

        $om->flush();
    }

    private function createGendre($gendre)
    {
        return (new Gendre())->setName($gendre);
    }
}