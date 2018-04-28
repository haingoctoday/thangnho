

<section class="content-header">
  <h1>
    Add Room of Hotel
    <small><?= __('Add Services') ?></small>
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
          <h3 class="box-title"><?= $hotelroom['namehotel'] ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($hotelroom, array('role' => 'form')) ?>

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

             <div class="form-group">
                <label>List room:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-clone"></i>
                  </div>
                  <?php
              //    $sizes = ['s' => 'Small', 'm' => 'Medium', 'l' => 'Large'];
echo $this->Form->select('listroomid', $listroom, ['default' => 'm']);
                  ?>
                  <!-- <input type="text" class="form-control pull-right " id="reservation"> -->
                </div>
                <!-- /.input group -->
              </div>
               <div class="form-group">
                <label>Number per:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-male"></i>
                  </div>
                  <input type="number" class="form-control" id="numberper" name="numberper">
                </div>
                <!-- /.input group -->
              </div>

                <div class="form-group">
                <label>Price:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-dollar"></i>
                  </div>
                  <input type="text" class="form-control pull-right " id="priceroom" name="priceroom">
                </div>
                <!-- /.input group -->
              </div>

              <div class="form-group">
                <label>Up to hot:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-bullseye"></i>
                  </div>
                  <input type="number" class="form-control pull-right "  id="uptohot" name="uptohot">
                </div>
                <!-- /.input group -->
              </div>

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
                  <th>Room Type</th>
                  <!-- <th>DateTo-End</th> -->
                   <!-- <th>Num day</th> -->
                  <th>Price</th>
                  <th>Num Per</th>
                
                </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($list_room_of_hotel as $key => $value_list_room_of_hotel) {
                    # code...
                  
                  ?>
                <tr>
                  <td><?= $value_list_room_of_hotel['nameroom']?></td>
                   <!-- <td><?= $value_list_room_of_hotel['dayrange']?></td> -->
                 <!-- <td><?= $value_list_room_of_hotel['count']?></td> -->
                 <td><?= $value_list_room_of_hotel['giatien']?></td>
                  <td><?= $value_list_room_of_hotel['songuoi']?></td>
                 
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
  $(function () {
  
    $('#reservation').daterangepicker();
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
