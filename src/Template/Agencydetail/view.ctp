<section class="content-header">
  <h1>
    <?php echo __('Agencydetail'); ?>
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
                                                                                                                <dt><?= __('Firstname') ?></dt>
                                        <dd>
                                            <?= h($agencydetail->firstname) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Lastname') ?></dt>
                                        <dd>
                                            <?= h($agencydetail->lastname) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Jobtype') ?></dt>
                                        <dd>
                                            <?= h($agencydetail->jobtype) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Email') ?></dt>
                                        <dd>
                                            <?= h($agencydetail->email) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Companyname') ?></dt>
                                        <dd>
                                            <?= h($agencydetail->companyname) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Tradingname') ?></dt>
                                        <dd>
                                            <?= h($agencydetail->tradingname) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Companyweb') ?></dt>
                                        <dd>
                                            <?= h($agencydetail->companyweb) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Licensenumber') ?></dt>
                                        <dd>
                                            <?= h($agencydetail->licensenumber) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Companyregistration') ?></dt>
                                        <dd>
                                            <?= h($agencydetail->companyregistration) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Consortium') ?></dt>
                                        <dd>
                                            <?= h($agencydetail->consortium) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Street') ?></dt>
                                        <dd>
                                            <?= h($agencydetail->street) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('City') ?></dt>
                                        <dd>
                                            <?= h($agencydetail->city) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Country') ?></dt>
                                        <dd>
                                            <?= h($agencydetail->country) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Ifother') ?></dt>
                                        <dd>
                                            <?= h($agencydetail->Ifother) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('State') ?></dt>
                                        <dd>
                                            <?= h($agencydetail->state) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Phone') ?></dt>
                                        <dd>
                                            <?= h($agencydetail->phone) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Fax') ?></dt>
                                        <dd>
                                            <?= h($agencydetail->fax) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Aboutus') ?></dt>
                                        <dd>
                                            <?= h($agencydetail->aboutus) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Promotion') ?></dt>
                                        <dd>
                                            <?= h($agencydetail->promotion) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Aboutusother') ?></dt>
                                        <dd>
                                            <?= h($agencydetail->aboutusother) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Id Users') ?></dt>
                                <dd>
                                    <?= $this->Number->format($agencydetail->id_users) ?>
                                </dd>
                                                                                                                <dt><?= __('Postcode') ?></dt>
                                <dd>
                                    <?= $this->Number->format($agencydetail->postcode) ?>
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
