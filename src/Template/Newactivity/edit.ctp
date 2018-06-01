<?php
$type_site = '';
 $page_current = $newactivity->loai;
  switch ($page_current) {
    case 'tour':
      $loai = ['tour' => 'Tour'];
      $type_site = 'Tour';
      break;
    case 'shore':
      $loai = ['shore' => 'Shore'];
       $type_site = 'Shore';
      break;  
    default:
      $loai = ['activity' => 'Activity'];
      $type_site = 'Activities';
      
      break;
  }
?>

<section class="content-header">
  <h1>
    Edit <?= $type_site?> 
    <small><?= __('Edit') ?></small>
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
           echo $this->Form->input('hot', ['type' => 'checkbox']);
             echo $this->Form->input('category', array('label'=>'Category', 'type'=>'select', 'options'=>$category_view));
echo $this->Form->input('destinations', array('label'=>'Destinations', 'type'=>'select', 'options'=>$agentstype_Destinations));
               echo $this->Form->input('types', array('label'=>'Types', 'type'=>'select', 'options'=>$agentstype_Types));
              //  $loai = ['tour' => 'Tour','activity' => 'Activity'];
        
            echo $this->Form->input('loai', array('label'=>'Type', 'type'=>'select', 'options'=>$loai));

            echo $this->Form->input('name', ['label' => 'Name Activities ']);
              echo $this->Html->image('/upload/activity/'.$newactivity->hinhanh, ['alt' => 'hinhanh','class'=>'image_hotel_admin']);
             echo $this->Form->input('hinhanh', ['type' => 'file','label' => 'Image']); 
            echo $this->Form->input('diachi', array('label'=>'Address', 'type'=>'select', 'options'=>$diachi_view));
            echo $this->Form->input('mota', ['label' => 'Description ','id'=>'textarea']);
             $duration = ['hours' => 'hours','days' => 'days','weeks' => 'weeks'];
            echo '<div>Duration</div>';
            echo '<div >';
            echo '<div style="float: left;">';
            echo $this->Form->input('songay', array('label' => false, 'type' => 'text'));
            echo '</div>';
            echo '<div style="float: left;">-</div>';
            echo '<div style="float: left;">';
            echo $this->Form->input('songaya', array('label' => false, 'type' => 'select', 'options'=>$duration));
            echo '</div>';
            echo '<div style="clear: both;"></div>';
            echo '</div>';
            echo '<div style="clear: both;"></div>';
            echo $this->Form->input('lichtrinh', ['label' => 'Expect','id'=>'textarea']);
            echo $this->Form->input('diemdon', ['label' => 'Departure Point']);
            echo $this->Form->input('thoigiandon', ['label' => 'Departure Time']);
            echo $this->Form->input('tansuat', ['label' => 'Operates']);
            echo $this->Form->input('giatien', ['label' => 'Price']);
            echo $this->Form->input('thongtinbosung', ['label' => 'Additional Info','id'=>'textarea']);
            echo $this->Form->input('sokhach', ['label' => 'Adult']);
             echo $this->Form->input('treem', ['label' => 'Children']);
              echo $this->Form->input('incl', ['label' => 'Inclusions','id'=>'textarea']);
             echo $this->Form->input('excl', ['label' => 'Exclusions','id'=>'textarea']);
             echo $this->Form->input('term', ['label' => 'Terms of Condition','id'=>'textarea']);
              $star = ['1' => '1 Star','2' => '2 Star','3' => '3 Star','4' => '4 Star','5' => '5 Star'];
        
          echo $this->Form->input('danhgia', array('label'=>'Vote', 'type'=>'select', 'options'=>$star));
           echo $this->Form->input('discount', ['label' => 'Discount']);
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
<script src="https://cdn.ckeditor.com/4.8.0/standard-all/ckeditor.js"></script>
<?php
$this->Html->css([
    //'AdminLTE./plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min',
  ],
  ['block' => 'css']);

$this->Html->script([
  //'https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js12',
 // 'AdminLTE./plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min123',
 //'editor/ckeditor'
],
['block' => 'script']);
?>
<?php $this->start('scriptBotton'); ?>

<style type="text/css">

    
</style>
<script type="text/javascript">
  $(document).ready(function() {
    $('#diachi').select2();
     $('#category').select2();
});
 
</script>
<script>
$( ".textarea" ).each(function( index ) {
   CKEDITOR.replace( $(this).find('textarea').get(0), {
    height: 300,
    bodyClass: 'article-editor',
    format_tags: 'p;h1;h2;h3;pre',
    allowedContent:true,
   } );
});
</script>
<?php $this->end(); ?>