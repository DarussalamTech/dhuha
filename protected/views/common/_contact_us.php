<div class="contact_us">
    <div class="twelve columns">
        <h1>CONTACT US</h1>
        <p>License no, /314, Saada Street, Murabba Area</p>
        <p>P.O.BOX No: 22743 Riyadh 11416</p>
        <p>Tel: 01– 4011368 , 4092966 </p>
        <p>Fax: 01 - 4092977</p>
        <p>info@dhuhaschool.com</p>
        <span class="flash-message">

            <?php
            if (Yii::app()->user->hasFlash('email_status')):

                echo Yii::app()->user->getFlash('email_status');
            endif;
            ?>
        </span>
        <span class="error-message">

            <?php
            if ($model->hasErrors()):

               echo "* These fields cannot be empty";
            endif;
            ?>
        </span>
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
                <td class="left_contact"><?php echo $model->getAttributeLabel("name"); ?>:<span class="staric">*</span></td>
                <td class="right_contact">  <?php echo $form->textField($model, 'name'); ?></td>
            </tr>
            <tr>
                <td class="left_contact">  <?php echo $model->getAttributeLabel("email"); ?>:<span class="staric">*</span></td>
                <td class="right_contact"> <?php echo $form->textField($model, 'email'); ?></td>
            </tr>
            <tr>
                <td class="left_contact"> <?php echo $model->getAttributeLabel("subject"); ?>:<span class="staric">*</span></td>
                <td class="right_contact">            <?php echo $form->textField($model, 'subject', array('size' => 60, 'maxlength' => 128)); ?></td>
            </tr>
            <tr>
                <td class="left_contact">   <?php echo $model->getAttributeLabel("body"); ?>:</td>
                <td class="right_contact">            <?php echo $form->textArea($model, 'body', array('rows' => 6, 'cols' => 50)); ?></td>
            </tr>
            <tr>
                <td class="left_contact">   <?php echo $model->getAttributeLabel("verifyCode"); ?>:</td>
                <td class="right_contact">  
                    <?php $this->widget('CCaptcha'); ?>

                </td>
            </tr>
            <tr>
                <td class="left_contact">  </td>
                <td class="right_contact">  

                    <?php echo $form->textField($model, 'verifyCode'); ?>
                </td>
            </tr>


        </table>
        <?php echo CHtml::submitButton('Send', array("class" => "send_btn")); ?>
        <?php $this->endWidget(); ?>
    </div>
</div>