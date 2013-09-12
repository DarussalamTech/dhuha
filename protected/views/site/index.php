<?php
$this->PcmWidget['side_menu'] = array('name' => 'DTLeftMenu',
    'attributes' => array(
        'links' => array(
            'header' => 'Activites',
            'english_subject' => 'English',
            'science_lab' => 'Science',
            'library' => 'Library',
            'computer' => 'Computer',
            'artlab' => 'Art',
        )
        ));
$this->PcmWidget['dt_header'] = array('name' => 'DTHeaderPart',
    'attributes' => array(
        'viewName' => "/common/_index"
        ));
?>
<section id="english_subject">
    <article>

        <div class="row">
            <div class="twelve columns">
                <div class="english_book">
                    <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/book.png" />
                </div>
                <div class="english_part">
                    <h1>ENGLISH LAB</h1>
                    <p>Students are provided with special classes for English as a 'Second Language'. The classes are based on the four skills of English language i.e reading, writing, listening and speaking along with grammar &amp; pronunciation lessons.</p>
                </div>
            </div>
        </div>
    </article>
</section>
<section id="science_lab">
    <article>
        <div class="row">
            <div class="twelve columns">
                <div class="five columns">
                    <div class="science_part">
                        <h1>SCIENCE</h1>
                        <h2>LABS</h2>
                        <p>Physics, Chemistry and Biology labs are equipped with apparatus and the material required for conducting practicals for middle and higher classes.</p>
                    </div>
                </div>
                <div class="six columns">
                    <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/butterfly.png" />
                    <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/flask.png" />
                </div>
            </div>
        </div>
    </article>
</section>

<section id="library">
    <article>
        <div class="row">
            <div class="library_text">
                <h1>LIBRARY</h1>
                <p>School libraries help children to discover for themselves by independent study and learning how to ask questions. A good enough library which provides all the books to facilitate the students. This study assesses the educational development of students and library use by students and the problems encountered.</p>
            </div>
            <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/library_logo_03.png" class="library_logo" />
        </div>
    </article>
</section>
<section id="computer">
    <article>
        <div class="row">
            <div class="twelve columns">
                <div class="six columns">
                    <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/computer.png" />
                </div>
                <div class="six columns">
                    <div class="computer_part">
                        <h1>COMPUTER LAB</h1>
                        <p>Our state-of-the-art computer lab provides access to interactive education to all students of our school. Students are acquainted with Information and Communications Technology from a grass roots level. We have the latest computers and we make sure that every student has access to a computer.</p>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>
<section id="artlab">
    <article>
        <div class="row">
            <div class="twelve columns">
                <div class="artlab_part">
                    <h1>ART LAB</h1>
                    <div class="art_images">
                        <div class="four columns">
                            <a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/art_image_1_03.png"></a>
                        </div>
                        <div class="four columns">
                            <a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/art_img_2_03.png"></a>
                        </div>
                        <div class="four columns">
                            <a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/art_img_3_03.png"></a>
                        </div>
                    </div>
                    <div class="art_images">
                        <div class="four columns">
                            <a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/art_image_1_03.png"></a>
                        </div>
                        <div class="four columns">
                            <a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/art_img_2_03.png"></a>
                        </div>
                        <div class="four columns">
                            <a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/art_img_3_03.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>
<section id="content">
    <article>
        <div class="row">
            <div class="twelve columns">
                <p>All rights reserved. Dhuha International School</p>
                <span>Crafted at Dtech</span>
            </div>
        </div>
    </article>
</section>