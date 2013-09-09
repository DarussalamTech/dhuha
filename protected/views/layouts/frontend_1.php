<!doctype html>
<html>
    <head>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/packages/jui/js/jquerycustomScroller.js" ></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/frontend/js/dtech.js" ></script>
        <meta charset="utf-8">

        <link href="<?php echo Yii::app()->baseUrl; ?>/frontend/css/style.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->baseUrl; ?>/frontend/css/customStyle.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->baseUrl; ?>/packages/jui/css/jquery.mCustomScrollbar.css" type="text/css" rel="stylesheet" />
        <title>D-Tech</title>
        <style>
            html,body{height:100%;}
            body{margin:0; padding:0; color:#eee; background:#222; font-family:Verdana,Geneva,sans-serif; font-size:13px; line-height:20px;}
            a:link,a:visited,a:hover{color:inherit;}
            h1{font-family:Georgia,serif; font-size:18px; font-style:italic; margin:40px; color:#26beff;}
            p{margin:0 0 20px 0;}
            hr{height:0; border:none; border-bottom:1px solid rgba(255,255,255,0.13); border-top:1px solid rgba(0,0,0,1); margin:9px 10px; clear:both;}
            .links{margin:10px;}
            .links a{display:inline-block; padding:3px 15px; margin:7px 10px; background:#444; text-decoration:none; -webkit-border-radius:15px; -moz-border-radius:15px; border-radius:15px;}
            .links a:hover{background:#eb3755; color:#fff;}
            
            .content p:nth-child(even){color:#999; font-family:Georgia,serif; font-size:17px; font-style:italic;}
            .content p:nth-child(3n+0){color:#c96;}
        </style>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                if (window.location.hash != "" && window.location.hash != "#") {
                    dtech.scrolltoSection(window.location.hash.substring(1, window.location.hash.length));
                }

                $(".cirlce_part").mCustomScrollbar({
                    scrollButtons: {
                        enable: true
                    }
                });
            })
        </script>
    </head>

    <body>
        <div id="banner">
            <div class="banner_part">
                <div class="logo">
                    <a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/logo_02.jpg" /></a>
                </div>
                <div class="nav">
                    <ul>
                        <li><a href="javascript:void(0)" onclick="">about us</a></li>
                        <li><a href="javascript:void(0)">-</a></li>
                        <li><a href="#our_work" onclick="dtech.scrolltoSection('our_work')">how do we work</a></li>
                        <li><a href="javascript:void(0)">-</a></li>
                        <li><a href="#services" onclick="dtech.scrolltoSection('services')">services</a></li>
                        <li><a href="javascript:void(0)" onclick="">-</a></li>
                        <li><a href="#contact_us" onclick="dtech.scrolltoSection('contact_us')">contact us</a></li>
                    </ul>
                </div>
                <div class="main_banner">
                    <div class="left_banner">
                        <a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/left_arrow_03.png" /></a>
                    </div>
                    <div class="middle_banner">
                        <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/high_values_img_03.png" />
                        <p>our success is not only due to the quality of our work; it’s down to attitude, 
                            our approach and the way we treat our clients.</p>
                    </div>
                    <div class="right_banner">
                        <a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/right_arrow_03.png" /></a>
                    </div>
                    <div class="social_media">
                        <a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/banner_tweeter_03.jpg" /></a>
                        <a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/banner_facebook_03.jpg" /></a>
                        <a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/banner_linkedin_03.jpg" /></a>
                    </div>
                </div>
                <div class="dots">
                    <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/banner_dots_03.jpg" />
                </div>
            </div>
        </div>
        <div id="our_work">
            <div class="main_work">
                <div class="back_to_up">
                    <a href="javascript:void(0)" onclick="dtech.scrolltoTopOfPage()"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/back_to_up_03.jpg" /></a>
                </div>
                <div class="left_work">
                    <h1>our</h1>
                    <h2>work</h2>
                    <h3>methodology</h3>
                    <p>
                        Using agile methodology as an approach to development, we break large projects into smaller parts. Planning is the key to our work. We report on daily basis so that our client knows what has been the progress of the project. Detailed voice conversations with our worthy client leads to develop functionality plan and Acceptance Test Criteria at the start of the project. Once the requirements are set and we are good to go, the client can assign a project manager from his/her company or instead let us assign a project manager.  
                    </p>
                </div>
                <div class="right_work">
                    <div class="big_circle">
                        <div class="cirlce_upper_part">
                            <a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/tab_like_img_03.png" /></a>
                            <p>Requirements</p>
                        </div>
                        <div class="cirlce_left_part">
                            <a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/releasing_img_03.png" /></a>
                            <p>Release</p>
                        </div>
                        <div class="cirlce_right_part">
                            <a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/brush_big_img_03.png" /></a>
                            <p>Design</p>
                        </div>
                        <div class="cirlce_bottom_part">
                            <p>Development</p>
                            <a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/keyboard_img_03.png" /></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div id="services">
            <div class="main_services">
                <div class="back_to_up_services">
                    <a href="javascript:void(0)" onclick="dtech.scrolltoTopOfPage()"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/back_to_up_03.jpg" /></a>
                </div>
                <div class="our_services">

                    <div class="services_text">
                        <h1>our</h1>
                        <h2>services</h2>
                        <p>using agile methodology as an approach to development, we break large projects into smaller parts. Planning is the key to our work. we report on daily basis so taht our client knows what has been the progress of the project...</p>
                    </div>
                </div>
                <div class="services_img">
                    <div class="cirlce">
                        <a href="javascript:void(0)" onclick="dtech.showCirclePart(this)"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/lcd_03.png" /></a>
                        <div class="cirlce_part cirlce_data">
                            <div class="cross_img">
                                <a href="javascript:void(0)" onclick="dtech.hideCircle(this)"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/cross.png" /></a>
                            </div>
                            <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/lcd_03.png" />

                            <section>Website designing</section>
                            <p>Your website is your presence on the Web and your online presence is often your first interaction with potential customers. We, at D-tech, thoroughly plan and implement tailored designs to meet your particular needs and depict your brand identity in the perfect fashion. We take utmost care in web designing for you. We bring innovation, novelty and creativity at your doorstep within the purview of your organizational goals and brand strategy.</p>
                            <section>Web Bases Social Networking setups</section>
                            <p>We are providing open source and custom based social netwroking setups , like facebook and other social apps. We have expertises to handle open source pluggins of social network under wordpress or devloping according to own custom plateform.</p>
                            <section>Web based CRM's</section>
                            <p>Our CRM team has complete command over the Sugar framework and SOAP architecture allowing us to build extensive custom products on top of SugarCRM along with confidently mapping their unique business process requirements onto SugarCRM via Customizations and Integrations.</p>
                            <section>Web Based CMS</section>
                            <p>We simplify website management in order to allow business owners and non-technical personnel to add, author, and update web content on the fly with multilingual support. Our customized CMS puts messaging in the hands of the people who know it best, as it applies workflows, approvals, and permissions, as well as maintains a complete history of the changes. Editing content is as easy as editing a document with our CMS integration. Wordpress and Joomla are our experties</p>
                            <section>Web Based Business Applications</section>
                            <p>We simplify the management of development of business applications according client requirment, e.g sale , order , purchase, business , project management  systems. System will provide all the all the features like data stroing , reporting , emailing , access control security. </p>
                            <section>Web Based Business Applications</section>
                            <p>We are providing  business accounting web development solutions also provding the services to sync their softwares with other accounting systems using web services like xero integration.</p>
                            <section>Ecommerce Development</section>
                            <p>We are providing simplest ecommerce solutions , we have the expertises of custom based ecommerce devolpment also provding other open source plateforms like wordpress wocommerce pluggin, open cart, magento.</p>
                            <section> Slicing services</section>
                            <p>our html css coders has awesome expertises to hanlde the browser camptible and responsive design , We are dealing with html 5 , css 3.0 , web 2.0 standards to handle all html stuff</p>
                            <section>Facebook applications</section>
                            <p>We are dealign with an awsome plateform converting every app to facebook application, we have expertise to handle small and larger (businss) apps on facebook , automatically sharing , posting on walls , following facebook api.</p>

                        </div>
                    </div>
                    <div class="cirlce" id="app-cirle">
                        <a href="javascript:void(0)" onclick="dtech.showCirclePart(this)"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/pad_img_03.jpg" /></a>
                        <div class="pad_cirlce_part cirlce_data">
                            <div class="cross_img">
                                <a href="javascript:void(0)" onclick="dtech.hideCircle(this)"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/cross.png" /></a>
                            </div>
                            <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/pad_img_03.jpg" />

                            <section>Website designing</section>
                            <p>Your website is your presence on the Web and your online presence is often your first interaction with potential customers. We, at D-tech, thoroughly plan and implement tailored designs to meet your particular needs and depict your brand identity in the perfect fashion. We take utmost care in web designing for you. We bring innovation, novelty and creativity at your doorstep within the purview of your organizational goals and brand strategy.</p>
                            <section>Web Bases Social Networking setups</section>
                            <p>We are providing open source and custom based social netwroking setups , like facebook and other social apps. We have expertises to handle open source pluggins of social network under wordpress or devloping according to own custom plateform.</p>
                            <section>Web based CRM's</section>
                            <p>Our CRM team has complete command over the Sugar framework and SOAP architecture allowing us to build extensive custom products on top of SugarCRM along with confidently mapping their unique business process requirements onto SugarCRM via Customizations and Integrations.</p>
                            <section>Web Based CMS</section>
                            <p>We simplify website management in order to allow business owners and non-technical personnel to add, author, and update web content on the fly with multilingual support. Our customized CMS puts messaging in the hands of the people who know it best, as it applies workflows, approvals, and permissions, as well as maintains a complete history of the changes. Editing content is as easy as editing a document with our CMS integration. Wordpress and Joomla are our experties</p>
                            <section>Web Based Business Applications</section>
                            <p>We simplify the management of development of business applications according client requirment, e.g sale , order , purchase, business , project management  systems. System will provide all the all the features like data stroing , reporting , emailing , access control security. </p>
                            <section>Web Based Business Applications</section>
                            <p>We are providing  business accounting web development solutions also provding the services to sync their softwares with other accounting systems using web services like xero integration.</p>
                            <section>Ecommerce Development</section>
                            <p>We are providing simplest ecommerce solutions , we have the expertises of custom based ecommerce devolpment also provding other open source plateforms like wordpress wocommerce pluggin, open cart, magento.</p>
                            <section> Slicing services</section>
                            <p>our html css coders has awesome expertises to hanlde the browser camptible and responsive design , We are dealing with html 5 , css 3.0 , web 2.0 standards to handle all html stuff</p>
                            <section>Facebook applications</section>
                            <p>We are dealign with an awsome plateform converting every app to facebook application, we have expertise to handle small and larger (businss) apps on facebook , automatically sharing , posting on walls , following facebook api.</p>

                        </div>
                    </div>
                    <div class="cirlce" id="brush-cirle cirlce_data">
                        <a href="javascript:void(0)" onclick="dtech.showCirclePart(this)"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/brush_img_03.jpg" /></a>
                        <div class="brush_cirlce_part">
                            <div class="cross_img">
                                <a href="javascript:void(0)" onclick="dtech.hideCircle(this)"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/cross.png" /></a>
                            </div>
                            <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/brush_img_03.jpg" />

                            <section>Website designing</section>
                            <p>Your website is your presence on the Web and your online presence is often your first interaction with potential customers. We, at D-tech, thoroughly plan and implement tailored designs to meet your particular needs and depict your brand identity in the perfect fashion. We take utmost care in web designing for you. We bring innovation, novelty and creativity at your doorstep within the purview of your organizational goals and brand strategy.</p>
                            <section>Web Bases Social Networking setups</section>
                            <p>We are providing open source and custom based social netwroking setups , like facebook and other social apps. We have expertises to handle open source pluggins of social network under wordpress or devloping according to own custom plateform.</p>
                            <section>Web based CRM's</section>
                            <p>Our CRM team has complete command over the Sugar framework and SOAP architecture allowing us to build extensive custom products on top of SugarCRM along with confidently mapping their unique business process requirements onto SugarCRM via Customizations and Integrations.</p>
                            <section>Web Based CMS</section>
                            <p>We simplify website management in order to allow business owners and non-technical personnel to add, author, and update web content on the fly with multilingual support. Our customized CMS puts messaging in the hands of the people who know it best, as it applies workflows, approvals, and permissions, as well as maintains a complete history of the changes. Editing content is as easy as editing a document with our CMS integration. Wordpress and Joomla are our experties</p>
                            <section>Web Based Business Applications</section>
                            <p>We simplify the management of development of business applications according client requirment, e.g sale , order , purchase, business , project management  systems. System will provide all the all the features like data stroing , reporting , emailing , access control security. </p>
                            <section>Web Based Business Applications</section>
                            <p>We are providing  business accounting web development solutions also provding the services to sync their softwares with other accounting systems using web services like xero integration.</p>
                            <section>Ecommerce Development</section>
                            <p>We are providing simplest ecommerce solutions , we have the expertises of custom based ecommerce devolpment also provding other open source plateforms like wordpress wocommerce pluggin, open cart, magento.</p>
                            <section> Slicing services</section>
                            <p>our html css coders has awesome expertises to hanlde the browser camptible and responsive design , We are dealing with html 5 , css 3.0 , web 2.0 standards to handle all html stuff</p>
                            <section>Facebook applications</section>
                            <p>We are dealign with an awsome plateform converting every app to facebook application, we have expertise to handle small and larger (businss) apps on facebook , automatically sharing , posting on walls , following facebook api.</p>

                        </div>
                    </div>
                    <div class="cirlce" id="back-cirle">
                        <a href="javascript:void(0)" onclick="dtech.showCirclePart(this)"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/comments_img_03.jpg" /></a>
                        <div class="comments_cirlce_part  cirlce_data">
                            <div class="cross_img">
                                <a href="javascript:void(0)" onclick="dtech.hideCircle(this)"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/cross.png" /></a>
                            </div>
                            <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/comments_img_03.jpg" />

                            <section>Website designing</section>
                            <p>Your website is your presence on the Web and your online presence is often your first interaction with potential customers. We, at D-tech, thoroughly plan and implement tailored designs to meet your particular needs and depict your brand identity in the perfect fashion. We take utmost care in web designing for you. We bring innovation, novelty and creativity at your doorstep within the purview of your organizational goals and brand strategy.</p>
                            <section>Web Bases Social Networking setups</section>
                            <p>We are providing open source and custom based social netwroking setups , like facebook and other social apps. We have expertises to handle open source pluggins of social network under wordpress or devloping according to own custom plateform.</p>
                            <section>Web based CRM's</section>
                            <p>Our CRM team has complete command over the Sugar framework and SOAP architecture allowing us to build extensive custom products on top of SugarCRM along with confidently mapping their unique business process requirements onto SugarCRM via Customizations and Integrations.</p>
                            <section>Web Based CMS</section>
                            <p>We simplify website management in order to allow business owners and non-technical personnel to add, author, and update web content on the fly with multilingual support. Our customized CMS puts messaging in the hands of the people who know it best, as it applies workflows, approvals, and permissions, as well as maintains a complete history of the changes. Editing content is as easy as editing a document with our CMS integration. Wordpress and Joomla are our experties</p>
                            <section>Web Based Business Applications</section>
                            <p>We simplify the management of development of business applications according client requirment, e.g sale , order , purchase, business , project management  systems. System will provide all the all the features like data stroing , reporting , emailing , access control security. </p>
                            <section>Web Based Business Applications</section>
                            <p>We are providing  business accounting web development solutions also provding the services to sync their softwares with other accounting systems using web services like xero integration.</p>
                            <section>Ecommerce Development</section>
                            <p>We are providing simplest ecommerce solutions , we have the expertises of custom based ecommerce devolpment also provding other open source plateforms like wordpress wocommerce pluggin, open cart, magento.</p>
                            <section> Slicing services</section>
                            <p>our html css coders has awesome expertises to hanlde the browser camptible and responsive design , We are dealing with html 5 , css 3.0 , web 2.0 standards to handle all html stuff</p>
                            <section>Facebook applications</section>
                            <p>We are dealign with an awsome plateform converting every app to facebook application, we have expertise to handle small and larger (businss) apps on facebook , automatically sharing , posting on walls , following facebook api.</p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div id="contact_us">

            <?php echo $content; ?>
        </div>
    </body>
</html>