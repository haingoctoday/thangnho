<?php
/**
  * @var \App\View\AppView $this
  */
?>
<section class="content-header">
  <h1>
    Newcruise
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
        <?= $this->Form->create($newcruise, array('role' => 'form')) ?>
          <div class="box-body">
          <?php
              echo $this->Form->input('loai', array('label'=>'Cruise Category', 'type'=>'select', 'options'=>$category_view));
            echo $this->Form->input('portto',['label'=>'Port To']);
            echo $this->Form->input('portend',['label'=>'Port To']);
            echo $this->Form->input('price',['label'=>'Price']);
            echo $this->Form->input('status',['label'=>'status']);
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
