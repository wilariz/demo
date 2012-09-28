<?php
namespace AlbumTest\Entity;

use PHPUnit_Framework_TestCase;
use Album\Entity\Album;

class AlbumTest extends PHPUnit_Framework_TestCase
{

    public function testNewAlbum()
    {
        $album = new Album;
        $this->assertInstanceOf('Album\Entity\Album', $album);
        unset($album);
    }

    public function testGetArtista()
    {
        $album = new Album;
        $album->setArtista('Mana');
        $this->assertEquals('Mana', $album->getArtista());
        unset($album);
    }

}