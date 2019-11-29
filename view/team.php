<?php ob_start(); ?>

<div class="container">
    <div class="card test1 bg-dark mt-3">
        <div class="row">
            <div class="col-md-6 text-center">
                <img class="card-img-top4" src="<?php echo $team['logo']; ?>" alt="logo de l'equipe">
            </div>
            <div class="col-md-6 mt-4 text-center text-white">
                <img class="card-img-top5" src="<?php echo $coach['photo']; ?>"alt="photo de l'entraineur">
                <div class="mt-2">
                <p><?php echo $coach['name']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <p>
      <a class="btn btn-dark mt-3" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Saison</a>
    </p>
    <div class="row">
      <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseExample1">
          <div class="card card-body">
              <div class="row">
                  <div class="container">
                      <table class="table table-dark text-center text-white mt-3">
                          <thead>
                            <tr>
                              <th scope="col">Journée</th>
                              <th scope="col">A domicile</th>
                              <th scope="col"></th>
                              <th scope="col"></th>
                              <th scope="col">Challenger</th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php foreach ($matchsPlayed as $index => $match) { ?>
                                  <tr>
                                    <th scope="row"><?php echo $match['day']; ?></th>
                                    <td><?php echo $match['team_home']; ?></td>
                                    <td><?php echo $match['score_home']; ?></td>
                                    <td><?php echo $match['score_away']; ?></td>
                                    <td><?php echo $match['team_away']; ?></td>
                                  </tr>
                              <?php } ?>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>

</div>
<div class="container">
    <div class="row">
        <?php
        function taille ($sizeEnCm) {
            $resultat = $sizeEnCm/100;
            return $resultat . ' m';
        }
        ?>
        <?php foreach ($players as $index => $player) { ?>
            <div class="col-md-6 mt-3 ">
                <div class="card test bg-dark text-white">
                    <div class="text-center mt-2 mb-2">
                    <p><?php echo $player['short_name']; ?></p>
                    <img class="card-img-top mb-3" src="<?php echo $player['photo']; ?>"alt="photo du joueur">
                    <p>Date de naissance : <?php echo (new dateTime($player['birthday_date']))->format('d/m/y');?></p>
                    <p>Lieu de naissance : <?php echo $player['birthday_place']; ?></p>
                    <p>Taille : <?php echo taille($player['size']); ?></p>
                    <p>Nationalité : <?php echo $player['nationality']; ?></p>
                    </div>
                  </div>
            </div>
        <?php } ?>
    </div>
</div>



<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
