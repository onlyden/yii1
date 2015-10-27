<?php
//    foreach($models as $model){
//        $title= CHtml::encode($model->text);
//    echo CHtml::link($title, ['page/view', 'id'=>$model->id]);
//        echo CHtml::normalizeUrl(['page/view', 'id'=>$model->id]);
//    }
$this->renderPartial('/part/_part', ['models'=>$models]);