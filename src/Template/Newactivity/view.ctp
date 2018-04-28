<section class="content-header">
  <h1>
    <?php echo __('Newactivity'); ?>
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
                                                                                                                <dt><?= __('Name') ?></dt>
                                        <dd>
                                            <?= h($newactivity->name) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Diachi') ?></dt>
                                        <dd>
                                            <?= h($newactivity->diachi) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Pdf') ?></dt>
                                        <dd>
                                            <?= h($newactivity->pdf) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Songay') ?></dt>
                                        <dd>
                                            <?= h($newactivity->songay) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Diemdon') ?></dt>
                                        <dd>
                                            <?= h($newactivity->diemdon) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Thoigiandon') ?></dt>
                                        <dd>
                                            <?= h($newactivity->thoigiandon) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Tansuat') ?></dt>
                                        <dd>
                                            <?= h($newactivity->tansuat) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Hinhanh') ?></dt>
                                        <dd>
                                            <?= h($newactivity->hinhanh) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Sokhach') ?></dt>
                                <dd>
                                    <?= $this->Number->format($newactivity->sokhach) ?>
                                </dd>
                                                                                                                <dt><?= __('Danhgia') ?></dt>
                                <dd>
                                    <?= $this->Number->format($newactivity->danhgia) ?>
                                </dd>
                                                                                                
                                                                                                                                                                                                
                                            
                                                                        <dt><?= __('Mota') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($newactivity->mota)); ?>
                            </dd>
                                                    <dt><?= __('Lichtrinh') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($newactivity->lichtrinh)); ?>
                            </dd>
                                                    <dt><?= __('Thongtinbosung') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($newactivity->thongtinbosung)); ?>
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
