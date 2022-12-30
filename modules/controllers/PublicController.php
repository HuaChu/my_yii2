<?php

namespace app\modules\controllers;

use app\models\Test;
use Yii;
use yii\captcha\CaptchaValidator;
use yii\web\Controller;
use yii\web\Session;

class PublicController extends Controller
{
    public function actions()
    {
        return [
            'code'=>[
                'class'=>'yii\captcha\CaptchaAction',
                'maxLength'=>'4',
                'minLength'=>'4',
                'width'=>800,
                'height'=>400
            ],
        ];
    }
    public function actionLogin()
    {
        $this->layout = false;
        if(Yii::$app->request->isAjax){
        }
        return $this->render('login');
    }

    public function actionTest()
    {
        $model = new Test();
        return $this->render('test',['model'=>$model]);
    }
}