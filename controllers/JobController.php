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
            // save to db
            $jobs->save();

            //set flash message
            Yii::$app->getSession()->setFlash('success','Job Is Added');
            return $this->redirect('index.php?r=job');
        }
    }

    return $this->render('create', [
        'jobs' => $jobs,
    ]);
    }

    public function actionDelete($id)
    {
        $jobs = Job::findOne($id);
        $jobs->delete();
        Yii::$app->getSession()->setFlash('success','Job Is Delete');
            return $this->redirect('index.php?r=job');
    }

    public function actionEdite($id)
    {
        
         $jobs = Job::findOne($id);
    if ($jobs->load(Yii::$app->request->post())) {
        if ($jobs->validate()) {
            // form inputs are valid, do something here
            // save to db
            $jobs->save();

            //set flash message
            Yii::$app->getSession()->setFlash('success','Job Is Updated');
            return $this->redirect('index.php?r=job');
        }
    }

        return $this->render('edite', [
            'jobs' => $jobs,
        ]);
        
    }

    public function actionDetails($id){
        $job = Job::find()->where(['id' => $id])->one();
        return $this->render('details', ['job' => $job] );
    }


}
