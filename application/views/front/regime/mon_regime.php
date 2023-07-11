
<?php if(isset($regimes)) { ?>
  <div class="row hover-effect">
    <h3>Vous êtes inscrit au régime   <a href="<?php echo base_url('index.php/front/regime/generate_pdf_regime') ?>"><button class="btn btn-primary" >Generer</button></a></h3>
    <div class="col-md-12 grid-margin stretch-card ownstyle">
      <div class="card tale-bg">
        <div class="card-people mt-auto">
          <a href="<?php echo base_url('index.php/front/regime/details_regime/'.$regimes['id_regime']) ?>">
            <img src="<?php echo base_url('assets/images/'.$regimes['image_path'].'.jpg') ?>" alt="people">
          </a>
          <div class="weather-info">
            <div class="d-flex">
              <div>
                <h1 class="location font-weight-normal"><?php echo $regimes['designation'] ?></h1>
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
  <style>
    .hover-effect:hover {
      background-color: #ff5a5f;
      color: #ffffff;
      cursor: pointer;
      /* Add any additional styles you want for the hover effect */
    }
  </style>
