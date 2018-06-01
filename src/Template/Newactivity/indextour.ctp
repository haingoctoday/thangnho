<!-- Content Header (Page header) -->
<?php
  $page_current = isset($this->request->query['p'])?$this->request->query['p']:'tour';
?>
<section class="content-header">
  <h1>
    Tour List
    <div class="pull-right"><?= $this->Html->link(__('New'), ['action' => 'add','q'=>$page_current], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('List of') ?>  Tour (<?php echo $this->Paginator->ngoc(); ?>)</h3>
          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="row input-group">
               <div class="col-xs-6 input-group-sm"  style="width: 180px;">
                <!-- <input type="text" name="search_city" class="form-control" placeholder="<?= __('Fill in to start search') ?>"> -->
               <?php  echo $this->Form->input('diachi', array('label'=>false, 'type'=>'select', 'options'=>$diachi_view)); ?>
              </div>
                <div class="col-xs-6  input-group input-group-sm"  style="width: 180px;">
                <input type="text" name="search" class="form-control" placeholder="<?= __('Fill in to start search') ?>">
                <span class="input-group-btn">
                <button class="btn btn-info btn-flat" type="submit"><?= __('Filter') ?></button>
                </span>
              </div>
            </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th></th>
              <th><?= $this->Paginator->sort('name',['label'=>'Name Tour']) ?></th>
               <th><?= $this->Paginator->sort('hinhanh',['label'=>'Picture']) ?></th>
              <th><?= $this->Paginator->sort('diachi',['label'=>'Address']) ?></th>
              <th><?= $this->Paginator->sort('songay',['label'=>'Number Day']) ?></th>
            <th><?= $this->Paginator->sort('discount',['label'=>'Discount']) ?></th>
             
              <th><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($newactivity as $newactivity): ?>
              <tr>
                 <td  <?= ($newactivity->hot == '1')?'style="background: #00a65a"':'' ?>><?php // $this->Number->format($newhotel->id) ?></td>
                <td><?= h($newactivity->name) ?></td>
                 <td><?php echo $this->Html->image('/upload/activity/'.$newactivity->hinhanh, ['alt' => 'hinhanh','class'=>'image_hotel_admin']);?></td>
              
              <td><?= h($newactivity->diachi) ?></td>
                <td><?= h($newactivity->songay) ?></td>
              <td><?= h($newactivity->discount) ?> %</td>
                <td class="actions" style="">
                  <?= $this->Html->link(__('View'), ['controller' => 'Agents','action' => 'toursbooknow','?' => array('agents' => $newactivity->name,'stt'=>$newactivity->id) ], ['class'=>'btn btn-info btn-xs','target'=>'blank']) ?>
                   <?= $this->Html->link(__('Itinerary'), ['action' => 'addItinerary', $newactivity->id], ['class'=>'btn btn-info btn-xs']) ?>
                    <?= $this->Html->link(__('Inclusions'), ['action' => 'inclusions', $newactivity->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Exclusions'), ['action' => 'exclusions', $newactivity->id], ['class'=>'btn btn-info btn-xs']) ?>
                        <?php // $this->Html->link(__('Add list day open'), ['action' => 'view', $newactivity->id], ['class'=>'btn btn-info btn-xs']) ?>
                  <?php // $this->Html->link(__('View'), ['action' => 'view', $newactivity->id], ['class'=>'btn btn-info btn-xs']) ?>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $newactivity->id], ['class'=>'btn btn-warning btn-xs']) ?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $newactivity->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-xs']) ?>
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
<?php $this->start('scriptBotton'); ?>
<script type="text/javascript">
  $(document).ready(function() {
    $('#diachi').select2(); 
});
</script>
<?php $this->end(); ?>