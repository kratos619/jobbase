<?php

namespace app\controllers;
use Yii;
use yii\filters\AccessControl;
//use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
//use app\models\job;
use yii\data\Pagination;

use app\models\User;

class RegisterController extends \yii\web\Controller
{
    public function actionLogin()
    {
        return $this->render('login');
    }

    // public function actionRegister()
    // {
    //     return $this->render('register');
    // }
    public function actionRegister()
    {
    $user = new User();

    if ($user->load(Yii::$app->request->post())) {
        if ($user->validate()) {
            // form inputs are valid, do something here
            
            return;
        }
    }

    return $this->render('register', [
        'user' =>$user ,
    ]);
}

}
