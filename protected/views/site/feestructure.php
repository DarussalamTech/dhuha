<?php

$this->PcmWidget['dt_header'] = array('name' => 'DTHeaderPart',
    'attributes' => array(
        'viewName' => "/common/_feestructure"
        ));
?>
<?php
/**
 * rendering footer
 */
$this->renderPartial("/site/_footer");
?>

<link href="<?php echo Yii::app()->baseUrl; ?>/frontend/css/fee_structure.css" rel="stylesheet" />
