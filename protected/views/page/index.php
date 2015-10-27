<?php
/* @var $this PageController */
/* @var $dataProvider CActiveDataProvider */
$this->breadcrumbs=array(
	'Pages',
);

$this->menu=array(
	array('label'=>'Create Page', 'url'=>array('create')),
	array('label'=>'Manage Page', 'url'=>array('admin')),
);
?>

<h1>Some Pages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'sorterHeader'=>'Sort by: ',
    'summaryText'=>'{start} - {end} from {count}',
	'sortableAttributes'=>['title', 'id', 'text'],

)); ?>
