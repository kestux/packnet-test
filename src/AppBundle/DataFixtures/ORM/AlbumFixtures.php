<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Album;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Validator\Constraints\DateTime;

class AlbumFixtures extends Fixture
{
    public function load(ObjectManager $om)
    {
        $albums = [
            ['first album', 'first artist'],
            ['second', 'second'],
            ['album 3', 'artist 3'],
            ['the 4', 'the 4'],
            ['and one more', 'just one more']
        ];

        foreach ($albums as $album) {
            $om->persist($this->createAlbum($album[0], $album[1]));
        }

        $om->flush();
    }

    private function createAlbum($title, $artist)
    {
        $firstDate = strtotime('1960-01-01');
        $lastDate = strtotime('2017-10-11');

        return (new Album())
            ->setTitle($title)
            ->setArtist($artist)
            ->setTracksNo(rand(1, 200))
            ->setYear(new DateTime(rand($firstDate, $lastDate)));
    }
}