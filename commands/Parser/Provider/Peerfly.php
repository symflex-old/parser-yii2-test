<?php

namespace app\commands\Parser\Provider;

use app\commands\Parser\BaseParser;

final class Peerfly extends BaseParser
{
    public const DATA_FILE = 'peerfly.xml';

    public function process()
    {
        $this->fetchSourceData();
    }
}