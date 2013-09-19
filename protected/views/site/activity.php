<?php
$this->PcmWidget['side_menu'] = array('name' => 'DTLeftMenu',
    'attributes' => array(
        'links' => array(
            'header' => 'Activites',
            'english_subject' => 'English',
            'science_lab' => 'Science',
            'computer' => 'Computer',
            'library' => 'Library',
            'artlab' => 'Art',
        ),
        'colors' => array(
            "header" => "#626C60",
            "english_subject" => "#626C60",
            "science_lab" => "#626C60",
            "computer" => "#626C60",
            "library" => "#626C60",
            "artlab" => "#073829",
        )
        ));
$this->PcmWidget['dt_header'] = array('name' => 'DTHeaderPart',
    'attributes' => array(
        'viewName' => "/common/_index"
        ));

$this->PcmWidget['lightbox'] = array('name' => 'DTLightBox',
    'attributes' => array(
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

<section id="artlab">
    <article>
        <div class="row">
            <div class="twelve columns">
                <div class="artlab_part">
                    <h1>ART LAB</h1>
                    <p>
                       All our young kids of kindgarten visit the activity room 
                       through out the week as we prefer to give our students such as 
                       we prefer to give our students such an environment which will make 
                       learning more fun and curiosity centered. Here our toddlers are 
                       involved in various activities based on social life or religion and
                       they perform variety of tasks based on art & craft.
                    </p>
                </div>
            </div>
        </div>
    </article>
</section>
<?php
/**
 * rendering footer
 */
$this->renderPartial("/site/_footer");
?>

