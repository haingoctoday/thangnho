<?php
/**
  * @var \App\View\AppView $this
  */
?>
<section class="content-header">
  <h1>
    Groupuser    <small><?= __('Edit') ?></small>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Back'), ['action' => 'index'], ['escape' => false]) ?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?= __('Form') ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($groupuser, array('role' => 'form')) ?>
          <div class="box-body">
            <?php echo $groupuser['nameGroup'] ?>
            <br>
         Add User into Group 
         <?php 
           echo $this->Form->input('userGroup', array('label'=>'Email User', 'type'=>'select', 'options'=>$user_view,'multiple'=>'multiple'));
           ?>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <?= $this->Form->button(__('Save')) ?>
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>
<?php $this->start('scriptBotton'); ?>
<script type="text/javascript">
  $(document).ready(function() {
    var s2 = $('#usergroup').select2();
$('#usergroup').val(<?php echo ($groupuser['userGroup']) ?>);
$('#usergroup').trigger('change.select2');
 // var vals = <?php // echo ($groupuser['userGroup']) ?>;

//vals.forEach(function(e){
// if(!s2.find('option:contains(' + e + ')').length) 
//   s2.append($('<option>').text(e));
// });

//s2.val(vals).trigger("change"); 
});
</script>
<?php $this->end(); ?>