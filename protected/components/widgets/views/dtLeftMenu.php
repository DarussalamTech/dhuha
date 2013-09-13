<?php
    foreach($this->links as $key=>$data){
        echo CHtml::openTag("p");
            $textimg = CHtml::image(Yii::app()->baseUrl."/frontend/images/fixed_red_color_02.jpg").$data;
            echo CHtml::link($textimg,"#".$key,array("class"=>"sidebar_link",));
            //"onclick"=>"dhuha.scrolltoSection('$key');"
        echo CHtml::closeTag("p");
        
    }
?>

