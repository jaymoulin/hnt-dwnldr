<?php

namespace YameteTests\Driver;


use GuzzleHttp\Exception\GuzzleException;
use PHPUnit\Framework\TestCase;

class SexualHentaiNet extends TestCase
{
    /**
     * @throws GuzzleException
     */
    public function testDownload()
    {
        $url = 'http://www.sexualhentai.net/hentai_galls/Hentai%20Pics/slutty-ouran-high-school-host-club/1ac1a441b249e676201ab067414a8d78/index.html';
        $driver = new \Yamete\Driver\SexualHentaiNet();
        $driver->setUrl($url);
        $this->assertTrue($driver->canHandle());
        $this->assertEquals(5, count($driver->getDownloadables()));
    }
}
