<?php ob_start(); ?>

<div class="container">
    <div class="row">
        <?php foreach ($coachs as $index => $pres) { ?>
            <div class="col-md-4 mt-3 ">
                <?php echo $pres['name']; ?>
            </div>
        <?php } ?>
    </div>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
