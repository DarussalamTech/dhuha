<?php $this->beginContent('//layouts/main'); ?>


<div class="container container-inner">
    <div style="position: fixed; margin-left: 178px; float: right;">

        <div class="hideShow hideImage" style="cursor: pointer; width:10px; height: 19px">  </div>
        <?php // echo CHtml::image(Yii::app()->request->baseUrl . "/images/hide.png", "Hide") ?>
        <!--        <a href="#" onclick="" class="hideShow hideImage"></a>-->
    </div>
    <div class="span-5 last">
        <div id="sidebar">
           
        </div><!-- sidebar -->
    </div>
    <div class="span-18">
        <div id="content">
            <?php echo $content; ?>
        </div><!-- content -->
    </div>

</div>
<?php $this->endContent(); ?>