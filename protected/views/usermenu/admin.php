<?php
/**
 * Вьюшка управления ссылками главного меню
 *
 * @author Craft-Soft Team
 * @version 6.1 beta
 * @copyright (C)2013 Craft-Soft.ru.  Все права защищены.
 * @package AmxBans
 * @link http://craft-soft.ru/
 *
 */

$this->pageTitle = Yii::app()->name .' :: Админцентр - Главное меню';
$this->breadcrumbs=array(
	'Админцентр' => array('/admin/index'),
	'Главное меню'
);

$this->menu=array(
	array('label'=>'Добавить ссылку','url'=>array('create')),
);
$this->renderPartial('/admin/mainmenu', array('active' =>'site', 'activebtn' => 'webmainmenu'));
?>

<h2>Управление ссылками</h2>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'usermenu-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'rowHtmlOptionsExpression' => 'array(
		"class" => $data->activ == 0 ? "error" : ""
	)',
	'enableSorting' => FALSE,
	'columns'=>array(
		array(
			'name' => 'pos',
			'value' => '$data->pos',
			'htmlOptions' => array(
				'style' => 'width: 50px'
			)
		),
		'lang_key',

		'lang_key2',

		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
