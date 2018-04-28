<section class="content-header">
  <h1>
    <?php echo __('Newcruise'); ?>
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
                                                                                                                <dt><?= __('Portto') ?></dt>
                                        <dd>
                                            <?= h($newcruise->portto) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Portend') ?></dt>
                                        <dd>
                                            <?= h($newcruise->portend) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Price') ?></dt>
                                        <dd>
                                            <?= h($newcruise->price) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Loai') ?></dt>
                                        <dd>
                                            <?= h($newcruise->loai) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Status') ?></dt>
                                <dd>
                                    <?= $this->Number->format($newcruise->status) ?>
                                </dd>
                                                                                                
                                                                                                                                                            <dt><?= __('Modifine') ?></dt>
                                <dd>
                                    <?= h($newcruise->modifine) ?>
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
