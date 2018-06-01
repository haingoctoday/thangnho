<?php
/**
  * @var \App\View\AppView $this
  */
?>
<section class="content-header">
  <h1>
     User Review Activity    <small><?= __('Edit') ?></small>
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
        <?= $this->Form->create($userreview, array('role' => 'form')) ?>
          <div class="box-body">
          <?php
           echo $this->Form->input('id_activity',['label'=>'ID Activity']);
            echo $this->Form->input('id_user',['label'=>'ID Users']);
            echo $this->Form->input('review',['label'=>'Review']);
            $star = ['1' => '1 Star','2' => '2 Star','3' => '3 Star','4' => '4 Star','5' => '5 Star'];
        
          echo $this->Form->input('rating', array('label'=>'Rating', 'type'=>'select', 'options'=>$star));
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
