<?php

namespace YameteTests\Driver;


use GuzzleHttp\Exception\GuzzleException;
use PHPHtmlParser\Exceptions\ChildNotFoundException;
use PHPHtmlParser\Exceptions\CircularException;
use PHPHtmlParser\Exceptions\ContentLengthException;
use PHPHtmlParser\Exceptions\LogicalException;
use PHPHtmlParser\Exceptions\NotLoadedException;
use PHPHtmlParser\Exceptions\StrictException;
use PHPUnit\Framework\TestCase;

class SimplyHentai extends TestCase
{
    /**
     * @throws GuzzleException
     * @throws ChildNotFoundException
     * @throws CircularException
     * @throws ContentLengthException
     * @throws LogicalException
     * @throws NotLoadedException
     * @throws StrictException
     */
    public function testDownloadOriginal()
    {
        $url = 'https://www.simply-hentai.com/original-work/mushikago-infu-hen-ichi-ni';
        $driver = new \Yamete\Driver\SimplyHentai();
        $driver->setUrl($url);
        $this->assertTrue($driver->canHandle());
        $this->assertEquals(51, count($driver->getDownloadables()));
    }

    /**
     * @throws GuzzleException
     * @throws ChildNotFoundException
     * @throws CircularException
     * @throws ContentLengthException
     * @throws LogicalException
     * @throws NotLoadedException
     * @throws StrictException
     */
    public function testDownloadSeries()
    {
        $url = 'https://www.simply-hentai.com/wreck-it-ralph/%E3%82%B7%E3%83%A5%E3%82%AC%E3%83%BC%E3%83%BB%E3%83%A9%E3%83%83%E3%82%B7%E3%83%A5/';
        $driver = new \Yamete\Driver\SimplyHentai();
        $driver->setUrl($url);
        $this->assertTrue($driver->canHandle());
        $this->assertEquals(6, count($driver->getDownloadables()));
    }
}
