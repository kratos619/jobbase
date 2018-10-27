<?php

namespace app\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\job;
use yii\data\Pagination;

class JobController extends \yii\web\Controller
{
    
    public function actionIndex()
    {
        $query = Job::find();
        $pagination = New Pagination([
            'defaultPageSize' => 20,
            'totalCount' => $query->count(),
        ]);
        $jobs = $query->orderBy('create_date DESC')
        ->offset($pagination->offset)
        ->limit($pagination->limit)
        ->all();

        return $this->render('index',[
            'jobs' => $jobs,
            'pagination' => $pagination
        ]);

    }
    public function actionCreate()
    {
         $jobs = new Job();
    if ($jobs->load(Yii::$app->request->post())) {
        if ($jobs->validate()) {
            // form inputs are valid, do something here
            $jobs->save();
            Yii::$app->getSession()->setFlash('success','Job Is Added');
            return $this->redirect('index.php?r=job');
        }
    }

    return $this->render('create', [
        'jobs' => $jobs,
    ]);
    }

    public function actionDelete()
    {
        return $this->render('delete');
    }

    public function actionEdite()
    {
        return $this->render('edite');
    }


}
