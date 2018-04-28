<section class="content-header">
  <h1>
    <?php echo __('Slideagent'); ?>
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
                                                                                                                <dt><?= __('Name Slide') ?></dt>
                                        <dd>
                                            <?= h($slideagent->name_slide) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Image Slide') ?></dt>
                                        <dd>
                                            <?= h($slideagent->image_slide) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Xoa') ?></dt>
                                <dd>
                                    <?= $this->Number->format($slideagent->xoa) ?>
                                </dd>
                                                                                                
                                                                                                                                                           
                                                                                                    
                                            
                                                                        <dt><?= __('Detail Slide') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($slideagent->detail_slide)); ?>
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
