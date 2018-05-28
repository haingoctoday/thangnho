<section class="content-header">
<h1>
<?php echo __('Newtransfer'); ?>
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
<dt><?= __('Destination') ?></dt>
<dd>
<?= h($newtransfer->destination) ?>
</dd>
<dt><?= __('Pick-Up From') ?></dt>
<dd>
<?= h($newtransfer->pickupfrom) ?>
</dd>
<dt><?= __('Drop-off To') ?></dt>
<dd>
<?= h($newtransfer->dropoffto) ?>
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
