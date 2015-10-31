<?php
//    print_r($_POST);
    echo CHtml::form();
echo CHtml::textField('text', 'Input');
$list = CHtml::listData($models, 'id', 'title');
echo CHtml::dropDownList('drop', '', $list);
    echo CHtml::submitButton('Send');
echo CHtml::endForm();
class MyClass extends CComponent{
    private $read = 'Only for reading';
    private $write = 'Can write';
    function getRead(){
        return $this->read;
    }
    function setWrite($value){
        return $this->write = $value;
    }
}
$class = new MyClass();
echo $class->getRead();
echo $class->setWrite('vasya');