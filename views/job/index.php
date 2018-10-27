<?php
/* @var $this yii\web\View */
use yii\Helpers\Html;
use yii\widgets\LinkPager;
?>
<?php if(null !== Yii::$app->session->getFlash('success')): ?>
<p class="alert alert-success"> <?php echo Yii::$app->session->getFlash('success'); ?> </p>
<?php endif ?>

<p> <a href="index.php?r=/job/create" class="btn btn-primary pull-right">Create Job</a></p>
<h2 class="page-header">Jobs </h2>
<?php if(!empty($jobs)): ?>
<ul class="list-group">
    <?php foreach($jobs as $job): ?>
    <li class="list-group-item"> 
        <a href="/index.php?r=job/details&id=<?php echo $job->id; ?>">
            <?php echo $job->title; ?> .
        </a>
        <strong> City <?php echo $job->city; ?></strong>,
        <strong> State <?php echo $job->state; ?></strong>
    </li>
<?php endforeach; ?>
</ul>
<?php else: ?>
<p>NO jobs</p> ?>
<?php endif; ?>
