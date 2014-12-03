<?php

namespace yz\admin\elfinder;

use mihaildev\elfinder\Controller;
use yii\helpers\ArrayHelper;
use yz\icons\Icons;


/**
 * Class Module
 */
class Module extends \yz\Module
{
    public $defaultRoute = 'file-manager/index';
    /**
     * @var array
     */
    public $elfinderOptions = [];
    /**
     * @var array
     */
    public $roots = [];

    public function init()
    {
        parent::init();

        $this->controllerMap['elfinder'] = ArrayHelper::merge([
            'class' => Controller::className(),
            'access' => ['@'],
            'roots' => $this->roots,
        ], $this->elfinderOptions);
    }

    public function getAdminMenu()
    {
        return [
            [
                'label' => \Yii::t('admin/elfinder', 'File manager'),
                'icon' => Icons::o('folder-o'),
                'items' => [
                    [
                        'route' => ['/filemanager/file-manager/index'],
                        'label' => \Yii::t('admin/elfinder', 'All files'),
                        'icon' => Icons::o('file-o'),
                    ],
                ]
            ]
        ];
    }

    public static function elfinderController()
    {
        return '/filemanager/elfinder';
    }
}