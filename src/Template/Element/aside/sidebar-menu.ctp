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
            <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-circle-o"></i> Dashboard</a></li>
            <!-- <li><a href="<?php echo $this->Url->build('/pages/home2'); ?>"><i class="fa fa-circle-o"></i> Dashboard v2</a></li> -->
        </ul>
    </li>
     <li class="treeview">
        <a href="#">
            <i class="fa fa-building"></i> <span>Hotel</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
           <li><a href="<?php echo $this->Url->build('/admin-hotel'); ?>"><i class="fa fa-building"></i> Danh sách khách sạn</a></li>
            <li><a href="<?php echo $this->Url->build('/room'); ?>"><i class="fa fa-bed"></i> Danh sách phòng</a></li>
            <!-- <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-bed"></i> Gán phòng cho từng khách sạn</a></li> -->
            <li><a href="<?php echo $this->Url->build('/services'); ?>"><i class="fa fa-cutlery"></i>Tiện ích khách sạn</a></li>
            <li><a href="<?php echo $this->Url->build('/policy'); ?>"><i class="fa fa-life-ring"></i>Chính sách phòng</a></li>
            <li><a href="<?php echo $this->Url->build('/hotel-category'); ?>"><i class="fa fa-bars"></i>Loại hình khách sạn</a></li>
             <li><a href="<?php echo $this->Url->build('/hotel-address'); ?>"><i class="fa fa-automobile"></i>Địa chỉ </a></li>
             <!-- <li><a href="<?php echo $this->Url->build('/pages/charts/inline'); ?>"><i class="fa fa-circle-o"></i>Loại hình khách sạn</a></li> -->
        </ul>
    </li>

      <li class="treeview">
        <a href="#">
            <i class="fa fa-map"></i> <span>Tour</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
           <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-map"></i> Danh sách Tour</a></li>
            <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-map-signs"></i> Chính sách tour</a></li>
            <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-level-down"></i> Địa điểm</a></li>
            <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-meh-o"></i>Loại hình Tour</a></li>
             <!-- <li><a href="<?php echo $this->Url->build('/pages/charts/inline'); ?>"><i class="fa fa-circle-o"></i>Loại hình khách sạn</a></li> -->
        </ul>
    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-tree"></i> <span>Activity</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
           <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-map"></i> Danh sách Activity</a></li>
            <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-map-signs"></i> Chính sách Activity</a></li>
            <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-level-down"></i> Địa điểm</a></li>
            <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-meh-o"></i>Loại hình Activity</a></li>
             <!-- <li><a href="<?php echo $this->Url->build('/pages/charts/inline'); ?>"><i class="fa fa-circle-o"></i>Loại hình khách sạn</a></li> -->
        </ul>
    </li>

     <li class="treeview">
        <a href="#">
            <i class="fa fa-motorcycle"></i> <span>TRANSFERS </span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
           <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-map"></i> Danh sách TRANSFERS </a></li>
            <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-map-signs"></i> Chính sách TRANSFERS</a></li>
            <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-meh-o"></i>Loại hình TRANSFERS</a></li>
             <!-- <li><a href="<?php echo $this->Url->build('/pages/charts/inline'); ?>"><i class="fa fa-circle-o"></i>Loại hình khách sạn</a></li> -->
        </ul>
    </li>

     <li class="treeview">
        <a href="#">
            <i class="fa fa-ship"></i> <span>CRUISES </span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
           <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-map"></i> Danh sách CRUISES </a></li>
            <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-map-signs"></i> Chính sách tour</a></li>
            <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-level-down"></i> Địa điểm</a></li>
            <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-meh-o"></i>Loại hình Tour</a></li>
             <!-- <li><a href="<?php echo $this->Url->build('/pages/charts/inline'); ?>"><i class="fa fa-circle-o"></i>Loại hình khách sạn</a></li> -->
        </ul>
    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-users"></i> <span>Khách hàng </span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
           <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-map"></i> Danh sách CRUISES </a></li>
            <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-map-signs"></i> Chính sách tour</a></li>
            <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-level-down"></i> Địa điểm</a></li>
            <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-meh-o"></i>Loại hình Tour</a></li>
             <!-- <li><a href="<?php echo $this->Url->build('/pages/charts/inline'); ?>"><i class="fa fa-circle-o"></i>Loại hình khách sạn</a></li> -->
        </ul>
    </li>
     <li class="treeview">
        <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Thống kê</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-circle-o"></i> Inline charts</a></li>
        </ul>
    </li>
    <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
   
</ul>
<?php } ?>
