<section class="content-header">
  <h1>
    <?php echo __('Custome'); ?>
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
                                                                                                                <dt><?= __('Email') ?></dt>
                                        <dd>
                                            <?= h($custome->email) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Username') ?></dt>
                                        <dd>
                                            <?= h($custome->username) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Phone') ?></dt>
                                        <dd>
                                            <?= h($custome->phone) ?>
                                        </dd>
                                                                                                                                                                                                                                            <dt><?= __('Phanloai') ?></dt>
                                        <dd>
                                            <?= h($custome->phanloai) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Status') ?></dt>
                                <dd>
                                    <?= $this->Number->format($custome->status) ?>
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
