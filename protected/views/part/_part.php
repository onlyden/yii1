<?php
    print_r($_POST);
    echo CHtml::form();
echo CHtml::textField('text', 'Input');
$list = CHtml::listData($models, 'id', 'title');
echo CHtml::dropDownList('drop', '', $list);
    echo CHtml::submitButton('Send');
echo CHtml::endForm();