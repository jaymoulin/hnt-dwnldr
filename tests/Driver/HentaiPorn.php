<?php

namespace YameteTests\Driver;


class HentaiPornPics extends \PHPUnit\Framework\TestCase
{
    public function testDownload()
    {
        $url = 'http://www.hentaipornpics.net/galleries/i-cum-in-my-sister-and-her-friends-takuji';
        $driver = new \Yamete\Driver\HentaiPornPics();
        $driver->setUrl($url);
        $this->assertNotFalse($driver->canHandle());
        $this->assertEquals(15, count($driver->getDownloadables()));
    }
}