
<div class="container" style="margin-top:5%;">
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                
                <blockquote class="blockquote">
                    <h2 class="mb-0">Plat</h2>
                </blockquote>
            </div>
            <div class="card-body">
                <blockquote class="blockquote blockquote-primary">
                    <?php foreach($plats as $p) { ?>
                        <div class="d-flex">
                            <div>
                                <p class="text-info mb-1"><?php echo $p['composition'] ?></p>
                                <small>9:30 am</small>
                            </div>
                        </div>
                    <?php } ?>
                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
            </div>
            </div>
        </div>

        <div class="col-md-6 stretch-card grid-margin">
        <div class="card">
            <div class="card-body">
              
                <blockquote class="blockquote">
                    <h2 class="mb-0">Activité</h2>
                </blockquote>
            </div>
            <div class="card-body">
                <blockquote class="blockquote blockquote-primary">
                    <?php foreach($activites as $p) { ?>
                        <div class="d-flex">
                            <div>
                                <p class="text-info mb-1"><?php echo $p['composition'] ?></p>
                                <small>9:30 am</small>
                            </div>
                        </div>
                    <?php } ?>
                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
            </div>
            </div>
        </div>
    </div>
</div>