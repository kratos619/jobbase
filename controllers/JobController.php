<?php

namespace app\controllers;

class JobController extends \yii\web\Controller
{
    public function actionCreate()
    {
        return $this->render('create');
    }

    public function actionDelete()
    {
        return $this->render('delete');
    }

    public function actionEdite()
    {
        return $this->render('edite');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

}
