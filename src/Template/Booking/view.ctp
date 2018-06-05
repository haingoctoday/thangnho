<section class="content-header">
  <h1>
    <?php echo __('Booking'); ?>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Back'), ['action' => 'index'], ['escape' => false])?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-header with-border">
                <i class="fa fa-info"></i>
                <h3 class="box-title"><?php echo __('Information'); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <dl class="dl-horizontal">
                                                                                                                <dt><?= __('Id Order') ?></dt>
                                        <dd>
                                            <?= h($booking->id_order) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Reference') ?></dt>
                                        <dd>
                                            <?= h($booking->reference) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Info Sale') ?></dt>
                                        <dd>
                                            <?= h($booking->info_sale) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Status') ?></dt>
                                <dd>
                                    <?= $this->Number->format($booking->status) ?>
                                </dd>
                                                                                                                <dt><?= __('User Order') ?></dt>
                                <dd>
                                    <?= $this->Number->format($booking->user_order) ?>
                                </dd>
                                                                                                
                                                                                                                                                                                                
                                            
                                                                        <dt><?= __('Data Order') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($booking->data_order)); ?>
                            </dd>
                                                            </dl>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- ./col -->
</div>
<!-- div -->

</section>
