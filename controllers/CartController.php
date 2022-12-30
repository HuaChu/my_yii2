<?php

namespace app\controllers;

use yii\web\Controller;

class CartController extends Controller
{
    public $layout = 'underheader';

    public function actionIndex()
    {
        return $this->render('index');
    }
}