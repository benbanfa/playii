<?php

namespace Tests\Practice\P0001;

use PHPUnit\Framework\TestCase;
use Playii\Practice\P0001\Answer;

class P0001Test extends TestCase
{
    public function testCoreComponentClasses()
    {
        $expected = [
            'yii\log\Dispatcher',
            'yii\web\View',
            'yii\i18n\Formatter',
            'yii\i18n\I18N',
            'yii\swiftmailer\Mailer',
            'yii\web\UrlManager',
            'yii\web\AssetManager',
            'yii\base\Security',
            'yii\web\Request',
            'yii\web\Response',
            'yii\web\Session',
            'yii\web\User',
            'yii\web\ErrorHandler',
        ];
        \sort($expected, SORT_REGULAR);

        $answer = new Answer();

        $this->assertEquals(
            $expected,
            $answer->getSortedCoreComponentClassNames()
        );
    }
}
