<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Agency Sign Up 
    <div class="pull-right"><?= $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('List of') ?>  Agency Sign Up </h3>
          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm"  style="width: 180px;">
                <input type="text" name="search" class="form-control" placeholder="<?= __('Fill in to start search') ?>">
                <span class="input-group-btn">
                <button class="btn btn-info btn-flat" type="submit"><?= __('Filter') ?></button>
                </span>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th><?= $this->Paginator->sort('id') ?></th>
              <th><?= $this->Paginator->sort('id_users') ?></th>
              <th><?= $this->Paginator->sort('firstname') ?></th>
              <th><?= $this->Paginator->sort('lastname') ?></th>
              <th><?= $this->Paginator->sort('jobtype') ?></th>
              <th><?= $this->Paginator->sort('email') ?></th>
              <th><?= $this->Paginator->sort('companyname') ?></th>
              <th><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($agencydetail as $agencydetail): ?>
              <tr>
                <td><?= $this->Number->format($agencydetail->id) ?></td>
                <td><?= $this->Number->format($agencydetail->id_users) ?></td>
                <td><?= h($agencydetail->firstname) ?></td>
                <td><?= h($agencydetail->lastname) ?></td>
                <td><?= h($agencydetail->jobtype) ?></td>
                <td><?= h($agencydetail->email) ?></td>
                <td><?= h($agencydetail->companyname) ?></td>
                <td class="actions" style="white-space:nowrap">
                   <?php //$this->Html->link(__('Create User Login'), ['action' => 'createuserlogin', $agencydetail->id], ['class'=>'btn btn-info btn-xs']) ?>

                   <?=

                    $this->Html->link(
    'Create User Login',
 //   ['admin-agency-signup-new',$agencydetail->email],
     ['controller' => 'Users', 'action' => 'add', $agencydetail->email],
    ['class' => 'btn btn-info btn-xs']
);

?>
                  <?= $this->Html->link(__('View'), ['action' => 'view', $agencydetail->id], ['class'=>'btn btn-info btn-xs']) ?>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $agencydetail->id], ['class'=>'btn btn-warning btn-xs']) ?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $agencydetail->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
            <?php echo $this->Paginator->numbers(); ?>
          </ul>
        </div>
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
<!-- /.content -->
