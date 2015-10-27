<?php
class BookController extends Controller{
    public function actionIndex(){
        $model = new Book();
        $model->title = "War and Peace";
        $model->author = "Tolstoy";
        $model->save(false);
    }
}