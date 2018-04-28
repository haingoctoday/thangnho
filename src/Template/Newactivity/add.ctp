<section class="content-header">
  <h1>
    New Activity 
    <small><?= __('Add') ?></small>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Back'), ['action' => 'index'], ['escape' => false]) ?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?= __('Form') ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($newactivity, array('role' => 'form','enctype' => 'multipart/form-data')) ?>
          <div class="box-body">
          <?php
          
           echo $this->Form->input('category', array('label'=>'Category', 'type'=>'select', 'options'=>$category_view));

             $loai = ['tour' => 'Tour','activity' => 'Activity'];
        
            echo $this->Form->input('loai', array('label'=>'Category', 'type'=>'select', 'options'=>$loai));

            echo $this->Form->input('name', ['label' => 'Name Activity']);
             echo $this->Form->input('hinhanh', ['type' => 'file','label' => 'Image']); 
            echo $this->Form->input('diachi', array('label'=>'Address', 'type'=>'select', 'options'=>$diachi_view));
            echo $this->Form->input('mota', ['label' => 'Descrepsion']);
            echo $this->Form->input('songay', ['label' => 'Duration']);
            echo $this->Form->input('lichtrinh', ['label' => 'Expect']);
            echo $this->Form->input('diemdon', ['label' => 'Departure Point']);
            echo $this->Form->input('thoigiandon', ['label' => 'Departure Time']);
            echo $this->Form->input('tansuat', ['label' => 'Operates']);
            echo $this->Form->input('giatien', ['label' => 'Price']);
            echo $this->Form->input('thongtinbosung', ['label' => 'Additional Info']);
            echo $this->Form->input('sokhach', ['label' => 'Adult']);
             echo $this->Form->input('treem', ['label' => 'Childent']);
              $star = ['1' => '1 Star','2' => '2 Star','3' => '3 Star','4' => '4 Star','5' => '5 Star'];
        
          echo $this->Form->input('danhgia', array('label'=>'Vote', 'type'=>'select', 'options'=>$star));
         
          ?>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <?= $this->Form->button(__('Save')) ?>
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>

<?php
$this->Html->css([
    'AdminLTE./plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min',
  ],
  ['block' => 'css']);

$this->Html->script([
  'https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js',
  'AdminLTE./plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min',
],
['block' => 'script']);
?>

<?php $this->start('scriptBotton'); ?>


<script type="text/javascript">
  $(document).ready(function() {
    $('#diachi').select2();
     $('#category').select2();
});
 $('textarea').wysihtml5();
</script>
<?php $this->end(); ?>