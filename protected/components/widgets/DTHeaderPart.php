<?php

/**
 * @author :Ali Abbas
 * @version : since 1.1
 * 
 * Purpose of this class to 
 * make common filter 
 * for all modules 
 * that having filter on left side 
 *   
 */
Yii::import('zii.widgets.CPortlet');
class DTHeaderPart extends CPortlet {

    public $viewName;
    /**
     * Init 
     */
    public function init() {
        parent::init();
    }

    /**
     * Render Contents
     */
    protected function renderContent() {
        $this->render('dtHeaderPart');
    }

}

?>
