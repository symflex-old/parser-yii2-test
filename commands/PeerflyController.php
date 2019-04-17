<?php

namespace app\commands;

use yii\console\ExitCode;

class PeerflyController extends Parser
{
    public const PARSER_ID = 'peerfly';

    public function actionIndex()
    {
        $this->getSourceData();
    }
}
