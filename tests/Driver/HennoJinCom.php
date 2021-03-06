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

class HennoJinCom extends TestCase
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
    public function testDownload()
    {
        $url = 'https://hennojin.com/home/manga/[Blue-Bean-(Kaname-Aomame)]-C2lemon@V.c2-(CODE-GEASS-Lelouch-of-the-Rebellion)-[English]-[Digital]/';
        $driver = new \Yamete\Driver\HennoJinCom();
        $driver->setUrl($url);
        $this->assertTrue($driver->canHandle());
        $this->assertEquals(34, count($driver->getDownloadables()));
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
    public function testDownloadRead()
    {
        $url = 'https://hennojin.com/home/manga-reader/?manga=(SC2016%20Winter)%20[ASTRONOMY%20(SeN)]%20Kasou%20Juhou%20(Utawarerumono%20Itsuwari%20no%20Kamen)%20[English]&view=page';
        $driver = new \Yamete\Driver\HennoJinCom();
        $driver->setUrl($url);
        $this->assertTrue($driver->canHandle());
        $this->assertEquals(15, count($driver->getDownloadables()));
    }
}
