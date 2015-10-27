<?php
class MyController extends Controller{
    public $defaultAction = "one";
    public function actionOne(){
        $models = Page::model()->findAll(['order'=>'title ASC']);
    $this->render('one', ['models'=>$models]);
    }
}