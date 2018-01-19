<section class="content-header">
  <h1>
    <?php echo __('Newhotel'); ?>
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
                                                                                                                <dt><?= __('Namehotel') ?></dt>
                                        <dd>
                                            <?= h($newhotel->namehotel) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Diachi') ?></dt>
                                        <dd>
                                            <?= h($newhotel->diachi) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Hinhanh') ?></dt>
                                        <dd>
                                            <?= h($newhotel->hinhanh) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Hinhanhnho') ?></dt>
                                        <dd>
                                            <?= h($newhotel->hinhanhnho) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Thongtinhotel') ?></dt>
                                        <dd>
                                            <?= h($newhotel->thongtinhotel) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Saohotel') ?></dt>
                                        <dd>
                                            <?= h($newhotel->saohotel) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                            
                                                                                                                                                                                                
                                            
                                                                        <dt><?= __('Mota') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($newhotel->mota)); ?>
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
