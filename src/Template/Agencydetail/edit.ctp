<?php
/**
  * @var \App\View\AppView $this
  */
?>
<section class="content-header">
  <h1>
    Agencydetail
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
        <?= $this->Form->create($agencydetail, array('role' => 'form')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('id_users');
            echo $this->Form->input('firstname');
            echo $this->Form->input('lastname');
            echo $this->Form->input('jobtype');
            echo $this->Form->input('email');
            echo $this->Form->input('companyname');
            echo $this->Form->input('tradingname');
            echo $this->Form->input('companyweb');
            echo $this->Form->input('licensenumber');
            echo $this->Form->input('companyregistration');
            echo $this->Form->input('consortium');
            echo $this->Form->input('street');
            echo $this->Form->input('postcode');
            echo $this->Form->input('city');
            echo $this->Form->input('country');
            echo $this->Form->input('Ifother');
            echo $this->Form->input('state');
            echo $this->Form->input('phone');
            echo $this->Form->input('fax');
            echo $this->Form->input('aboutus');
            echo $this->Form->input('promotion');
            echo $this->Form->input('aboutusother');
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
