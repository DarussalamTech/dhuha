<?php
$this->PcmWidget['side_menu'] = array('name' => 'DTLeftMenu',
    'attributes' => array(
        'links' => array(
            'header' => 'Dhuha',
            'mission' => 'Vision &amp; Mission',
            'goals' => 'Goals',
        ),
          'colors' => array(
            "header" => "#626C60",
            "mission" => "#FFFFFF",
            "goals" => "#04181B",
            )
        ));

$this->PcmWidget['dt_header'] = array('name' => 'DTHeaderPart',
    'attributes' => array(
        'viewName' => "/common/_dhuha"
        ));
?>

<section id="mission">
    <article>
        <div class="row">
            <div class="twelve columns">
                <div class="mission_part">
                    <h1>VISION</h1>
                    <h2>Known as a beacon of knowledge and Islamic value.</h2>
                    <h1>MISSION</h1>
                    <h2>The advancement of society through powering research, and encouraging academic and scientific excellence.</h2>
                </div>
            </div>
        </div>
    </article>
</section>
<section id="goals">
    <article>
        <div class="row">
            <div class="goals_text">
                <h1>GOALS</h1>
                <p>DHUHA International School‘s academic and non-academic goals may be summarized as follows:</p>
                <ul>
                    <li>To quality every student for entrance into colleges and universities around the world.</li>
                    <li>To provide a well rounded education based on a mastery English.</li>
                    <li>To enable students to acquire a firm command of a second language English.</li>
                    <li>To train students in logical reasoning and critical thinking.</li>
                    <li>To prepare students to be able to sustain intellectual efforts for longer period of home.</li>
                    <li>To generate excitement for life long learning.</li>
                    <li>To uphold high standards of ethical, moral and civic conduct PHILOSOPHY.</li>
                    <li>To make informed decisions on social issues.</li>
                    <li>To participate in extra curricular activities.</li>
                    <li>To defend convictions and reverse negative peer pressure.</li>
                    <li>To foster tolerance cooperation and team work.</li>
                </ul>
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

<link href="<?php echo Yii::app()->baseUrl; ?>/frontend/css/dhuha.css" rel="stylesheet" />