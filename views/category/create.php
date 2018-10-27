<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Category */
/* @var $form ActiveForm */

?>
<div class="category-create">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($category, 'name') ?>

    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- category-create -->
