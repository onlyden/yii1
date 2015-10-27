<?php
class BookController extends Controller{
    public function actionIndex($id = 1){
        $model = Book::model()->findByPk($id);
   $this->render('index', ['model'=>$model]);
    }
}