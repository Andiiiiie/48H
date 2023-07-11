
<?php if(isset($regimes)) { ?>
  <div class="row">
    <h3>Vous êtes inscrit au régime</h3>
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card tale-bg">
        <div class="card-people mt-auto">
          <a href="<?php echo base_url('index.php/front/regime/details_regime/'.$regimes['id_regime']) ?>">
            <img src="<?php echo base_url('assets/images/dashboard/people.png') ?>" alt="people">
          </a>
          <div class="weather-info">
            <div class="d-flex">
              <div>
                <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
              </div>
              <div class="ml-2">
                <h4 class="location font-weight-normal"><?php echo $regimes['designation'] ?></h4>
                <h6 class="font-weight-normal">India</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <!-- Content for the second row goes here -->
  
    </div>
    <?php } ?>
