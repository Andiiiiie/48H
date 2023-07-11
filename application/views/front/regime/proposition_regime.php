
        <?php if (isset($regimes)) { 
          ?>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                      <a href="<?php echo base_url('index.php/front/regime/details_regime2/'.$regimes['id_regime']) ?>">
                          <img src="<?php echo base_url('assets/images/'.$regimes['image_path'].'.jpg') ?>" alt="people">
                      </a>
                    
                  <div class="weather-info">
                    <div class="d-flex">
                      <div>
                        <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                      </div>
                      <div class="ml-2">
                        <h4 class="location font-weight-normal"><?php echo $regimes['regime_designation'] ?></h4>
                        <h6 class="font-weight-normal">India</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Vitesse de croissance</p>
                      <p class="fs-30 mb-2"></p>
                      <p><?php echo $regimes['vitesse'] ?></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Tarif</p>
                      <p class="fs-30 mb-2">A partir de <?php echo $regime_tarif['prix'] ?> AR</p>
                      <p>Acceder à ce regime sur une possibilité de remise de <?php echo $type_user['remise'] ?>% (<?php echo $regime_tarif['duree'] ?> days)</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Number of Meetings</p>
                      <p class="fs-30 mb-2">34040</p>
                      <p>2.00% (30 days)</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Number of Clients</p>
                      <p class="fs-30 mb-2">47033</p>
                      <p>0.22% (30 days)</p>
                    </div>
                  </div>
                </div>
              </div>
                <div class="row">
                    <div class="col-md-5">
                      <br>
                        <a href="<?php echo base_url('index.php/front/regime/s_inscrire/'.$regimes['id_regime']) ?>"><button class="btn btn-primary btn-lg btn-block">S'incrire</button></a>
                        
                        
                    </div>
                    <div class="col-md-7">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>