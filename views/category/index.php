<?php
/* @var $this yii\web\View */
use yii\Helpers\Html;
use yii\widgets\LinkPager;
?>
<?php if(null !== Yii::$app->session->getFlash('success')): ?>
<p class="alert alert-success"> <?php echo Yii::$app->session->getFlash('success'); ?> </p>
<?php endif ?>

<p> <a href="index.php?r=/category/create" class="btn btn-primary pull-right">Create Category</a></p>
<h2 class="page-header">Category </h2>
<ul class="list-group">
    <?php foreach($categories as $category): ?>
    <li class="list-group-item"> <a href="/index.php?r=job&category=<?php echo $category->id; ?>"><?php echo $category->name; ?></a></li>
<?php endforeach; ?>
</ul>
