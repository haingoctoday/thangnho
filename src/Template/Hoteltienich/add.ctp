<section class="content-header">
  <h1>
   Services Hotel
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
          <h3 class="box-title"><?= __(' ') ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($hoteltienich, array('role' => 'form')) ?>
          <div class="box-body">
          <?php
         //   echo $this->Form->input('nametienich','');
            echo $this->Form->input('nametienich', ['label' => 'Name services']);
            echo $this->Form->input('detailtienich', ['label' => 'Detail services']);
           // echo $this->Form->input('status', ['label' => 'Status']);
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
