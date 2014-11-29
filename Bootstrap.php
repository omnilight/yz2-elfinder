<?php

namespace yz\admin\elfinder;

use yii\base\Application;
use yii\base\BootstrapInterface;


/**
 * Class Bootstrap
 */
class Bootstrap implements BootstrapInterface
{
    /**
     * Bootstrap method to be called during application bootstrap stage.
     * @param Application $app the application currently running
     */
    public function bootstrap($app)
    {
        $app->i18n->translations['admin/elfinder'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'basePath' => '@yz/admin/messages',
            'sourceLanguage' => 'en-US',
        ];
    }


} 