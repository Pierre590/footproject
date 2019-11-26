<?php ob_start(); ?>



<div class="container">
    <div class="row">
        <?php foreach ($teams as $index => $team) { ?>
            <div class="col-md-4 mt-3 ">
                <div class="card bg-light">
                    <img class="card-img-top3" src="<?php echo $team['logo']; ?>" alt="logo de l'equipe">
                  <div class="card-body">
                    <h5 class="card-title text-center"><?php echo $team['short_name']; ?></h5>
                    <p class="card-text"><?php echo $team['adress']; ?></p>
                    <p class="card-text">Président : <?php echo $team['president']; ?></p>
                    <p class="card-text">Date de création : <?php echo $team['fundation_date']; ?></p>
                    <div class="text-center mb-2">
                        <a href="//<?php echo $team['website']; ?>"target="_blank">site web</a></br>
                    </div>
                    <div class="text-center mb-2">
                        <a href="?path=team&id=<?php echo $team ['id'] ; ?>"target="_blank">Liste des joueurs</a></br>
                    </div>
                    <a href="<?php echo $team['link']; ?>" class="btn btn-info ">L'équipe.fr</a>
                  </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
