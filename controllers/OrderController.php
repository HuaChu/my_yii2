<?php

namespace app\controllers;

use yii\web\Controller;

class OrderController extends Controller
{
    public $layout = 'underheader';
    public function actionIndex()
    {
        return $this->render('index');
    }
}