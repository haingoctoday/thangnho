<section class="content-header">
  <h1>
    <?php echo __('Userreview'); ?>
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
                                            
                                            
                                                                                                                                                            <dt><?= __('Id Activity') ?></dt>
                                <dd>
                                    <?= $this->Number->format($userreview->id_activity) ?>
                                </dd>
                                                                                                                <dt><?= __('Id User') ?></dt>
                                <dd>
                                    <?= $this->Number->format($userreview->id_user) ?>
                                </dd>
                                                                                                                <dt><?= __('Rating') ?></dt>
                                <dd>
                                    <?= $this->Number->format($userreview->rating) ?>
                                </dd>
                                                                                                
                                                                                                                                                                                                
                                            
                                                                        <dt><?= __('Review') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($userreview->review)); ?>
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
