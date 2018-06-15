<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Booking    <div class="pull-right"><?= $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('List of') ?> Booking</h3>
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
              <th></th>
              <th><?= $this->Paginator->sort('id_order') ?></th>
              <th><?= $this->Paginator->sort('status') ?></th>
              <th><?= $this->Paginator->sort('user_order') ?></th>
              <th><?= $this->Paginator->sort('reference') ?></th>
              <th><?= $this->Paginator->sort('total order') ?></th>
              <th><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($booking as $booking): ?>
              <tr>
                <td><?php // $this->Number->format($booking->id) ?></td>
                <td><?= h($booking->id_order) ?></td>
                <td><?= $status_order_main[$booking->status] ?></td>
                <td><?php
echo $user_view[$booking->user_order];?></td>
                <td><?= h($booking->reference) ?></td>
                <td><?php echo $booking->sumprice * $tygia ?> $</td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('View'), ['controller'=>'Agents','action' => 'viewbooking', '?'=>['id'=>$booking->id_order]], ['class'=>'btn btn-info btn-xs']) ?>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $booking->id], ['class'=>'btn btn-warning btn-xs']) ?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $booking->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-xs']) ?>
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
