<?php

/**
 * 
 */
if(!empty($this->viewName)){
    Yii::app()->controller->renderPartial($this->viewName);
}
?>
