<div class="contact_us">
    <div class="twelve columns">
        <h1>CONTACT US</h1>
        <p>License no, /314, Saada Street, Murabba Area</p>
        <p>P.O.BOX No: 22743 Riyadh 11416</p>
        <p>Tel: 01– 4011368 , 4092966 </p>
        <p>Fax: 01 - 4092977</p>
        <p>info@dhuhaschool.com</p>
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'contact-form',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
        ));
        ?>
        <table>
            <tr>
                <td class="left_contact"><?php echo $model->getAttributeLabel("name"); ?>:</td>
                <td class="right_contact">  <?php echo $form->textField($model, 'name'); ?></td>
            </tr>
            <tr>
                <td class="left_contact">  <?php echo $model->getAttributeLabel("email"); ?>:</td>
                <td class="right_contact"> <?php echo $form->textField($model, 'email'); ?></td>
            </tr>
            <tr>
                <td class="left_contact"> <?php echo $model->getAttributeLabel("subject"); ?>:</td>
                <td class="right_contact">            <?php echo $form->textField($model, 'subject', array('size' => 60, 'maxlength' => 128)); ?></td>
            </tr>
            <tr>
                <td class="left_contact">   <?php echo $model->getAttributeLabel("body"); ?>:</td>
                <td class="right_contact">            <?php echo $form->textArea($model, 'body', array('rows' => 6, 'cols' => 50)); ?></td>
            </tr>
        </table>
        <?php echo CHtml::submitButton('Send', array("class" => "send_btn")); ?>
        <?php $this->endWidget(); ?>
    </div>
</div>