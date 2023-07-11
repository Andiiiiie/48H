<!-- partial -->
<div class="container-fluid page-body-wrapper">

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <!-- Example simple nav (aza fafana) -->
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/front/regime/inserer_details') ?>">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Compléter mon profil</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/front/regime/mon_regime') ?>">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Mon régime</span>
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/front/regime/proposition_regime') ?>">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Proposition de régime</span>
            </a>
        </li>
        
        <!-- Example nav with dropdown (aza fafana) -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">UI Elements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="">Buttons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="">Dropdowns</a></li>
                    <li class="nav-item"> <a class="nav-link" href="">Typography</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>

<!-- partial -->
<div class="main-panel">
