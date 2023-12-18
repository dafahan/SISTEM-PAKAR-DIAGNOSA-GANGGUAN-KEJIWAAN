<!-- BEGIN: Main Menu-->

  
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row" >
      <li class="nav-item mr-auto" ><a class="navbar-brand" href="#" >
           <h2 class="brand-text mb-0 ml-2">Klinik</h2>
        </a></li>
      <li class="nav-item nav-toggle" id="sidebarToggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
    </ul>
  </div>
  <div class="shadow-bottom"></div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class="<?php echo is_active('dashboard',$page);  ?> nav-item">
        <a href="<?= base_url('dashboard'); ?>"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
      </li>
      
      <?php if(in_groups('admin')):?>
      <li class="nav-item"><a href="javascript:;"><i class="feather icon-database"></i><span class="menu-title" data-i18n="Laporan">Setup Data Master</span></a>
        
        <ul class="menu-content">
              <li class="<?php echo is_active('gejala',$page); ?> nav-item"><a href="<?= base_url('gejala'); ?>"><i class="feather icon-airplay"></i><span class="menu-title" data-i18n="Gejala">Master Gejala</span></a>
            </li>
        </ul>

        <ul class="menu-content">
              <li class="<?php echo is_active('penyakit',$page); ?> nav-item"><a href="<?= base_url('penyakit'); ?>"><i class="feather icon-cloud-drizzle"></i><span class="menu-title" data-i18n="Gejala">Master Penyakit</span></a>
            </li>
        </ul>

        <ul class="menu-content">
              <li class="<?php echo is_active('rule',$page); ?> nav-item"><a href="<?= base_url('rule'); ?>"><i class="feather icon-alert-triangle"></i><span class="menu-title" data-i18n="Gejala">Master Rule</span></a>
            </li>
        </ul>

      </li>
      <?php endif; ?>


      <li class="nav-item"><a href="javascript:;"><i class="feather icon-folder"></i><span class="menu-title" data-i18n="Laporan">Diagnosis</span></a>
      
        <ul class="menu-content">
            <li class="<?php echo is_active('diagnosa',$page); ?> nav-item"><a href="<?= base_url('diagnosis'); ?>"><i class="feather icon-activity"></i><span class="menu-title" data-i18n="Diagnosa ">Form Diagnosis</span></a>
          </li>
        </ul>
      
        <ul class="menu-content">
              <li class="<?php echo is_active('result',$page); ?> nav-item"><a href="<?= base_url('diagnosis/result'); ?>"><i class="feather icon-archive"></i><span class="menu-title" data-i18n="Gejala">Result Diagnosis</span></a>
            </li>
        </ul>
        
      </li>
      <?php if(in_groups('admin')):?>
        <li class="<?php echo is_active('user',$page); ?> nav-item"><a href="<?= base_url('user'); ?>"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Laporan">User</span></a>
      </li>
        <?php endif;?>

      <?php if(in_groups('admin')):?>
        <li class="<?php echo is_active('manage',$page); ?> nav-item"><a href="<?= base_url('article/manage'); ?>"><i class="feather icon-settings"></i><span class="menu-title" data-i18n="Laporan">Manage Article</span></a>
      </li>
        <?php endif;?>


      <li class="<?php echo is_active('article',$page); ?> nav-item"><a href="<?= base_url('article'); ?>"><i class="feather icon-book-open"></i><span class="menu-title" data-i18n="User ">Article</span></a>
    </li>
    

    </ul>
  </div>
</div>

<!-- END: Main Menu-->