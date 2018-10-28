<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Category;
use yii\helpers\ArrayList;


/* @var $this yii\web\View */
/* @var $model app\models\Job */
/* @var $form ActiveForm */
?>
<div class="job-edit">
<h3 class="page-header">Edit Job</h3>
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->errorSummary($jobs); ?>
        <?= $form->field($jobs, 'category_id')->dropDownList(Category::find()->select(['name','id'])->indexBy('id')->column(),['prompt' => 'Select Category']) ?>
        <?= $form->field($jobs, 'title') ?>
        <?= $form->field($jobs, 'description') ?>
        <?= $form->field($jobs, 'type') ?>
        <?= $form->field($jobs, 'requirments') ?>
        <?= $form->field($jobs, 'salary_range') ?>
        <?= $form->field($jobs, 'city') ?>
        <?= $form->field($jobs, 'state') ?>
        <?= $form->field($jobs, 'zip') ?>
        <?= $form->field($jobs, 'contact_email') ?>
        <?= $form->field($jobs, 'cantact_phone') ?>
        <?= $form->field($jobs, 'is_published')->radioList(array('1' => 'yes','0' => 'no')) ?>
        
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- job-create -->
