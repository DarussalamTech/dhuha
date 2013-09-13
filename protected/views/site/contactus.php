<?php
$this->PcmWidget['dt_header'] = array('name' => 'DTHeaderPart',
    'attributes' => array(
        'viewName' => "/common/_contact_us",
        "model" => $model,
        ));
?>
<?php
/**
 * rendering footer
 */
$this->renderPartial("/site/_footer");
?>

<link href="<?php echo Yii::app()->baseUrl; ?>/frontend/css/contact.css" rel="stylesheet" />
