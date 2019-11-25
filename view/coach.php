<?php ob_start(); ?>

<div class="container">
    <div class="row">
        <?php foreach ($coachs as $index => $pres) { ?>
            
            <div class="col-md-4 mt-3 ">
                <div class="card bg-light">
                    <img class="card-img-top" src="<?php echo $team['logo']; ?>" alt="logo de l'equipe">
                  <div class="card-body">
                    <h5 class="card-title text-center"><?php echo $pres['name']; ?></h5>
                  </div>
              </div>
            </div>
        <?php } ?>
    </div>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
