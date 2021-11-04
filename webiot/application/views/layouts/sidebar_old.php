<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?php echo base_url(); ?>" class="brand-link">
    <img src="<?php echo base_url(); ?>dist/img/<?php echo $this->session->userdata('user_proyecto')?>.png"
         alt="Logo"
         class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light"><?php echo $this->session->userdata('user_proyecto')?></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
   <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
       <li class="nav-item">
          <a href="<?php echo base_url(); ?>" class="nav-link">
            <i class="fas fa-tachometer-alt"></i>
            <p>Status</p>
          </a>
        </li>

        <li class="nav-item">
           <a href="<?php echo base_url(); ?>maintenance" class="nav-link">
             <i class="fas fa-wrench"></i>
             <p>Maintenance</p>
           </a>
         </li>

         <li class="nav-item">
            <a href="<?php echo base_url(); ?>outage" class="nav-link">
              <i class="fas fa-bolt"></i>
              <p>Outage</p>
            </a>
          </li>

          <li class="nav-item">
             <a href="<?php echo base_url(); ?>logs" class="nav-link">
               <i class="fas fa-book"></i>
               <p>Logs</p>
             </a>
           </li>
           <li class="nav-item">
              <a href="<?php echo base_url(); ?>monitor" class="nav-link">
                <i class="fas fa-desktop"></i>
                <p>Monitor</p>
              </a>
            </li>
        <?php if (($this->session->userdata('user_tipo') == "admin") || ($this->session->userdata('user_tipo') == "owner")):?>
        <?php echo "<li class='nav-item'>"?>
        <?php echo "  <a href='"?><?php echo base_url(); ?><?php echo "dispositivos' class='nav-link'>"?>
        <?php echo "    <i class='fa fa-microchip'></i>"?>
        <?php echo "    <p>"?>
        <?php echo "      Dispositivos"?>
        <?php echo "    </p>"?>
        <?php echo "  </a>"?>
        <?php echo "</li>"?>
        <?php echo "<li class='nav-item'>"?>
        <?php echo "  <a href='"?><?php echo base_url(); ?><?php echo "usuarios' class='nav-link'>"?>
        <?php echo "    <i class='fa fa-user'></i>"?>
        <?php echo "    <p>"?>
        <?php echo "      Usuarios"?>
        <?php echo "    </p>"?>
        <?php echo "  </a>"?>
        <?php echo "</li>"?>
        <?php endif; ?>

        <?php if ($this->session->userdata('user_tipo') == "owner"):?>
        <?php echo "<li class='nav-item'>"?>
        <?php echo "  <a href='"?><?php echo base_url(); ?><?php echo "data' class='nav-link'>"?>
        <?php echo "    <i class='fa fa-chart-bar'></i>"?>
        <?php echo "    <p>"?>
        <?php echo "      Data"?>
        <?php echo "    </p>"?>
        <?php echo "  </a>"?>
        <?php echo "</li>"?>
        <?php endif; ?>

        <li  class="nav-item">
          <a href="<?php echo base_url();?>auth/logout" class="nav-link">
            <i class="fa fa-power-off"></i>
              <p>Salir</p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
