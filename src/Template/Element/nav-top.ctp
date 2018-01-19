<?php
//$file = $theme['folder'] . DS . 'src' . DS . 'Template' . DS . 'Element' . DS . 'nav-top.ctp';
//debug($file);
if (!file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
?>
<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>

    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
           
           
     
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#"  >
                    <?php //echo $this->Html->image('user2-160x160.jpg', array('class' => 'user-image', 'alt' => 'User Image')); ?>
                   
                </a>
               
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
                <a href="#" data-toggle="dropdown"><i class="fa fa-gears"></i></a>
                 <ul class="dropdown-menu dropdown-usermenu pull-right" id="dropdown-usermenu">
          <li>
            <?php
            echo $this->Html->link(
            'Profile',
            ['controller'=>'Users', 'action'=>'edit',$this->request->session()->read('user.id')],
            ['escape' => false]  // important 
            );
            ?>
          </li>
          <li>
            <?php
            echo $this->Html->link(
            'Thay đổi ảnh đại diện',
            ['controller'=>'Users', 'action'=>'edit_image'],
            ['escape' => false]  // important 
            );
            ?>
          </li>
          <li>
            <?php
            echo $this->Html->link(
            'Đổi mật khẩu',
            ['controller'=>'Users', 'action'=>'changpass',$this->request->session()->read('user.id')],
            ['escape' => false]  // important 
            );
            ?>
          </li>
          <li>
            <?php
            echo $this->Html->link(
            '<i class="fa fa-sign-out pull-right"></i> Log Out',
            ['controller'=>'Users', 'action'=>'logout','_full'=>true],
            ['escape' => false]  // important 
            );
            ?>
          </li>
        </ul>
            </li>
        </ul>
    </div>
</nav>
<?php } ?>