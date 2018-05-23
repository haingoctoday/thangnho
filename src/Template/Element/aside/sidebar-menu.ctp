<?php
$file = $theme['folder'] . DS . 'src' . DS . 'Template' . DS . 'Element' . DS . 'aside' . DS . 'sidebar-menu.ctp';

if (!file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
?>
<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/admin-home'); ?>"><i class="fa fa-circle-o"></i> Dashboard</a></li>
            <!-- <li><a href="<?php echo $this->Url->build('/pages/home2'); ?>"><i class="fa fa-circle-o"></i> Dashboard v2</a></li> -->
        </ul>
    </li>
     <li class="treeview">
        <a href="#">
            <i class="fa fa-building"></i> <span>Hotel</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
           <li><a href="<?php echo $this->Url->build('/admin-hotel'); ?>"><i class="fa fa-building"></i>Hotel List</a></li>
            <li><a href="<?php echo $this->Url->build('/admin-room'); ?>"><i class="fa fa-bed"></i>Room type</a></li>
            <!-- <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-bed"></i> Gán phòng cho từng khách sạn</a></li> -->
            <li><a href="<?php echo $this->Url->build('/admin-services'); ?>"><i class="fa fa-cutlery"></i>Services of Hotel</a></li>
            <li><a href="<?php echo $this->Url->build('/admin-policy'); ?>"><i class="fa fa-life-ring"></i>Hotel policy</a></li>
            <li><a href="<?php echo $this->Url->build('/admin-hotel-category'); ?>"><i class="fa fa-bars"></i>Category hotel</a></li>
          
             <!-- <li><a href="<?php echo $this->Url->build('/pages/charts/inline'); ?>"><i class="fa fa-circle-o"></i>Loại hình khách sạn</a></li> -->
        </ul>
    </li>

    <!--   <li class="treeview">
        <a href="#">
            <i class="fa fa-map"></i> <span>Tour</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
           <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-map"></i> Danh sách Tour</a></li>
            <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-map-signs"></i> Chính sách tour</a></li>
            <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-level-down"></i> Địa điểm</a></li>
            <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-meh-o"></i>Loại hình Tour</a></li> -->
             <!-- <li><a href="<?php echo $this->Url->build('/pages/charts/inline'); ?>"><i class="fa fa-circle-o"></i>Loại hình khách sạn</a></li> -->
        <!-- </ul>
    </li> -->

    <li class="treeview">
        <a href="#">
            <i class="fa fa-tree"></i> <span>Activity - Tour</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
           <li><a href="<?php echo $this->Url->build('/admin-activity?p=activity'); ?>"><i class="fa fa-map"></i> Activity List</a></li>
             <li><a href="<?php echo $this->Url->build('/admin-tour?p=tour'); ?>"><i class="fa fa-map"></i> Tour List</a></li>
            <li><a href="<?php echo $this->Url->build('/admin-category-activity'); ?>"><i class="fa fa-meh-o"></i>Category Activity</a></li>
            <!-- <li><a href="<?php echo $this->Url->build('/admin-policy-activity'); ?>"><i class="fa fa-map-signs"></i> Policy Activity</a></li> -->
            <!-- <li><a href="<?php echo $this->Url->build('/admin-address-activity'); ?>"><i class="fa fa-level-down"></i> Localtion</a></li> -->
            <li><a href="<?php echo $this->Url->build('/admin-services-activity'); ?>"><i class="fa fa-meh-o"></i>Services of Activity</a></li>
             <!-- <li><a href="<?php echo $this->Url->build('/pages/charts/inline'); ?>"><i class="fa fa-circle-o"></i>Loại hình khách sạn</a></li> -->
        </ul>
    </li>
  <li class="treeview">
        <a href="#">
            <i class="fa fa-tree"></i> <span>SHORE EXCURSIONS</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
           <li><a href="<?php echo $this->Url->build('/admin-shore?p=shore'); ?>"><i class="fa fa-map"></i> SHORE EXCURSIONS List</a></li>
           
        </ul>
    </li>
     <li class="treeview">
        <a href="#">
            <i class="fa fa-motorcycle"></i> <span>TRANSFERS </span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
           <li><a href="<?php echo $this->Url->build('/admin-transfers'); ?>"><i class="fa fa-map"></i>Transfers List</a></li>
            <li><a href="<?php echo $this->Url->build('/admin-category-transfers'); ?>"><i class="fa fa-map-signs"></i>Category Transfers </a></li>
            <!-- <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-meh-o"></i>Loại hình TRANSFERS</a></li> -->
             <!-- <li><a href="<?php echo $this->Url->build('/pages/charts/inline'); ?>"><i class="fa fa-circle-o"></i>Loại hình khách sạn</a></li> -->
        </ul>
    </li>

     <li class="treeview">
        <a href="#">
            <i class="fa fa-ship"></i> <span>CRUISES </span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
           <li><a href="<?php echo $this->Url->build('/admin-cruise'); ?>"><i class="fa fa-map"></i>Cruises list</a></li>
            <li><a href="<?php echo $this->Url->build('/admin-port-cruise'); ?>"><i class="fa fa-map-signs"></i> Cruise port</a></li>
            <li><a href="<?php echo $this->Url->build('/admin-category-cruise'); ?>"><i class="fa fa-level-down"></i> Cruise drive</a></li>
            <!-- <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-meh-o"></i>Loại hình Tour</a></li> -->
             <!-- <li><a href="<?php echo $this->Url->build('/pages/charts/inline'); ?>"><i class="fa fa-circle-o"></i>Loại hình khách sạn</a></li> -->
        </ul>
    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-users"></i> <span>Customer </span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
             <li><a href="<?php echo $this->Url->build('/admin-agency-signup'); ?>"><i class="fa fa-map-signs"></i>New Agent Registration</a></li>
           <li><a href="<?php echo $this->Url->build('/admin-custome'); ?>"><i class="fa fa-map"></i> Customer </a></li>
           
            <!-- <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-level-down"></i> Địa điểm</a></li> -->
            <!-- <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-meh-o"></i>Loại hình Tour</a></li> -->
             <!-- <li><a href="<?php echo $this->Url->build('/pages/charts/inline'); ?>"><i class="fa fa-circle-o"></i>Loại hình khách sạn</a></li> -->
        </ul>
    </li>
     <li class="treeview">
        <a href="#">
            <i class="fa fa-users"></i> <span>Web Manager </span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
               <li><a href="<?php echo $this->Url->build('/admin-hotel-address'); ?>"><i class="fa fa-automobile"></i>Location </a></li>
           <li><a href="<?php echo $this->Url->build('/admin-slide'); ?>"><i class="fa fa-map"></i> Slide Agent page </a></li>
           <li><a href="<?php echo $this->Url->build('/admin-seasons-of-year'); ?>"><i class="fa fa-map"></i> Setup Seasons of the year</a></li>
            <!-- <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-map-signs"></i> Chính sách tour</a></li> -->
            <!-- <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-level-down"></i> Địa điểm</a></li> -->
            <!-- <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-meh-o"></i>Loại hình Tour</a></li> -->
             <!-- <li><a href="<?php echo $this->Url->build('/pages/charts/inline'); ?>"><i class="fa fa-circle-o"></i>Loại hình khách sạn</a></li> -->
        </ul>
    </li>

    
     <li class="treeview">
        <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Report </span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <!-- <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-circle-o"></i> ChartJS</a></li> -->
            <!-- <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-circle-o"></i> Morris</a></li> -->
            <!-- <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-circle-o"></i> Flot</a></li> -->
            <!-- <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-circle-o"></i> Inline charts</a></li> -->
        </ul>
    </li>
    <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
   
</ul>
<?php } ?>
