<?php
$this->breadcrumbs=array(
	'Creditors'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Creditor', 'url'=>array('index')),
	array('label'=>'Create Creditor', 'url'=>array('create')),
	array('label'=>'Update Creditor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Creditor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Creditor', 'url'=>array('admin')),
);
?>

<h1>View Creditor #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'address',
		'telephone',
		'email',
		'faxnumber',
		'status',
		'current_settlement_offer',
		'current_settlement_perc',
		'offer_date',
		'offer_valid_until_date',
		'created_at',
		'updated_at',
	),
)); ?>
