<style type="text/css">
  .inner h4{
        margin: 0;
    font-size: 25px;
    font-weight: bold;
  }
</style>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h4><?= $array_count['count_hotel']?> Hotel</h4> 
               <h4><?= $array_count['count_activity']?> Activities &  <?= $array_count['count_tour']?> Tour</h4>
               <h4><?= $array_count['count_shore']?> Shore excursions</h4>

            
            </div>
            <div class="icon">
              <i class="ion ion-map"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <!-- <h3>53<sup style="font-size: 20px">%</sup></h3> -->
                <h4 style="margin: 10px"><?= $array_count['count_transfer']?> Transfer</h4> 
               <h4 style="margin: 10px"><?= $array_count['count_cruise']?> Cruise</h4>
            
            </div>
            <div class="icon">
              <i class="ion ion-android-boat"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <!-- <h3><?= $array_count['count_users']?></h3> -->

              <!-- <p>User Registrations</p> -->
               <h4 style="margin: 10px"><?= $array_count['count_users']?> User Registrations</p</h4> 
             
               <h4 style="margin: 10px"><?= $array_count['count_custome']?> Agent Loading</h4>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Booking</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 ">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Quickly Add</h3>
            </div>
            <div class="box-body">
             
              <a class="btn btn-app" href="<?php echo $this->Url->build('/admin-hotel'); ?>">
                <i class="fa fa-building"></i> Hotel
              </a>
              <a class="btn btn-app" href="<?php echo $this->Url->build('/admin-activity'); ?>">
                <i class="fa fa-tree"></i> Activities
              </a>
              <a class="btn btn-app" href="<?php echo $this->Url->build('/admin-tour'); ?>">
                <i class="fa fa-map"></i> Tour
              </a>
              <a class="btn btn-app" href="<?php echo $this->Url->build('/admin-shore'); ?>">
                <i class="fa fa-plane"></i> Shore
              </a>
              <a class="btn btn-app" href="<?php echo $this->Url->build('/admin-transfers'); ?>">
                <i class="fa fa-motorcycle"></i> Tranfer
              </a>
               <a class="btn btn-app" href="<?php echo $this->Url->build('/admin-cruise'); ?>">
                <i class="fa fa-ship"></i> Cruise
              </a>
              <a class="btn btn-app" href="<?php echo $this->Url->build('/admin-slide'); ?>">
                
                <i class="fa fa-image"></i> Slide Home
              </a>
            
              <a class="btn btn-app" href="<?php echo $this->Url->build('/admin-custome'); ?>">
                <span class="badge bg-purple"><?= $array_count['count_users']?></span>
                <i class="fa fa-users"></i> Users
              </a>
              <a class="btn btn-app">
                <span class="badge bg-teal">67</span>
                <i class="fa fa-inbox"></i> Orders
              </a>
              <a class="btn btn-app">
                <span class="badge bg-aqua"><?= $array_count['count_contact']?></span>
                <i class="fa fa-envelope"></i> Inbox
              </a>
              <a class="btn btn-app" href="<?php echo $this->Url->build('/admin-user-review'); ?>">
                <span class="badge bg-red"><?= $array_count['count_userreview']?></span>
                <i class="fa fa-heart-o"></i> Likes
              </a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.nav-tabs-custom -->

         

        

           <!-- TABLE: LATEST ORDERS -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Latest Orders</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
            <table class="table no-margin">
              <thead>
              <tr>
                <th>Order ID</th>
                <th>Item</th>
                <th>Status</th>
                <th>Price</th>
              </tr>
              </thead>
              <tbody>
                <?php 
                  for ($b=0; $b < 10; $b++) { 
               
                ?>
              <tr>
                <td><a href="#">OR984<?= $b?></a></td>
                <td>Hotel and Tour</td>
                <td><span class="label label-warning">Pending</span></td>
                <td>
                  <div class="sparkbar" data-color="#00a65a" data-height="20">50 $</div>
                </td>
              </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
          <!-- /.table-responsive -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
          <a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
          <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
        </div>
        <!-- /.box-footer -->
      </div>
      <!-- /.box -->
 <!-- PRODUCT LIST -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Contact me !!</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <ul class="products-list product-list-in-box">
         <?php foreach ($data_contact as $key => $value_data_contact) { ?>
            <li class="item">
              <div class="product-img">
              <?php echo $this->Html->image('default-50x50.gif', array('alt' => 'Product Image')); ?>
              </div>
              <div class="product-info">
                <a href="#" class="product-title"><?= $value_data_contact['username']?>
                  <span class="label label-warning pull-right"></span></a>
                    <span class="product-description">
                      <?= h($value_data_contact['detail'])?>
                    </span>
              </div>
            </li>
           <?php } ?>
          </ul>
        </div>
        <!-- /.box-body -->
        <div class="box-footer text-center">
          <a href="<?php echo $this->Url->build('/admin-contact'); ?>" class="uppercase">View All Contact </a>
        </div>
        <!-- /.box-footer -->
      </div>
      <!-- /.box -->
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

          <!-- Map box -->
          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range">
                  <i class="fa fa-calendar"></i></button>
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->

              <i class="fa fa-map-marker"></i>

              <h3 class="box-title">
                Visitors
              </h3>
            </div>
            <div class="box-body">
              <div id="world-map" style="height: 250px; width: 100%;"></div>
            </div>
            <!-- /.box-body-->
            <div class="box-footer no-border">
              <div class="row">
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <div id="sparkline-1"></div>
                  <div class="knob-label">Visitors</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <div id="sparkline-2"></div>
                  <div class="knob-label">Online</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center">
                  <div id="sparkline-3"></div>
                  <div class="knob-label">Exists</div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->

         <!-- TABLE: LATEST ORDERS -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Latest Customer</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
            <table class="table no-margin">
              <thead>
              <tr>
                <th>Email</th>
                <th>Full Name</th>
                <th>Phone</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
                <?php
                //$data_custome
                foreach ($data_custome as $key => $value_data_custome) {
              //debug($value_data_custome);
                ?>
              <tr>
                <td><?= $value_data_custome['email']?></td>
                <td><?= $value_data_custome['fullname']?></td>
               <td><?= $value_data_custome['phone']?></td>
               <td>
               <?= $this->Html->link('Active',['controller' => 'Users', 'action' => 'add', $value_data_custome['email']],['class' => 'label label-warning pull-right']); ?>
               </td>
              </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
          <!-- /.table-responsive -->
        </div>
        <!-- /.box-body -->
       
        <!-- /.box-footer -->
      </div>
      <!-- /.box -->
          <!-- PRODUCT LIST -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Reviews list »</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <ul class="products-list product-list-in-box">
             <?php foreach ($data_userreview as $key => $value_data_userreview) { ?>
            <li class="item">
              <div class="product-img">
              <?php echo $this->Html->image('default-50x50.gif', array('alt' => 'Product Image')); ?>
              </div>
              <div class="product-info">
                <a href="javascript::;" class="product-title"><?= $value_data_userreview['id_activity']?>
                  <span class="label label-warning pull-right"><?= $value_data_userreview['rating']?> <i class="fa fa-star"></i></span></a>
                    <span class="product-description">
                      <?= $value_data_userreview['review']?>
                    </span>
              </div>
            </li>
            <?php }?>
          </ul>
        </div>
        <!-- /.box-body -->
        <div class="box-footer text-center">
           <a href="<?php echo $this->Url->build('/admin-user-review'); ?>" class="uppercase">View All Review </a>
        </div>
        <!-- /.box-footer -->
      </div>
      <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
<?php
$this->Html->css([
    'AdminLTE./plugins/iCheck/flat/blue',
    'AdminLTE./plugins/morris/morris',
    'AdminLTE./plugins/jvectormap/jquery-jvectormap-1.2.2',
    'AdminLTE./plugins/datepicker/datepicker3',
    'AdminLTE./plugins/daterangepicker/daterangepicker-bs3',
    'AdminLTE./plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min'
  ],
  ['block' => 'css']);

$this->Html->script([
  'https://code.jquery.com/ui/1.11.4/jquery-ui.min.js',
  'https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',
  'AdminLTE./plugins/morris/morris.min',
  'AdminLTE./plugins/sparkline/jquery.sparkline.min',
  'AdminLTE./plugins/jvectormap/jquery-jvectormap-1.2.2.min',
  'AdminLTE./plugins/jvectormap/jquery-jvectormap-world-mill-en',
  'AdminLTE./plugins/knob/jquery.knob',
  'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js',
  'AdminLTE./plugins/datepicker/bootstrap-datepicker',
  'AdminLTE./plugins/daterangepicker/daterangepicker',
  'AdminLTE./plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min',
],
['block' => 'script']);
?>

<?php $this->start('scriptBotton'); ?>
    <script type="text/javascript">
      //jvectormap data
      var visitorsData = {
        "US": 398, //USA
        "SA": 400, //Saudi Arabia
        "CA": 1000, //Canada
        "DE": 500, //Germany
        "FR": 760, //France
        "CN": 300, //China
        "AU": 700, //Australia
        "BR": 600, //Brazil
        "IN": 800, //India
        "GB": 320, //Great Britain
        "RU": 3000 //Russia
      };
      //World map by jvectormap
      $('#world-map').vectorMap({
        map: 'world_mill_en',
        backgroundColor: "transparent",
        regionStyle: {
          initial: {
            fill: '#e4e4e4',
            "fill-opacity": 1,
            stroke: 'none',
            "stroke-width": 0,
            "stroke-opacity": 1
          }
        },
        series: {
          regions: [{
            values: visitorsData,
            scale: ["#92c1dc", "#ebf4f9"],
            normalizeFunction: 'polynomial'
          }]
        },
        onRegionLabelShow: function (e, el, code) {
          if (typeof visitorsData[code] != "undefined")
            el.html(el.html() + ': ' + visitorsData[code] + ' new visitors');
        }
      });

      /* jQueryKnob */
      //$(".knob").knob();

      /* The todo list plugin */
      // $(".todo-list").todolist({
      //   onCheck: function (ele) {
      //     window.console.log("The element has been checked");
      //     return ele;
      //   },
      //   onUncheck: function (ele) {
      //     window.console.log("The element has been unchecked");
      //     return ele;
      //   }
      // });

      //bootstrap WYSIHTML5 - text editor
      $(".textarea").wysihtml5();

      $('.daterange').daterangepicker({
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate: moment()
      }, function (start, end) {
        window.alert("You chose: " + start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      });

      //The Calender
      //$("#calendar").datepicker();

      //SLIMSCROLL FOR CHAT WIDGET
      // $('#chat-box').slimScroll({
      //   height: '250px'
      // });

    </script>
<?php  $this->end(); ?>
