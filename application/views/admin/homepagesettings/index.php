<?php
/* @var $this homepagesettings  */
/* @var $dataProvider CActiveDataProvider */

?>
<div class="col-lg-12 list-surveys">

    <?php $this->renderPartial('super/fullpagebar_view', array(
        'fullpagebar' => array(
            'boxbuttons'=>true,
            'returnbutton'=>array(
                'url'=>true,
                'text'=>gT('Return to admin panel'),
            ),
        )
    )); ?>

    <h3><?php eT('Home Page settings'); ?></h3>

    <div class="row">
        <label class="col-sm-2 control-label"><?php eT("Display logo: ");?></label>
        <div class="col-sm-2">
            <?php $this->widget('yiiwheels.widgets.switch.WhSwitch', array('name' => 'show_logo', 'id'=>'show_logo', 'value'=>$bShowLogo));?>

            <input type="hidden" id="show_logo-url" data-url="<?php echo App()->createUrl('admin/homepagesettings/sa/toggleShowLogoStatus');?>" />
        </div>
        <label class="col-sm-2 control-label"><?php eT("Show last visited survey and question: ");?></label>
        <div class="col-sm-2">
            <?php $this->widget('yiiwheels.widgets.switch.WhSwitch', array('name' => 'show_last_survey_and_question', 'id'=>'show_last_survey_and_question', 'value'=>$bShowLastSurveyAndQuestion));?>
            <input type="hidden" id="show_last_survey_and_question-url" data-url="<?php echo App()->createUrl('admin/homepagesettings/sa/toggleShowLastSurveyAndQuestion');?>" />
        </div>
        <br/><br/>
    </div>


    <div class="row">
        <label class="col-sm-2 control-label"><?php eT("Boxes by row:");?></label>
        <div class="col-sm-1">
            <input class="form-control" type="number" id="iBoxesByRow" value="<?php echo $iBoxesByRow;?>" max="6" min="0" name="boxes_by_row"/>
        </div>
        <label class="col-sm-2 col-sm-offset-1 control-label"><?php eT("Boxes offset:");?></label>
        <div class="col-sm-1">
            <input  class="form-control" type="number" id="iBoxesOffset" value="<?php echo $iBoxesOffset;?>" max="10" min="0" name="boxes_offset"/>
        </div>
        <div class="col-sm-1">

            <input type="hidden" id="boxesupdatemessage" data-ajaxsuccessmessage="<?php eT('Boxes setting updated !');?>" />
            <button class="btn btn-default" type="button" id="save_boxes_setting" data-url="<?php echo App()->createUrl('admin/homepagesettings/sa/setBoxesSettings');?>"><?php eT('Save boxes settings');?></button>
        </div>
        <br/><br/><br/><br/>
    </div>


    <!-- Grid -->
    <h3><?php eT('Boxes');?></h3>

    <div class="row">
        <div class="col-sm-12 content-right">

            <?php $this->widget('bootstrap.widgets.TbGridView', array(
                'dataProvider'=>$dataProvider,
                'columns' => array(
                    array(
                        'header' => gT('Position'),
                        'name' => 'position',
                        'value'=>'$data->position',
                        'htmlOptions' => array('class' => 'col-md-1'),
                    ),
                    array(
                        'header' => gT('Title'),
                        'name' => 'title',
                        'value'=>'$data->title',
                        'htmlOptions' => array('class' => 'col-md-1'),
                    ),
                    array(
                        'header' => gT('Icon'),
                        'name' => 'icon',
                        'value'=>'$data->spanicon',
                        'type'=>'raw',
                        'htmlOptions' => array('class' => 'col-md-1'),
                    ),
                    array(
                        'header' => gT('Description'),
                        'name' => 'desc',
                        'value'=>'$data->desc',
                        'htmlOptions' => array('class' => 'col-md-1'),
                    ),
                    array(
                        'header' => gT('Pointed url'),
                        'name' => 'url',
                        'value'=>'$data->url',
                        'htmlOptions' => array('class' => 'col-md-1'),
                    ),
                    array(
                        'header' => gT('User group'),
                        'name' => 'url',
                        'value'=>'$data->usergroupname',
                        'htmlOptions' => array('class' => 'col-md-1'),
                    ),
                    array(
                        'header' => '',
                        'name' => 'actions',
                        'value'=>'$data->buttons',
                        'type'=>'raw',
                        'htmlOptions' => array('class' => 'col-md-1'),
                    ),
                ),
            ));
            ?>
        </div>
    </div>
</div>
