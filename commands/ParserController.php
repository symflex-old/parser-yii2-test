<?php

namespace app\commands;

use app\models\AdNetworks;
use yii\console\Controller;
use yii\console\ExitCode;

class ParserController extends Controller
{
    public function actionIndex(int $networkId = null)
    {
        if ($networkId) {
            $network = AdNetworks::findOne(['id' => $networkId]);
            $parserClass = $network->parser;
            $parser = new $parserClass($network->url);
            $parser->process();

        } else {

        }
    }
}
