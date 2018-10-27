<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Category;
use yii\data\Pagination;

class CategoryController extends \yii\web\Controller
{
    
    public function actionIndex()
    {
        $query = Category::find();
        $pagination = New Pagination([
            'defaultPageSize' => 20,
            'totalCount' => $query->count(),
        ]);
        $category = $query->orderBy('name')
        ->offset($pagination->offset)
        ->limit($pagination->limit)
        ->all();

        return $this->render('index',[
            'categories' => $category,
            'pagination' => $pagination
        ]);
    }
    
    public function actionCreate()
    {
        $category = new Category();

        if ($category->load(Yii::$app->request->post())) {
            if ($category->validate()) {
                // form inputs are valid, do something here
                // save record to db

                $category->save();
                Yii::$app->getSession()->setFlash('success','Category Is Added');
                return $this->redirect('index.php?r=/category');
            }
        }

            return $this->render('create', [
                'category' => $category,
            ]);
      //  return $this->render('create');
    }


}
