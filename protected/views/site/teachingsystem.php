<?php
$this->PcmWidget['dt_header'] = array('name' => 'DTHeaderPart',
    'attributes' => array(
        'viewName' => "/common/_teaching_system"
        ));
?>
<?php
/**
 * rendering footer
 */
$this->renderPartial("/site/_footer");
?>

<link href="<?php echo Yii::app()->baseUrl; ?>/frontend/css/teaching.css" rel="stylesheet" />