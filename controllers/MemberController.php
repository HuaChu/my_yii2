<?php

namespace app\controllers;

use yii\web\Controller;

class MemberController extends Controller
{
    public $layout = false;

    public function actionAuth()
    {
        return $this->render('auth');
    }
}