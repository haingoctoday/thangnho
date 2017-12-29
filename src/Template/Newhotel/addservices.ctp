

<section class="content-header">
  <h1>
    Add Services of Hotel
    <small><?= __('Add Services') ?></small>
  </h1>
  <ol class="breadcrumb">
    <li>
      <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Back'), ['action' => 'index'], ['escape' => false]) ?>
    </li>
  </ol>
</section>
<?php //print_r($hoteltienich['namehotel'])?>
<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?= $hoteltienich['namehotel'] ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($hoteltienich, array('role' => 'form')) ?>
        <div class="box-body">
          <?php
     
     
          echo $this->Form->input('serviceslist', array('label'  => 'List Services',
            'type' => 'select',
            'multiple' => 'checkbox',
            'options' => $tienich_view,
            'value' => $tienich_view_old,
            'class'=>'checkbox',
            'id'=>'checkboxid',
          )); 


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

