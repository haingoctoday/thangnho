<?php
/**
  * @var \App\View\AppView $this
  */
?>
<section class="content-header">
  <h1>
      Slide Agent Page
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
        <?= $this->Form->create($slideagent, array('role' => 'form','enctype' => 'multipart/form-data')) ?>
          <div class="box-body">
         <?php
            echo $this->Form->input('name_slide',['label'=>'Name Slide']);
            //echo $this->Form->input('image_slide');
            echo $this->Html->image('/upload/slide/'.$slideagent->hinhanh, ['alt' => 'hinhanh','class'=>'image_hotel_admin']);
              echo $this->Form->input('hinhanh', ['type' => 'file','label' => 'Image ( size image : than more 720px x 320px )']); 
            echo $this->Form->input('detail_slide',['label'=>'Detail Slide']); 
         echo $this->Form->input('linkslide');
             echo $this->Form->input('price',['label'=>'Price']); 
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
