<?php

namespace app\commands;

use yii\console\ExitCode;

class OfferdollarController extends Parser
{
    public const PARSER_ID = 'offerdollar';

    public function actionIndex($message = 'hello world')
    {
        echo $message . "\n";

        return ExitCode::OK;
    }
}
