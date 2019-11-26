<?php ob_start(); ?>





<div class="container">
    <div class="row">
        <?php foreach ($coachs as $index => $trainee) { ?>
            <div class="col-md-4 mt-3 ">
                <div class="card bg-dark text-white">
                    <div class="logo">
                        <img class="card-img-top" src="<?php echo $trainee['logo']; ?>" alt="logo de l'equipe">
                    </div>
                    <div class="tronche">
                        <img class="card-img-top2" src="<?php echo $trainee['photo']; ?>" alt="logo de l'equipe">
                    </div>
                  <div class="card-body">
                    <h5 class="card-title text-center"><?php echo $trainee['name']; ?></h5>
                  </div>
              </div>
            </div>
        <?php } ?>
    </div>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
