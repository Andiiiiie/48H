<!-- partial -->
<div class="container-fluid page-body-wrapper">

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/front/dashboard') ?>">
                <i class="menu-icon fas fa-home-alt"></i>
                <span class="menu-title">Acceuil</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/front/regime/inserer_details') ?>">
                <i class="menu-icon fas fa-info-circle"></i>
                <span class="menu-title">Compléter mon profil</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/front/regime/mon_regime') ?>">
                <i class="menu-icon fas fa-utensils"></i>
                <span class="menu-title">Mon régime</span>
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/front/regime/proposition_regime') ?>">
                <i class="menu-icon fas fa-star"></i>
                <span class="menu-title">Proposition de régime</span>
            </a>
        </li>
        
        <!-- Example nav with dropdown (aza fafana) -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-wallet"></i>
                <span class="menu-title">Porte monnaie</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?= site_url('front/porte_monnaie/mon_compte') ?>">Mon compte</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= site_url('front/porte_monnaie/ajouter') ?>">Créditer</a></li>
                </ul>
            </div>
        </li>


    </ul>
</nav>

<!-- partial -->
<div class="main-panel">
