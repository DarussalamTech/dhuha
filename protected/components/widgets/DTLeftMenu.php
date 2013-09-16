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

class DTLeftMenu extends CPortlet {

    public $links = array();
    public $colors = array();
    public $link_color;

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
        if (!empty($this->links)) {
            $colors = CJSON::encode($this->colors);
            Yii::app()->clientScript->registerScript('client_scripts', '
            var left_menu_colors = ' . $colors . ';;
        
        ', CClientScript::POS_HEAD);
        }
        
        $this->render('dtLeftMenu');
    }

}

?>
