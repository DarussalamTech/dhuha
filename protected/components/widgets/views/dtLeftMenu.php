
<div class="header_content">
    <div class="header_navbar" id="nav1">
        <div class="row header_row">
            <a class="toggle nav_toggle" gumby-trigger="#nav1 > .row > ul" href="#"><i class="icon-menu"></i></a>
            <ul class="eight columns">
                <?php
                foreach ($this->links as $key => $data) {
                    ?>
                    <li>
                        <?php
                        $textimg = CHtml::image(Yii::app()->baseUrl . "/frontend/images/fixed_red_color_02.jpg") . $data;
                        echo CHtml::link($textimg, "#" . $key, array("class" => "sidebar_link",));
                        ?>
                    </li>

                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>
