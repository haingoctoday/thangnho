

<section class="content-header">
  <h1>
    <?= __('Add Review of Users') ?>
  </h1>
  <ol class="breadcrumb">
    <li>
      <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Back'), ['action' => 'index'], ['escape' => false]) ?>
    </li>
  </ol>
</section>
<?php //print_r($hoteltienich['namehotel'])?>
<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          
          <h3 class="box-title"><?= $newactivity['name'] ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($Userreview, array('role' => 'form')) ?>

        <div class="box-body col-md-4">
              <!-- Date range -->
             <!--  <div class="form-group">
                <label>Date range:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right " id="reservation" name="date_insert">
                </div>
              
              </div> -->
              <!-- /.form group -->
              <input type="hidden" name="id_activity_c" id="id_room" value="">
              <input type="hidden" name="delete_room" id="delete_room" value="">
             
              <input type="hidden" name="id_activity" id="id_room_c" value="<?= $newactivity['id'] ?>">
              
             <?php 
              echo $this->Form->input('name', ['label' => 'Name']);
               echo $this->Form->input('review', ['label' => 'Review']);
               $star = ['1' => '1 Star','2' => '2 Star','3' => '3 Star','4' => '4 Star','5' => '5 Star'];
          echo $this->Form->input('rating', array('label'=>'Vote', 'type'=>'select', 'options'=>$star));
           ?>
             
             


               <div class="form-group">
               <?= $this->Form->button(__('Save')) ?>
              </div>


            </div>
 <div class="box-body col-md-8 backgroud-black">

    <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name User</th>
                  <!-- <th>DateTo-End</th> -->
                   <!-- <th>Num day</th> -->
                  <th>Review</th>
                  <th>Vote</th>
                <th> </th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($list_room_of_hotel as $key => $value_list_room_of_hotel) {
                    # code...
              //    debug($value_list_room_of_hotel);
                  ?>
                <tr>
                  <td>   <?= $value_list_room_of_hotel['name']?></td>
                
                <td>
                 
                 
                    <?= $value_list_room_of_hotel['review']?> 
                 
                </td>
                  <td> <?= $value_list_room_of_hotel['rating']?> <i class="fa fa-star"></i></td>
                   <td>
<?php //$value_list_room_of_hotel['id']?>
  <a href="#" onclick="haha('<?= $value_list_room_of_hotel['id']?>','<?= $value_list_room_of_hotel['name']?>','<?= $value_list_room_of_hotel['review']?>','<?= $value_list_room_of_hotel['rating']?>')" class="btn btn-info btn-xs"> Edit</a>
  <a href="#" onclick="haha_delete('<?= $value_list_room_of_hotel['id']?>','<?= $value_list_room_of_hotel['name']?>','<?= $value_list_room_of_hotel['review']?>','<?= $value_list_room_of_hotel['rating']?>')" class="btn btn-danger btn-xs"> Delete</a>
                   </td>
                </tr>
                <?php }?>
                </tbody>
             
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
 </div>

     
        <!-- /.box-body -->
        <div class="box-footer">
       
        </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>

<?php
$this->Html->css([
    'AdminLTE./plugins/daterangepicker/daterangepicker-bs3',
       'AdminLTE./plugins/datatables/dataTables.bootstrap',
    'AdminLTE./plugins/timepicker/bootstrap-timepicker.min',
  
  ],
  ['block' => 'css']);

$this->Html->script([
 
  'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js',
  'AdminLTE./plugins/daterangepicker/daterangepicker',
  'AdminLTE./plugins/colorpicker/bootstrap-colorpicker.min',
  'AdminLTE./plugins/timepicker/bootstrap-timepicker.min',
  'AdminLTE./plugins/datatables/jquery.dataTables.min',
  'AdminLTE./plugins/datatables/dataTables.bootstrap.min',
 
],
['block' => 'script']);
?>


<?php $this->start('scriptBotton'); ?>
<script>
function haha(id,name,review,vote){
$("#reservation").find('option').removeAttr("selected");
$("#id_room").val(id);
$("#name").val(name);
$("#review").val(review);
$("#rating option:contains(" + vote + ")").attr('selected', 'selected');
$(".btn-success").text("Edit");
}
function haha_delete(id,name,review,vote){
$("#reservation").find('option').removeAttr("selected");
 // alert(id);
 $("#id_room").val(id);
$("#delete_room").val('1');
$("#name").val(name);
$("#review").val(review);
$("#rating option:contains(" + vote + ")").attr('selected', 'selected');
$(".btn-success").text("Delete");
}
  $(function () {
  
    $('#reservation1').daterangepicker();
     $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<?php $this->end(); ?>
