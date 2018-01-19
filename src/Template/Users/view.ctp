<section class="content-header">
  <h1>
    <?php echo __('Usersm'); ?>
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
                                            <?= h($usersm->email) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Tendangnhap') ?></dt>
                                        <dd>
                                            <?= h($usersm->tendangnhap) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Images') ?></dt>
                                        <dd>
                                            <?= h($usersm->images) ?>
                                        </dd>
                                                                                                                                                                                                                                            <dt><?= __('FullName') ?></dt>
                                        <dd>
                                            <?= h($usersm->fullName) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Phanloai') ?></dt>
                                        <dd>
                                            <?= h($usersm->phanloai) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Phone') ?></dt>
                                        <dd>
                                            <?= h($usersm->phone) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Status') ?></dt>
                                <dd>
                                    <?= $this->Number->format($usersm->status) ?>
                                </dd>
                                                                                                                <dt><?= __('Admin Check') ?></dt>
                                <dd>
                                    <?= $this->Number->format($usersm->admin_check) ?>
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
