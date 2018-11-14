<div class="container-fluid h-100 bg-beige p-0">
    <div class="row h-100">
        <div class="col-12 h-100">
            <div id="carte" class="p-relative" >
                <!-- <img src="web/Images/CARTE_FINAL-01.svg"  usemap="#carte-sports" alt="" class='carte'> -->

                <?php foreach($listSport as $sport){
                    $position = explode(',', $sport->getCoordonnees());
                    $sportId = $sport->getId();
                    $sportUser = new SportUser();
                    $sportTeste = $sportUser->getSportUser($_SESSION['id'], $sportId);
                    if(!$sportTeste) $img = "web/images/marqueur_fait.svg";
                    else $img = "web/images/marqueur_pas_fait.svg";
                    ?>
                        <img src="<?php echo $img; ?>" alt=""  data-toggle="modal" data-target="#modal-sport-<?php echo $sportId?>" style="position:absolute; top: <?php echo $position[0]."%"?>; left: <?php echo $position[1]."%"?>; height:45px; width:45px; cursor:pointer;z-index:103; ">

               <?php }?>
                <img src="web/images/dalle-angevine.png" style="position: absolute; top: 56%; left: 14%; height:65px; width:65px; " alt="">


            </div>


            <div class="fixed-bottom">
                <div class="oblique-carte">
                </div>

                <a class="text-white text-decoration-none" data-toggle='modal' data-target="#modal-stop-parcours" style="cursor:pointer;">
                    <div class="button-bleu text-center">
                        <p class="text-button" style="font-size: 23px;"><strong>Arrêter mon parcours</strong> </p><img src="web/Images/fleche.svg" class='mb-1' alt="">
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
            <div class="modal-oblique-bottom"></div>
        </div>
    </div>
	<?php
}
foreach($listSport as $sport){
	$sportId = $sport->getId();
?>
    <div class="modal h-100" tabindex="-1"  id="modal-sport-<?php echo $sportId?>" role="dialog">
        <div class="modal-dialog dialog-sport modal-dialog-centered  text-white text-center" role="document">

            <div class="modal-content position-relative">

                <div class="modal-body pt-1 bg-dark ">

                    <div class="modal-oblique-center-top"></div>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h6 class="modal-title pt-3"><?php echo $sport->getName();?></h6>
                    <?php getNbVoteBySport($sport->getId());
                    $nbVote = getNbVoteBySport($sport->getId());
                    if($nbVote == 0) echo "<small>(0 avis)</small>";
                    else{
                       $moyenne = getMoyBySport($sport->getId());
                       switch($moyenne){
                           case 1:
                                echo "<img src='web/Images/pas_content.svg' alt='' style='height:30px'>";
                           break;
                           case 2:
                                echo "<img src='web/Images/sourire.svg' alt='' style='height:30px'>";
                           break;
                           case 3:
                                echo "<img src='web/Images/coeur.svg' alt='' style='height:30px'>";
                           break;
                       }
                       echo "<small class='pl-2'>($nbVote avis)</small>";
                    }


                    ?>
                    <!-- afficher moyenne -->
                    <p class='pt-1'><?php echo $sport->getDescript()?></p>
                    <?php
                        $sportTeste = $sportUser->getSportUser($_SESSION['id'], $sportId);
                        //Si le sport a été testé on affiche un message

                        $textTwitter = 'Je+vous+défie+au+';
                        $textTwitter .= str_replace(' ', '+', $sport->getName());
                    ?>

                    <div class="defi pb-3">
                        <img src="web/images/defie.svg" alt="" class="mr-3">
                        <a href="https://twitter.com/intent/tweet?text=<?php echo $textTwitter; ?>&hashtags=LaDalleMove,LaDalleAngevine,ToutAngersBouge&ref_src=twsrc%5Etfw" class="text-white">Défier quelqu'un <img src="web/images/fleche.svg" alt=""></a>
                    </div>
                    <?php if($sportTeste){ ?>



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
                    <?php
                     } ?>



                    <div class="modal-oblique-center-bottom"></div>
                </div>
            </div>

        </div>
    </div>
<?php }

