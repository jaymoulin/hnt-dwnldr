<?php

namespace YameteTests\Driver;


class Hentai4Me extends \PHPUnit\Framework\TestCase
{
    public function testDownload()
    {
        $url = 'http://hentai4me.net/kearuda-no-yarashii-hon-2.html';
        $driver = new \Yamete\Driver\Hentai4Me();
        $driver->setUrl($url);
        $this->assertTrue($driver->canHandle());
        $this->assertEquals(20, count($driver->getDownloadables()));
    }
}
