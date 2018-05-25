<?php
/**
  * @var \App\View\AppView $this
  */
?>
<section class="content-header">
  <h1>
    Newhotel
    <small><?= __('Edit') ?></small>
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
        <?= $this->Form->create($newhotel, array('role' => 'form')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('namehotel', ['label' => 'Name Hotel']);
         
             echo $this->Form->input('diachi', array('label'=>'Address', 'type'=>'select', 'options'=>$diachi_view));

              echo $this->Form->input('diachimap', ['label' => 'Location on Map']);

            echo $this->Form->input('mota', ['label' => 'Description ']);
              echo $this->Html->image('/upload/hotel/'.$newhotel->hinhanh, ['alt' => 'hinhanh','class'=>'image_hotel_admin']);
            echo $this->Form->input('hinhanh', ['type' => 'file','label' => 'Image']); 
         
            echo $this->Form->input('thongtinhotel', ['label' => 'Detail Hotel']);

            $star = ['1' => '1 Star','2' => '2 Star','3' => '3 Star','4' => '4 Star','5' => '5 Star'];
        
          echo $this->Form->input('saohotel', array('label'=>'Number Star', 'type'=>'select', 'options'=>$star));
      
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
<style type="text/css">
  .wysihtml5-sandbox{
    height: 300px !important;
  }
</style>
<?php
$this->Html->css([
    'AdminLTE./plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min',
  ],
  ['block' => 'css']);

$this->Html->script([
  'https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js',
  'AdminLTE./plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min',
],
['block' => 'script']);
?>
<?php $this->start('scriptBotton'); ?>
<script type="text/javascript">
  $(document).ready(function() {
    $('#diachi').select2();
     $('#loaihinhhotel').select2();
});
//CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $('textarea').wysihtml5();
</script>
<?php $this->end(); ?>