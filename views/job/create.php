<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Job */
/* @var $form ActiveForm */
?>
<div class="job-create">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($jobs, 'category_id') ?>
        <?= $form->field($jobs, 'user_id') ?>
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
        <?= $form->field($jobs, 'is_published') ?>
        
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- job-create -->