?>

<?php
if(isset($modalAvis) && $modalAvis){ ?>
<div class="modal h-100" tabindex="-1"  id="modal-sport-avis" role="dialog">
        <div class="modal-dialog dialog-sport modal-dialog-centered  text-white text-center" role="document">

            <div class="modal-content position-relative">

                <div class="modal-body pt-1 bg-dark ">

                    <div class="modal-oblique-center-top"></div>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <form action="index.php?p=sendVote&sportId=<?php echo $idSport; ?>" method="POST" id="form-avis">
                        <div class="form-check form-check-inline py-4 mx-auto">
                            <input type="radio" name="vote" value="1" id="vote-1" required/>
                            <label for="vote-1"><img src="web/Images/pas_content.svg"  alt="" style="width: 50px;margin-right:15px"></label>
                            <input type="radio" name="vote" value="2" id="vote-2" required/>
                            <label for="vote-2"><img src="web/Images/sourire.svg"  alt="" style="width: 50px;margin-right:15px;"></label>
                            <input type="radio" name="vote" value="3" id="vote-3" required/>
                            <label for="vote-3"><img src="web/Images/coeur.svg"  alt="" style="width: 50px;"></label>
                        </div>
                        <div>
                            <div class="oblique-top mx-auto"></div>
                            <input type="submit" class="btn btn-light text-decoration-none rounded-0" style="width:100px;" value='Valider'>
                            <!-- <a href="" class="btn btn-light text-decoration-none rounded-0" style="width:100px;" onclick="$('#form-avis').submit();">
                                <div class="button-white text-center">
                                    <p class="text-dark mb-0" ><strong>Valider</strong>
                                </div>
                            </a> -->
                            <div class="oblique-bottom mx-auto"></div>
                        </div>
                    </form>
                    <!-- afficher moyenne -->





                    <div class="modal-oblique-center-bottom"></div>
                </div>
            </div>

        </div>
    </div>


<?php }

?>

<?php
if($score < 3) $textStopParcours = "Il faut tester au moins 3 sport avant de pouvoir arrêter ton parcours" ;
else $textStopParcours = "Tu n'as déjà plus la dalle ? <br>(Tu ne pourras plus revenir en arrière)";
?>
 <div class="modal h-100" tabindex="-1"  id="modal-stop-parcours" role="dialog">
        <div class="modal-dialog dialog-sport modal-dialog-centered  text-white text-center" role="document">

            <div class="modal-content position-relative">

                <div class="modal-body pt-1 bg-dark ">

                    <div class="modal-oblique-center-top"></div>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <p class="pt-4"><?php echo $textStopParcours; ?></p>
                    <?php if($score > 2) { ?>


                    <div class='d-flex justify-content-between'>
                        <div>
                            <div class="oblique-top mx-auto"></div>
                            <a href="index.php?p=resultat" class="btn btn-light text-decoration-none rounded-0" style="width:100px;">
                                <div class="button-white text-center">
                                    <p class="text-dark mb-0" ><strong>Oui</strong>
                                </div>
                            </a>
                            <div class="oblique-bottom mx-auto"></div>
                        </div>
                        <div>
                            <div class="oblique-top mx-auto"></div>
                            <a class="btn btn-light text-decoration-none rounded-0" data-dismiss="modal" style="width:100px;">
                                <div class="button-white text-center">
                                    <p class="text-dark mb-0" ><strong>Non</strong>

                                </div>
                            </a>
                            <div class="oblique-bottom mx-auto"></div>
                        </div>
                    </div>
                    <?php
                     } ?>
                    <div class="modal-oblique-center-bottom"></div>
                </div>
            </div>

        </div>
    </div>
