<?php

namespace app\controllers;
use app\models\Test;
use yii\web\Controller;
class IndexController extends Controller
{
    public function actionIndex()
    {
        $model = new Test();
        $data = $model->find()->one();
        return $this->render('index',[
            'data'=>$data
        ]);
    }
}