<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Cruise List
    <div class="pull-right"><?= $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('List of') ?> Cruise</h3>
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
               <th> Destination</th>
              <th><?= $this->Paginator->sort('portto', ['label' => 'Port To']) ?></th>
              <th><?= $this->Paginator->sort('portend', ['label' => 'Port End']) ?></th>
           
         
             
              <th><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($newcruise as $newcruise): ?>
              <tr>
                 <td><?= ($newcruise->loai == '1')?'HaLong Bay':'Mekong' ?></td>
                <td><?= h($newcruise->portto) ?></td>
                <td><?= h($newcruise->portend) ?></td>
             
              
               
                <td class="actions" style="">
                   <?= $this->Html->link(__('Add transfers'), ['action' => 'addtransfer', $newcruise->id], ['class'=>'btn btn-info btn-xs']) ?>
                  <?= $this->Html->link(__('View'), ['action' => 'view', $newcruise->id], ['class'=>'btn btn-info btn-xs']) ?>

                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $newcruise->id], ['class'=>'btn btn-warning btn-xs']) ?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $newcruise->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-xs']) ?>
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
