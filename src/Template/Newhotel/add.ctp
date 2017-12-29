
<section class="content-header">
  <h1>
    List Hotel
    <small><?= __('Add') ?></small>
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
           <h3 class="box-title"><?= __('Add room') ?></h3>
        </div>
     
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($newhotel, array('role' => 'form','enctype' => 'multipart/form-data')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('loaihinhhotel', array('label'=>'Category Hotel', 'type'=>'select', 'options'=>$category_view));
            echo $this->Form->input('namehotel', ['label' => 'Name Hotel']);
         
             echo $this->Form->input('diachi', array('label'=>'Address', 'type'=>'select', 'options'=>$diachi_view));



            echo $this->Form->input('mota', ['label' => 'Descrepsion']);
      
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
<?php $this->start('scriptBotton'); ?>
<script type="text/javascript">
  $(document).ready(function() {
    $('#diachi').select2();
     $('#loaihinhhotel').select2();
});

</script>
<?php $this->end(); ?>