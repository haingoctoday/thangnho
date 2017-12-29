<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    List Hotel
    <div class="pull-right"><?= $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('List of') ?> List Hotel</h3>
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
              <th><?= $this->Paginator->sort('namehotel') ?></th>
              <th><?= $this->Paginator->sort('diachi') ?></th>
              <th><?= $this->Paginator->sort('hinhanh') ?></th>
            
              <th><?= $this->Paginator->sort('thongtinhotel') ?></th>
              <th><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($newhotel as $newhotel): ?>
              <tr>
                <td><?= $this->Number->format($newhotel->id) ?></td>
                <td><?= h($newhotel->namehotel) ?></td>
                <td><?= h($newhotel->diachi) ?></td>
                <td><?php echo $this->Html->image('/upload/hotel/'.$newhotel->hinhanh, ['alt' => 'hinhanh','class'=>'image_hotel_admin']);?></td>
               
                <td><?= h($newhotel->thongtinhotel) ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?php // $this->Html->link(__('View'), ['action' => 'view', $newhotel->id], ['class'=>'btn btn-info btn-xs']) ?>
                 
                    <?= $this->Html->link(__('Add room'), ['action' => 'addroom', $newhotel->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Add services'), ['action' => 'addservices', $newhotel->id], ['class'=>'btn btn-info btn-xs']) ?>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $newhotel->id], ['class'=>'btn btn-warning btn-xs']) ?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $newhotel->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-xs']) ?>
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
