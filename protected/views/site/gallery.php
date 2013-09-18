<?php
$this->PcmWidget['dt_header'] = array('name' => 'DTHeaderPart',
    'attributes' => array(
        'viewName' => "/common/_gallery",
        ));
$this->PcmWidget['lightbox'] = array('name' => 'DTLightBox',
    'attributes' => array(
        ));
?>

<?php
/**
 * rendering footer
 */
$this->renderPartial("/site/_footer");
?>

<link href="<?php echo Yii::app()->baseUrl; ?>/frontend/css/gallery.css" rel="stylesheet" />
