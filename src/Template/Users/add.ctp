<section class="content-header">
  <h1>
    Users
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
        <?= $this->Form->create($users, array('role' => 'form')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('email',['value'=>$email_u]);
            echo $this->Form->input('tendangnhap',['label'=>'UserName']);
         //   echo $this->Form->input('images');
            echo $this->Form->input('password');
            echo $this->Form->input('fullName',['label'=>'Full Name']);
            $phanloai = array('admin'=>'Administration','user'=>'Users','nhacungcap'=>'Agents');
           
             echo $this->Form->input('phanloai', array('label'=>'Type User', 'type'=>'select', 'options'=>$phanloai));
            echo $this->Form->input('phone');
            //echo $this->Form->input('status');
           // echo $this->Form->input('admin_check');
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
