<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Dhuha International School Systems</title>
        <link href="<?php echo Yii::app()->baseUrl; ?>/frontend/css/style.css" rel="stylesheet" />

        <link href="<?php echo Yii::app()->baseUrl; ?>/frontend/css/cstyle.css" rel="stylesheet" />
        <meta charset="utf-8">
            <script>
                var yii_base_url = "<?php echo Yii::app()->baseUrl; ?>";
                var yii_base_theme_url = "<?php echo Yii::app()->baseUrl; ?>";
            </script>
            <!-- Use the .htaccess and remove these lines to avoid edge case issues.
                             More info: h5bp.com/b/378 -->
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

                <meta name="description" content="" />
                <meta name="keywords" content="" />
                <meta name="author" content="humans.txt">

                    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

                    <!-- Facebook Metadata /-->
                    <meta property="fb:page_id" content="" />
                    <meta property="og:image" content="" />
                    <meta property="og:description" content=""/>
                    <meta property="og:title" content=""/>

                    <!-- Google+ Metadata /-->
                    <meta itemprop="name" content="">
                        <meta itemprop="description" content="">
                            <meta itemprop="image" content="">

                                <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

                                    <!-- We highly recommend you use SASS and write your custom styles in sass/_custom.scss.
                                                     However, there is a blank style.css in the css directory should you prefer -->
                                    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/frontend/css/gumby.css">
                                        <!-- <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/frontend/css/gumby_style.css"> -->

                                        <script src="<?php echo Yii::app()->baseUrl; ?>/frontend/js/libs/modernizr-2.6.2.min.js"></script>
                                        </head>

                                        <body>
                                            <div id="wraper">
                                                <header>
                                                    <div id="header">
                                                        <div class="header_content">
                                                            <?php
                                                            if (isset($this->PcmWidget['side_menu'])) {
                                                                $this->widget($this->PcmWidget['side_menu']['name'], $this->PcmWidget['side_menu']['attributes']);
                                                            }
                                                            ?>
                                                        </div>
                                                        <div class="row">
                                                            <div class="navbar row" id="nav2">
                                                                <a class="toggle" gumby-trigger="#nav2 > ul" href="#"><i class="icon-menu"></i></a>
                                                                <h1 class="two columns logo">
                                                                    <div class="logo">
                                                                        <a href="<?php echo Yii::app()->homeUrl ?>"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/logo_03.jpg" /></a>
                                                                    </div>
                                                                </h1>
                                                                <!--                                                                <div class="nav_right">
                                                                                                                            
                                                                                                                                    <div class="language">
                                                                                                                                        <span><a href="#">English</a></span><br />
                                                                                                                                        <span><a href="#">Arabic</a></span>
                                                                                                                                    </div>
                                                                                                                                </div>-->
                                                                <ul id="top_navigation" class="ten columns">

                                                                    <?php
                                                                    $dt_menu_array = array(
                                                                        "index" => "Dhuha",
                                                                        "activity" => "Facilities",
                                                                        "courses" => "Curriculum",
                                                                        "teachingsystem" => "Teaching System",
                                                                        "feestructure" => "Fee Structure",
                                                                        "administration" => "Administration",
                                                                        "rules" => "Rules & Regulations",
                                                                        "gallery" => "Gallery",
                                                                        "contactus" => "Contact Us",
                                                                    );

                                                                    foreach ($dt_menu_array as $key => $text) {
                                                                        echo "<li>";
                                                                        if ($this->action->id == $key) {
                                                                            echo CHtml::link($text, $this->createUrl("/site/" . $key), array("class" => "active"));
                                                                        } else {
                                                                            echo CHtml::link($text, $this->createUrl("/site/" . $key));
                                                                        }

                                                                        echo "</li>";
                                                                    }
                                                                    ?>

                                                                </ul>
                                                            </div>
                                                            <?php
                                                            if (isset($this->PcmWidget['dt_header'])) {
                                                                $this->widget($this->PcmWidget['dt_header']['name'], $this->PcmWidget['dt_header']['attributes']);
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                </header>
                                                <?php echo $content ?>
                                            </div>


                                            <!-- Grab Google CDN's jQuery, fall back to local if offline -->
                                            <!-- 2.0 for modern browsers, 1.10 for .oldie -->
                                            <script>
                                                var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
                                                if (!oldieCheck) {
                                                    document.write('<script src="<?php echo Yii::app()->baseUrl; ?>/frontend/js/jquery/2.2/jquery.min.js"><\/script>');
                                                } else {
                                                    document.write('<script src="<?php echo Yii::app()->baseUrl; ?>/frontend/js/jquery/1.10/jquery.min.js"><\/script>');
                                                }
                                            </script>
                                            <script>
                                                if (!window.jQuery) {
                                                    if (!oldieCheck) {
                                                        document.write('<script src="<?php echo Yii::app()->baseUrl; ?>/frontend/js/libs/jquery-2.0.2.min.js"><\/script>');
                                                    } else {
                                                        document.write('<script src="<?php echo Yii::app()->baseUrl; ?>/frontend/js/libs/jquery-1.10.1.min.js"><\/script>');
                                                    }
                                                }
                                            </script>




                                            <!--
                                            Include gumby.js followed by UI modules.
                                            Or concatenate and minify into a single file
                                            <script src="<?php echo Yii::app()->baseUrl; ?>/frontend/js/libs/gumby.js"></script>
                                            <script src="<?php echo Yii::app()->baseUrl; ?>/frontend/js/libs/ui/gumby.retina.js"></script>
                                            <script src="<?php echo Yii::app()->baseUrl; ?>/frontend/js/libs/ui/gumby.fixed.js"></script>
                                            <script src="<?php echo Yii::app()->baseUrl; ?>/frontend/js/libs/ui/gumby.skiplink.js"></script>
                                            <script src="<?php echo Yii::app()->baseUrl; ?>/frontend/js/libs/ui/gumby.toggleswitch.js"></script>
                                            <script src="<?php echo Yii::app()->baseUrl; ?>/frontend/js/libs/ui/gumby.checkbox.js"></script>
                                            <script src="<?php echo Yii::app()->baseUrl; ?>/frontend/js/libs/ui/gumby.radiobtn.js"></script>
                                            <script src="<?php echo Yii::app()->baseUrl; ?>/frontend/js/libs/ui/gumby.tabs.js"></script>
                                            <script src="<?php echo Yii::app()->baseUrl; ?>/frontend/js/libs/ui/gumby.navbar.js"></script>
                                            <script src="<?php echo Yii::app()->baseUrl; ?>/frontend/js/libs/ui/gumby.fittext.js"></script>
                                            <script src="<?php echo Yii::app()->baseUrl; ?>/frontend/js/libs/ui/jquery.validation.js"></script>
                                            <script src="<?php echo Yii::app()->baseUrl; ?>/frontend/js/libs/gumby.init.js"></script>-->

                                            <script src="<?php echo Yii::app()->baseUrl; ?>/frontend/js/libs/gumby.min.js"></script>
                                            <script src="<?php echo Yii::app()->baseUrl; ?>/frontend/js/plugins.js"></script>
                                            <script src="<?php echo Yii::app()->baseUrl; ?>/frontend/js/main.js"></script>

                                            <!--
                                             including own custom file
                                            -->
                                            <script src="<?php echo Yii::app()->baseUrl; ?>/frontend/js/dhuha.js"></script>
                                            <script type="text/javascript">
                                                jQuery(document).ready(function() {
                                                    dhuha.sideBarLinkHover();
                                                    dhuha.handleActiveClassTopNav();
                                                    if (window.location.hash != "" && window.location.hash != "#") {
                                                        dhuha.scrolltoSection(window.location.hash.substring(1, window.location.hash.length));
                                                    }

                                                    dhuha.makeCurrentActiveLab();
                                                    dhuha.registerSidebarLink();

                                                })
                                            </script>

                                            <?php
                                            if (isset($this->PcmWidget['lightbox'])) {
                                                ?>
                                                <script src="<?php echo Yii::app()->baseUrl; ?>/frontend/lightbox/js/lightbox-2.6.min.js"></script>
                                                <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/frontend/lightbox/css/lightbox.css" media="screen"/>
                                                <?php
                                            }

                                            /**
                                             *  pcm is action is equal to gallery
                                             */
                                            ?>

                                            <!-- Change UA-XXXXX-X to be your site's ID -->
                                            <!--<script>
                                            window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
                                            Modernizr.load({
                                              load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
                                            });
                                            </script>-->

                                            <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
                                               chromium.org/developers/how-tos/chrome-frame-getting-started -->
                                            <!--[if lt IE 7 ]>
                                            <script src="https://ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
                                            <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
                                            <![endif]-->

                                            <!--[if IE]>
                                             <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/frontend/css/ie_only.css" />
                                            <![endif]-->
                                            <?php
                                            if ($this->action->id == "gallery") :
                                                ?>
                                                <script src="<?php echo Yii::app()->baseUrl; ?>/packages/jui/js/jquery-ui.min.js"></script>
                                                <script src="<?php echo Yii::app()->baseUrl; ?>/frontend/js/jq_browser.js"></script>
                                                <script src="<?php echo Yii::app()->baseUrl; ?>/frontend/js/jquery.jcarousel.min.js"></script>

                                                <script>
                                                    jQuery(document).ready(function() {
                                                        jQuery('.filter_list').jcarousel({visible: 5});

                                                        jQuery(".filter_list li a[data-type='checked_all']").bind('click',function() {
                                                            dhuha.gallleryShow(this);
                                                        })
                                                        jQuery(".filter_list li a[data-type='others']").bind('click',function() {
                                                            dhuha.gallleryShow(this);
                                                        })
                                                    })
                                                </script>
                                                <?php
                                            endif;
                                            ?>
                                        </body>
                                        </html>