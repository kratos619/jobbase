<?php
/* @var $this yii\web\View */
use yii\Helpers\Html;
use yii\widgets\LinkPager;
?>



    <h2 class="page-header"><?php echo $job->title ?>
    <span class="pull-right">
        <a class="btn btn-warning" href="index.php?r=job/edite&id=<?php echo $job->id ?>">Edit</a>
        <a class="btn btn-danger" href="index.php?r=job/delete&id=<?php echo $job->id ?>">Delete</a>
    </span>
    
    </h2> 
    
    <?php if(!empty($job->description)): ?>
        <h4>Description :</h4>
        <p class="lead">
            <h4> <?php echo $job->description; ?></h4>    
        </p>
        <br/>
<?php endif; ?>
<ul class="list-group">
    <li class="list-group-item"> <strong>Salary Range</strong> :  <?php echo $job->salary_range ?> Pre/Month</li>
    <li class="list-group-item"> <strong>Type</strong> :  <?php echo $job->type ?> </li>
    <li class="list-group-item"> <strong> Requirment</strong> : <?php echo $job->requirments ?> </li>
</ul>

    <div class="row">
        <div class="col-md-6">
            <h4 class="text-center">Contact Info</h4>
            <p class="lead">
                City : <?php echo $job->city; ?>
                <br>
                 Zip : <?php echo $job->zip; ?>
                <br>
                 Email : <?php echo $job->contact_email; ?>
                   <br>
                 Zip : <?php echo $job->cantact_phone; ?>
            </p>    
        </div>
            <div class="col-md-6">
            <h5>Categories</h5>
                <p class="lead">
                    <?php echo $job->category->name ?>
                </p>    
            </div>
    </div>
