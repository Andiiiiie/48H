<div class="row">
    <div class="col-md-7 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Codes</h4>
            <p class="card-description">
            Wrap content inside<code>&lt;blockquote class="blockquote"&gt;</code>
            </p>
            <?php foreach($codes as $code) { ?>
                <blockquote class="blockquote">
                    <p class="mb-0"><?php echo $code['code'] ?> - <?php echo $code['montant'] ?> $</p>
                </blockquote>
            <?php } ?>
        </div>
    </div>
    </div>

    <div class="col-5 grid-margin stretch-card" style="margin-top: 5%;">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Essayer le code</h4>
                <p class="card-description">
                    Basic form elements
                </p>
                <form class="forms-sample">
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
