<?php

namespace Yamete\Driver;

class XXXMangaPro extends XXXHentaiComixCom
{
    private const DOMAIN = 'xxxmanga.pro';

    protected function getDomain(): string
    {
        return self::DOMAIN;
    }

    protected function getSelector(): string
    {
        return '.portfolio figure a';
    }
}
