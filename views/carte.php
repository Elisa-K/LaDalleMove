<div class="container p-0">
    <div class="row">
        <div class="col-12">
            <div id="carte" class=" p-relative">
                <?php foreach($listSport as $sport){
                    $position = explode(',', $sport->getCoordonnees());
                    $sportId = $sport->getId();
                    $sportUser = new SportUser();
                    $sportTeste = $sportUser->getSportUser($_SESSION['id'], $sportId);
                    if(!$sportTeste) $img = "web/images/marqueur_fait.svg";
                    else $img = "web/images/marqueur_pas_fait.svg";
                    ?>
                        <img src="<?php echo $img; ?>" alt=""  data-toggle="modal" data-target="#modal-sport-<?php echo $sportId?>" style="position:absolute; top: <?php echo $position[0]."%"?>; left: <?php echo $position[1]."%"?>; height:45px; width:45px; cursor:pointer; ">

               <?php }?>
                <img src="web/images/dalle-angevine.png" style="position: absolute; top: 56%; left: 14%; height:65px; width:65px; " alt="">
            </div>


            <div class="fixed-bottom">
                <div class="oblique-carte">
                </div>
                <a href="index.php?p=resultat" class="text-white text-decoration-none">
                    <div class="button-bleu text-center">
                        <p class="text-button" style="font-size: 27px;"><strong>Arrêter mon parcours</strong> <img src="web/Images/fleche.svg" alt=""></p>
                    </div>
                </a>
            </div>


        </div>
    </div>
</div>
<?php if(!isset($modalHelp)) { ?>
    <div class="modal " tabindex="-1" id="modal-help-carte" role="dialog">
        <div class="modal-dialog m-0  text-white text-center" role="document">
            <div class="modal-content">

                <div class="modal-body pt-1 bg-dark ">
                    <h5 class="modal-title">Commencons !</h5>
                    <p>Cette carte te permettra de t’orienter sur le site de
                        Tout Angers Bouge. Les 15 disciplines à essayer sont
                        représentées par des marqueurs noirs. Ta mission si tu
                        l’acceptes : Défier tes amis, tester un maximum de
                        sports afin de découvrir quel Dalleux sommeille en toi,
                        partager ton expérience et gagner des récompenses. </p>
                    <div class="oblique-top mx-auto">
                    </div>

                    <a class="btn btn-light text-decoration-none rounded-0"
                       data-dismiss="modal">

                        <div class="button-white text-center">
                            <p class="text-dark mb-0"><strong>Go !</strong></p>
                        </div>

                    </a>

                    <div class="oblique-bottom mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php
}
foreach($listSport as $sport){
	$sportId = $sport->getId();
?>
    <div class="modal " tabindex="-1"  id="modal-sport-<?php echo $sportId?>" role="dialog">
        <div class="modal-dialog dialog-sport modal-dialog-centered  text-white text-center" role="document">
            <div class="modal-content">

                <div class="modal-body pt-1 bg-dark ">
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title"><?php echo $sport->getName();?></h5>
                    <p><?php echo $sport->getDescript()?></p>

                    <div class="defi">
                        <img src="web/images/defie.svg" alt="" class="mr-3">
                        <a href="" class="text-white">Défier quelqu'un   <img src="web/images/fleche.svg" alt=""></a>
                    </div>
                    <div class="oblique-top mx-auto">
                    </div>

                    <a class="btn btn-light text-decoration-none rounded-0" href="index.php?p=sportTeste&sportId=<?php echo $sportId;?>">

                        <div class="button-white text-center">
                            <p class="text-dark mb-0" ><strong>Sport testé </strong>
                                <img src="web/images/valider_noir.svg" alt=""></p>
                        </div>

                    </a>

                    <div class="oblique-bottom mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }

?>
