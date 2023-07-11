
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-dashcube"></i> <span>Gentelella Alela!</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="<?= base_url('assets/images/img.jpg') ?>" alt="" class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>John Doe</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>Administration</h3>
                        <ul class="nav side-menu">
                            <li>
                                <a href="<?= site_url('back/dashboard') ?>"><i class="fas fa-chart-bar"></i> Statistiques</a>
                            </li>
                            <li>
                                <a><i class="fas fa-money-bill-wave"></i> Code <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?= site_url('back/code/validation')?>">Validation</a></li>
                                    <li><a href="<?= site_url('back/code/insertion')?>">Insertion</a></li>
                                    <li><a href="<?= site_url('back/code/liste')?>">Liste</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fas fa-futbol"></i> Sport <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="">Liste</a></li>
                                    <li><a href="">Insertion</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fas fa-utensils"></i> Plat <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="">Liste des plats</a></li>
                                    <li><a href="">Ajouter un plat</a></li>
                                    <li><a href="<?= site_url('back/plat/compositions') ?>">Liste des compositions</a></li>
                                    <li><a href="<?= site_url('back/plat/ajout_composition') ?>">Ajouter un composition</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fas fa-map"></i></i> Regime <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="">Liste</a></li>
                                    <li><a href="">Insertion</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fas fa-cogs"></i></i> Parametres regime <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="">Insertion</a></li>
                                    <li><a href="">Recherche</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= site_url('back/auth/deconnexion') ?>">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>