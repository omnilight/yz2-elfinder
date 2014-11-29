<?php

namespace yz\admin\elfinder\controllers;

use backend\base\Controller;


/**
 * Class FileManager
 */
class FileManagerController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
} 