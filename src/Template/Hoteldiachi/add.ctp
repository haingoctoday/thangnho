<section class="content-header">
  <h1>
    Location
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
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($hoteldiachi, array('role' => 'form','enctype' => 'multipart/form-data')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('diachi',['label'=>'Location']);
            echo $this->Form->input('mota',['label'=>'Detail Location']);
              echo $this->Form->input('hinhanh', ['type' => 'file','label' => 'Image']); 
         //   echo $this->Form->input('status',['label'=>'Status']);
       //     echo $this->Form->input('loai',['label'=>'Category']);
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
